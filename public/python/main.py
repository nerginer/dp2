import os
import sys
import Swoop
from MkrStrg_tools import merge_sch_eagle_cord, Max_X_sch, Max_Y_sch

offx = 0
offy = 0

max_X_Length = 800;


def print_usage_and_exit():
    print('''Usage:
    merge.py output-file [in-file [--offx offset-x] [--offy offset-y] [--rotation rotation]]...
    ''')
    sys.exit(1)


def fetch_arg(num):
    if num >= len(sys.argv):
        print('Too few arguments specified. Expected at least one more')
        print_usage_and_exit()
    return sys.argv[num]

def parse_offset(val):
    if val.endswith('mm'):
        try:
            return float(val[:-2])
        except:
            pass

    print("Can't parse {0} as an offset value. Were units forgotten?".format(val))
    print_usage_and_exit()
    


def parse_args():

    outfile = fetch_arg(1)
    infiles = []
    infile = None

    i = 2
    while i < len(sys.argv):
        arg = fetch_arg(i)
        if arg.startswith('-'):
            continue;
        else:
            # Start with new input file
            if infile != None:
                infiles.append(infile)
            
            infile = arg
            i = i + 1

    if infile != None:
        infiles.append(infile)

    return (outfile, infiles)



def main():
    global gridPos,offx,offy
    
    outfile, infiles = parse_args()
    print "outfile:" + outfile
    
    out_sch = Swoop.EagleFile.from_file('python/clean.sch')
    
   
    for infile in infiles:
        print "infile: " + infile
        in_sch = Swoop.EagleFile.from_file(infile)
        
        out_sch = merge_sch_eagle_cord(out_sch, in_sch, offx , offy)    
        
        offx = offx + Max_X_sch(in_sch);
        
        if offx > max_X_Length :
            offy = Max_Y_sch(out_sch);
            offx = 0; 
        
  
   
    out_sch.write(outfile,True,True)
    

    
    
if __name__ == "__main__":
    main()
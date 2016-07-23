import Swoop

def rename_part(old, new, schematic=None):
    """Rename a part in a schematic 
    Change the name of the part and update all references to it.
    
    :param schematic: The :class:`SchematicFile` in which to do the renaming
   
    :param old: Old part name.
    :param new: New part name.
    """
    
    if schematic is not None:
        old_part = schematic.get_part(old)
        old_part.set_name(new)
        
        for i in Swoop.From(schematic).get_sheets().get_instances():
            if i.get_part().upper() == old.upper():
                i.set_part(new.upper())
                
        for pinref in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_pinrefs():
            if pinref.get_part().upper() == old.upper():
                pinref.set_part(new.upper())

def rationalize_refdes(schematic=None):
    """
    Reset (and re-number) all reference designators based on prefixes specified in the libraries.  If the library doesn't provide a prefix, use 'U'.
    
    :param schematic: :class:`SchematicFile` to process
   
    """
    prefix_counts = {}
    for p in Swoop.From(schematic).get_parts():
        prefix = p.find_deviceset().get_prefix()
        if prefix is None:
            prefix = "U"
        rename_part(p.get_name(), "{}{}".format(prefix,prefix_counts.setdefault(prefix,1)), schematic=schematic)
        prefix_counts[prefix] += 1

                        
def rename_sch_unique(postfix_num,schematic=None):
    parts = schematic.get_parts()
    for part in parts:
        #print part.get_name()
        old = part.get_name()
        postfix = str(postfix_num)
        #postfix_num += 1
        new = old + postfix
        rename_part(old,new,schematic)

def rePos_sch(posX,posY,schematic=None):
    
    for i in Swoop.From(schematic).get_sheets().get_instances():
        i.set_x(i.get_x() + posX)
        i.set_y(i.get_y() + posY)
        for ii in i.get_attributes():
            ii.set_x(ii.get_x() + posX)
            ii.set_y(ii.get_y() + posY)
        
    
    for j in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_junctions():
        j.set_x(j.get_x() + posX)
        j.set_y(j.get_y() + posY)
    
    for w in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_wires():
        w.set_x1(w.get_x1() + posX)
        w.set_y1(w.get_y1() + posY)
        w.set_x2(w.get_x2() + posX)
        w.set_y2(w.get_y2() + posY)
    
    for l in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_labels():
        l.set_x(l.get_x() + posX)
        l.set_y(l.get_y() + posY)
    
    
    for p in Swoop.From(schematic).get_sheets().get_plain_elements():
        if isinstance(p, Swoop.Text):
            p.set_x(p.get_x() + posX)
            p.set_y(p.get_y() + posY)
        if isinstance(p, Swoop.Wire):
            p.set_x1(p.get_x1() + posX)
            p.set_y1(p.get_y1() + posY)
            p.set_x2(p.get_x2() + posX)
            p.set_y2(p.get_y2() + posY)
            
        # diger lerini de yap




def Max_X_sch(schematic=None):
    
    maxX=0;
    
    for i in Swoop.From(schematic).get_sheets().get_instances():
        if i.get_x() > maxX:
            maxX = i.get_x(); 
        for ii in i.get_attributes():
            if ii.get_x() > maxX:
                maxX = ii.get_x();

    for j in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_junctions():
        if j.get_x() > maxX:
            maxX = j.get_x();

    for w in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_wires():
        if w.get_x1() > maxX:
            maxX = w.get_x1();
        if w.get_x2() > maxX:
            maxX = w.get_x2();

    for l in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_labels():
        if l.get_x() > maxX:
            maxX = l.get_x();

    for p in Swoop.From(schematic).get_sheets().get_plain_elements():
        if isinstance(p, Swoop.Text):
            if p.get_x() > maxX:
                maxX = p.get_x();

        if isinstance(p, Swoop.Wire):
            if p.get_x1() > maxX:
                maxX = p.get_x1();
            if p.get_x2() > maxX:
                maxX = p.get_x2();

        # diger lerini de yap

    return maxX;

def Max_Y_sch(schematic=None):
    
    maxY=0;
    
    for i in Swoop.From(schematic).get_sheets().get_instances():
        if i.get_y() > maxY:
            maxY = i.get_y(); 
        for ii in i.get_attributes():
            if ii.get_y() > maxY:
                maxY = ii.get_y();

    for j in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_junctions():
        if j.get_y() > maxY:
            maxY = j.get_y();

    for w in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_wires():
        if w.get_y1() > maxY:
            maxY = w.get_y1();
        if w.get_y2() > maxY:
            maxY = w.get_y2();

    for l in Swoop.From(schematic).get_sheets().get_nets().get_segments().get_labels():
        if l.get_y() > maxY:
            maxY = l.get_y();

    for p in Swoop.From(schematic).get_sheets().get_plain_elements():
        if isinstance(p, Swoop.Text):
            if p.get_y() > maxY:
                maxY = p.get_y();

        if isinstance(p, Swoop.Wire):
            if p.get_y1() > maxY:
                maxY = p.get_y1();
            if p.get_y2() > maxY:
                maxY = p.get_y2();

        # diger lerini de yap

    return maxY;





def eagle_lib_merge(srcLib,dstLib):

    for i in srcLib.get_symbols():
        dstLib.add_symbol(i.clone())

    for i in srcLib.get_packages():
        dstLib.add_package(i.clone())
        
     
    print Swoop.From(srcLib).get_devicesets().count()
    for i in srcLib.get_devicesets():
        
        print "Deviceset: "+i.get_name() +" from lib: "+srcLib.get_name()
        
        dstLib.add_deviceset(i.clone())
    
    return dstLib  

def ShemaHasNet(sch,InNet):
    '''Like GND there can be nets which is common for both sch so we have to check if there is one '''
    print 'innet:' + InNet.get_name()
    for net in Swoop.From(sch).get_sheets().get_nets().clone():
        print 'netnames:' + net.get_name()
        if net.get_name() == InNet.get_name():
            return True
    return False
    

def eagle_sch_merge(sch1,sch2):
    '''This is the main procedure that merge two schematics '''
        
    '''First merging libraries '''
    for srcLib in Swoop.From(sch1).get_libraries().clone():
         srcLibName =  srcLib.get_name()
         print "sourceLib: " +  srcLibName
         
         
         dstLib = sch2.get_library(srcLibName)
         if dstLib is None:
            newLib = Swoop.Library()
            newLib.set_name(srcLibName)
            sch2.add_library(newLib)
            dstLib = newLib
         
         eagle_lib_merge(srcLib,dstLib)
         
         
        
    #for l in sch2.get_libraries():
        #print "all libs added: "+l.get_name()
    
    
    '''merging parts '''
    for p in Swoop.From(sch1).get_parts().clone():
	    sch2.add_part(p);

    #for sheet in Swoop.From(sch1).get_sheets().clone():
	 #   sch2.add_sheet(sheet)
    
    '''merging instances '''
    for instance in Swoop.From(sch1).get_sheets().get_instances().clone():
	    sch2.sheets[0].add_instance(instance)    

    '''merging nets control on same name nets '''
    for net in Swoop.From(sch1).get_sheets().get_nets().clone():
        if (ShemaHasNet(sch2,net) == True):
            segments = net.get_segments()
            print 'same net name found adding segment only'
            for segment in segments:
                Swoop.From(sch2).get_sheets().get_nets().with_name(net.get_name()).add_segment(segment)
       
    for net in Swoop.From(sch1).get_sheets().get_nets().clone():
        if (ShemaHasNet(sch2,net) != True):
            sch2.sheets[0].add_net(net)
        
	    
    return sch2      
	    

    
'''            
#test rename
sch_file = Swoop.EagleFile.from_file('in1.sch')
rename_sch_unique(1,sch_file)
rationalize_refdes(sch_file)
sch_file.write('sil_out.sch',True,True)


#test repos
sch_file = Swoop.EagleFile.from_file('in1.sch')
rePos_sch(100,100,sch_file)
sch_file.write('sil_out.sch',True,True)
'''    
        
#test all
def merge_sch_eagle_cord (sch1,sch2,x,y):
    
    rename_sch_unique("z",sch2)
    rePos_sch(x,y,sch2)
   
    return eagle_sch_merge(sch2,sch1)

'''
sch_file1 = Swoop.EagleFile.from_file('3.sch')
rename_sch_unique("z",sch_file1)
rePos_sch(285,0,sch_file1)
#sch_file1.write('1a.sch')

sch_file2 = Swoop.EagleFile.from_file('4.sch')
total_sch = eagle_sch_merge(sch_file1,sch_file2)
#rationalize_refdes(total_sch)
total_sch.write('sil_out.sch')
'''

'''
        
sch_file1 = Swoop.EagleFile.from_file('3.sch')
print "maxX: " + str(Max_X_sch(sch_file1));
print "maxY: " + str(Max_Y_sch(sch_file1));
'''
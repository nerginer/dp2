
<p>Now select your processing power. This is the computer of your board.
          <br>
          <br>
          <select multiple="multiple" id="processor-select" name="processor-select[]">
           @foreach ($dps as $dp)
                @foreach ($dp->categories as $cat)
                  @if ($cat->parent_id == 2)
                     <optgroup label='{{$cat->name}}'>
                     <option value='{{$dp->name}}'>{{$dp->name}} </option>
                     </optgroup>
                  @endif
                @endforeach
            
              
            
         
           @endforeach
          </select>

</p>
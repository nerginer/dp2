
<p>Every electronic system needs electrons to work on Select one or more voltage supply circuits from the design patterns.
          <br>
          <br>
          <select multiple="multiple" id="voltage-select" name="voltage-select[]">
           @foreach ($dps as $dp)
                @foreach ($dp->categories as $cat)
                  @if ($cat->parent_id == 17)
                     <optgroup label='{{$cat->name}}'>
                     <option value='{{$dp->name}}'>{{$dp->name}}</option>
                     </optgroup>
                  @endif
                @endforeach
            
              
            
         
           @endforeach
          </select>

</p>
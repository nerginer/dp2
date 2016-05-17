
<p>Your device may need to interact with the pysical world. Lets make some movement.
          <br>
          <br>
          <select multiple="multiple" id="physical-select" name="physical-select[]">
           @foreach ($dps as $dp)
                @foreach ($dp->categories as $cat)
                  @if ($cat->parent_id == 18)
                     <optgroup label='{{$cat->name}}'>
                     <option value='{{$dp->name}}'>{{$dp->name}}</option>
                     </optgroup>
                  @endif
                @endforeach
            
              
            
         
           @endforeach
          </select>

</p>



<p>If your design includes any sensor please select a design patterns that best suits. If you can not find the design pattern that you want to use send it to us. We can add it to our librarry.
          <br>
          <br>
          <select multiple="multiple" id="sensor-select" name="sensor-select[]">
           @foreach ($dps as $dp)
                @foreach ($dp->categories as $cat)
                  @if ($cat->parent_id == 1)
                     <optgroup label='{{$cat->name}}'>
                     <option value='{{$dp->name}}'>{{$dp->name}}</option>
                     </optgroup>
                  @endif
                @endforeach
            
              
            
         
           @endforeach
          </select>

</p>

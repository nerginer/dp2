
<p>Noe lets decide how our system will react with the user. Think about an user interface device
          <br>
          <br>
          <select multiple="multiple" id="userInterface-select" name="userInterface-select[]">
           @foreach ($dps as $dp)
                @foreach ($dp->categories as $cat)
                  @if ($cat->parent_id == 4)
                     <optgroup label='{{$cat->name}}'>
                     <option value='{{$dp->name}}'>{{$dp->name}}</option>
                     </optgroup>
                  @endif
                @endforeach
            
              
            
         
           @endforeach
          </select>

</p>
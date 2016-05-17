
<p>If you need to store any kind of data for your design select below
          <br>
          <br>
          <select multiple="multiple" id="storage-select" name="storage-select[]">
           @foreach ($dps as $dp)
                @foreach ($dp->categories as $cat)
                  @if ($cat->parent_id == 5)
                     <optgroup label='{{$cat->name}}'>
                     <option value='{{$dp->name}}'>{{$dp->name}}</option>
                     </optgroup>
                  @endif
                @endforeach
            
              
            
         
           @endforeach
          </select>

</p>
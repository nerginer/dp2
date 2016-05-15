
<p>If your design will need a communication ability you can sellect a design pattern like wifi or bluetooth 
          <br>
          <br>
          <select multiple="multiple" id="communication-select" name="communication-select[]">
           @foreach ($dps as $dp)
                @foreach ($dp->categories as $cat)
                  @if ($cat->parent_id == 3)
                     <optgroup label='{{$cat->name}}'>
                     <option value='{{$dp->name}}'>{{$dp->name}}</option>
                     </optgroup>
                  @endif
                @endforeach
            
              
            
         
           @endforeach
          </select>

</p>
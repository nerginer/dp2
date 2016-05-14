<script> 
    var s = $('#physical-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Physical Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected Physical Device</div>",
             afterSelect: function(values){
               $("#physicalFinal").append('<option value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#physicalFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
</script>
<p>Your device may need to interact with the pysical world. Lets make some movement.
          <br>
          <br>
          <select multiple="multiple" id="physical-select" name="physical-select[]">

            <optgroup label='Physical'>
              <option value='Relay'>Relay</option>
              <option value='rcservo'>rcservo</option>
              <option value='stepper motor'>stepper motor</option>
            </optgroup>

          </select>

</p>
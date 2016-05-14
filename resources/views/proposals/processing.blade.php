<script> 
    var s = $('#processor-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Processor</div>",
             selectionHeader:  "<div class='custom-header'>Selected Processor</div>",
             afterSelect: function(values){
               $("#processingFinal").append('<option value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#processingFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
</script>
<p>Now select your processing power. This is the computer of your board.
          <br>
          <br>
          <select multiple="multiple" id="processor-select" name="processor-select[]">

            <optgroup label='Atmega'>
              <option value='Atmega328P'>Atmega328P</option>
              <option value='Atmega2530'>Atmega2530</option>
            </optgroup>
            <optgroup label='mbed'>
              <option value='LPC1768 (Cortex-M3)'>LPC1768 (Cortex-M3)</option>
            </optgroup>
            
            

          </select>

</p>
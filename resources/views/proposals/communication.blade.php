<script> 
    var s = $('#communication-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Communication Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected Communication Device</div>",
             afterSelect: function(values){
               $("#communicationsFinal").append('<option value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#communicationsFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
</script>
<p>If your design will need a communication ability you can sellect a design pattern like wifi or bluetooth 
          <br>
          <br>
          <select multiple="multiple" id="communication-select" name="communication-select[]">

            <optgroup label='Wifi'>
              <option value='esp8266'>esp8266</option>
              <option value='CC3000'>CC3000</option>
            </optgroup>
            <optgroup label='Bluetooth'>
              <option value='nRF8001'>nRF8001</option>
            </optgroup>
            <optgroup label='USB'>
              <option value='FTDI23X'>FTDI23X</option>
            </optgroup>

          </select>

</p>
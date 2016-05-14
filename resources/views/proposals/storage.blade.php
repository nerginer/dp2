<script> 
    var s = $('#storage-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Storage Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected Storage Device</div>",
             afterSelect: function(values){
               $("#storageFinal").append('<option value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#storageFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
</script>
<p>If you need to store any kind of data for your design select below
          <br>
          <br>
          <select multiple="multiple" id="storage-select" name="storage-select[]">

            <optgroup label='Storage'>
              <option value='Sd'>Sd</option>
              <option value='EEPROM'>EEPROM</option>
              <option value='Flash Memory'>Flash Memory</option>
            </optgroup>
           
            
            

          </select>

</p>

<script> 
  
   
    var s = $('#sensor-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Sensor</div>",
             selectionHeader:  "<div class='custom-header'>Selected Sensors</div>",
             afterSelect: function(values){
               $("#sensorFinal").append('<option value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#sensorFinal option[value='"+values+"']").remove();
             }
     
       
    });
   

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
</script>

<p>If your design includes any sensor please select a design patterns that best suits. If you can not find the design pattern that you want to use send it to us. We can add it to our librarry.
          <br>
          <br>
          <select multiple="multiple" id="sensor-select" name="sensor-select[]">

            <optgroup label='Temperature'>
              <option value='epcos 100k thermistor'>epcos 100k thermistor</option>
              <option value='thermocouple'>thermocouple</option>
            </optgroup>
            <optgroup label='Accelerometer'>
              <option value='ADXL345'>ADXL345</option>
            </optgroup>

          </select>

</p>

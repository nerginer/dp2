<script> 
    var s = $('#voltage-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Voltage Source</div>",
             selectionHeader:  "<div class='custom-header'>Selected Voltage Source</div>",
     
             afterSelect: function(values){
               $("#voltageFinal").append('<option value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#voltageFinal option[value='"+values+"']").remove();
             }
 
      
    });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
</script>
<p>Every electronic system needs electrons to work on Select one or more voltage supply circuits from the design patterns.
          <br>
          <br>
          <select multiple="multiple" id="voltage-select" name="voltage-select[]">

            <optgroup label='Voltage'>
              <option value='5v out'>5v out</option>
              <option value='3.3v Lm1117'>3.3v Lm1117</option>
              <option value='1.7v out'>1.7v out</option>
            </optgroup>

          </select>

</p>
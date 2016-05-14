<script> 
    var s = $('#userInterface-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select User Interface Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected User Interface Device</div>",
             afterSelect: function(values){
               $("#userInterfaceFinal").append('<option value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#userInterfaceFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
</script>
<p>Noe lets decide how our system will react with the user. Think about an user interface device
          <br>
          <br>
          <select multiple="multiple" id="userInterface-select" name="userInterface-select[]">

            <optgroup label='LCD'>
              <option value='2x16 char'>2x16 char</option>
              <option value='color touch screen'>color touch screen</option>
            </optgroup>
            <optgroup label='Button'>
              <option value='single button'>single button</option>
            </optgroup>

          </select>

</p>
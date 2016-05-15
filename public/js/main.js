$(document).ready(function(){


    
    
    $("#example-vertical").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        
    
        onFinished: function (event, currentIndex)
        {

            
          $('select').removeAttr('disabled');
   
          document.getElementById("proposalForm").submit();
          
         

        //  alert("Submitted!");
        }
        
        
    });
    

    $("#name").on('input',function() {
      $("#proposalName").text($("#name").val());
    
      $('input[name="hProposalName"]').val($("#name").val());
      
    });
    
    $("#description").on('input',function() {
      $("#descriptionFinal").text($("#description").val());
      
      $('input[name="hProposalDescription"]').val($("#description").val());
    });
    
    
    

  
    //sensor multi select
    var s = $('#sensor-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Sensor</div>",
             selectionHeader:  "<div class='custom-header'>Selected Sensors</div>",
             afterSelect: function(values){
               $("#sensorFinal").append('<option selected value="'+values+'">'+values+'</option>');
              
               
       
             },
             afterDeselect: function(values){
               $("#sensorFinal option[value='"+values+"']").remove();
             }
     
       
    });
   

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    

    //prosessor multiselect
    var s = $('#processor-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Processor</div>",
             selectionHeader:  "<div class='custom-header'>Selected Processor</div>",
             afterSelect: function(values){
               $("#processingFinal").append('<option selected value="'+values+'">'+values+'</option>');
              
               
       
             },
             afterDeselect: function(values){
               $("#processingFinal option[value='"+values+"']").remove();
             
               
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
    
     
    var s = $('#communication-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Communication Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected Communication Device</div>",
             afterSelect: function(values){
               $("#communicationsFinal").append('<option selected value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#communicationsFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    

     
    var s = $('#userInterface-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select User Interface Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected User Interface Device</div>",
             afterSelect: function(values){
               $("#userInterfaceFinal").append('<option selected value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#userInterfaceFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    
  
    var s = $('#storage-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Storage Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected Storage Device</div>",
             afterSelect: function(values){
               $("#storageFinal").append('<option selected value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#storageFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    


    var s = $('#voltage-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Voltage Source</div>",
             selectionHeader:  "<div class='custom-header'>Selected Voltage Source</div>",
     
             afterSelect: function(values){
               $("#voltageFinal").append('<option selected value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#voltageFinal option[value='"+values+"']").remove();
             }
 
      
    });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    

    var s = $('#physical-select');
    s.multiSelect({
             selectableHeader: "<div class='custom-header'>Select Physical Device</div>",
             selectionHeader:  "<div class='custom-header'>Selected Physical Device</div>",
             afterSelect: function(values){
               $("#physicalFinal").append('<option selected value="'+values+'">'+values+'</option>');
       
             },
             afterDeselect: function(values){
               $("#physicalFinal option[value='"+values+"']").remove();
             }
 
     });

    //s.append($('<option />').text("new").val("value"));
    s.multiSelect('refresh');
    




    
});





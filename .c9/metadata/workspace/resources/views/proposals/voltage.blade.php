{"filter":false,"title":"voltage.blade.php","tooltip":"/resources/views/proposals/voltage.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":9},"action":"remove","lines":["<script> ","    var s = $('#voltage-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select Voltage Source</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected Voltage Source</div>\",","     ","             afterSelect: function(values){","               $(\"#voltageFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#voltageFinal option[value='\"+values+\"']\").remove();","             }"," ","      ","    });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":6}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1463325693990,"hash":"f7f26b3e88a5b73f0881174a22fb76f3ca3a8850"}
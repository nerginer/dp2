{"filter":false,"title":"voltage.blade.php","tooltip":"/resources/views/proposals/voltage.blade.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":9},"action":"remove","lines":["<script> ","    var s = $('#voltage-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select Voltage Source</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected Voltage Source</div>\",","     ","             afterSelect: function(values){","               $(\"#voltageFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#voltageFinal option[value='\"+values+\"']\").remove();","             }"," ","      ","    });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":6}],[{"start":{"row":9,"column":43},"end":{"row":9,"column":47},"action":"remove","lines":["name"],"id":7},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["i"]}],[{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["d"],"id":8}],[{"start":{"row":9,"column":43},"end":{"row":9,"column":45},"action":"remove","lines":["id"],"id":9},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["n"]}],[{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["a"],"id":10}],[{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["m"],"id":11}],[{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["e"],"id":12}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":4},"end":{"row":20,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1463385990611,"hash":"f7f26b3e88a5b73f0881174a22fb76f3ca3a8850"}
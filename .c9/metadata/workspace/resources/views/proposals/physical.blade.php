{"filter":false,"title":"physical.blade.php","tooltip":"/resources/views/proposals/physical.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":9},"action":"remove","lines":["<script> ","    var s = $('#physical-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select Physical Device</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected Physical Device</div>\",","             afterSelect: function(values){","               $(\"#physicalFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#physicalFinal option[value='\"+values+\"']\").remove();","             }"," ","     });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":6}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1463325732492,"hash":"245313c5046c63365a4c0b8df199ef16e82ceb6a"}
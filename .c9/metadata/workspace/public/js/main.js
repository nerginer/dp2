{"filter":false,"title":"main.js","tooltip":"/public/js/main.js","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":89,"column":4},"end":{"row":90,"column":0},"action":"insert","lines":["",""],"id":339},{"start":{"row":90,"column":0},"end":{"row":90,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":90,"column":4},"end":{"row":108,"column":9},"action":"insert","lines":["<script> ","    var s = $('#communication-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select Communication Device</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected Communication Device</div>\",","             afterSelect: function(values){","               $(\"#communicationsFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#communicationsFinal option[value='\"+values+\"']\").remove();","             }"," ","     });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":340}],[{"start":{"row":90,"column":4},"end":{"row":90,"column":12},"action":"remove","lines":["<script>"],"id":341}],[{"start":{"row":108,"column":0},"end":{"row":108,"column":9},"action":"remove","lines":["</script>"],"id":342}],[{"start":{"row":109,"column":4},"end":{"row":127,"column":9},"action":"insert","lines":["<script> ","    var s = $('#userInterface-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select User Interface Device</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected User Interface Device</div>\",","             afterSelect: function(values){","               $(\"#userInterfaceFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#userInterfaceFinal option[value='\"+values+\"']\").remove();","             }"," ","     });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":343}],[{"start":{"row":109,"column":4},"end":{"row":109,"column":12},"action":"remove","lines":["<script>"],"id":344}],[{"start":{"row":127,"column":0},"end":{"row":127,"column":9},"action":"remove","lines":["</script>"],"id":345}],[{"start":{"row":127,"column":0},"end":{"row":127,"column":1},"action":"insert","lines":[" "],"id":346}],[{"start":{"row":127,"column":1},"end":{"row":127,"column":2},"action":"insert","lines":[" "],"id":347}],[{"start":{"row":127,"column":2},"end":{"row":127,"column":3},"action":"insert","lines":[" "],"id":348}],[{"start":{"row":127,"column":3},"end":{"row":127,"column":4},"action":"insert","lines":[" "],"id":349}],[{"start":{"row":127,"column":4},"end":{"row":145,"column":9},"action":"insert","lines":["<script> ","    var s = $('#storage-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select Storage Device</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected Storage Device</div>\",","             afterSelect: function(values){","               $(\"#storageFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#storageFinal option[value='\"+values+\"']\").remove();","             }"," ","     });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":350}],[{"start":{"row":127,"column":2},"end":{"row":127,"column":13},"action":"remove","lines":["  <script> "],"id":351}],[{"start":{"row":145,"column":0},"end":{"row":145,"column":9},"action":"remove","lines":["</script>"],"id":352}],[{"start":{"row":145,"column":0},"end":{"row":146,"column":0},"action":"insert","lines":["",""],"id":353}],[{"start":{"row":146,"column":0},"end":{"row":166,"column":9},"action":"insert","lines":["<script> ","    var s = $('#voltage-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select Voltage Source</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected Voltage Source</div>\",","     ","             afterSelect: function(values){","               $(\"#voltageFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#voltageFinal option[value='\"+values+\"']\").remove();","             }"," ","      ","    });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":354}],[{"start":{"row":146,"column":0},"end":{"row":146,"column":9},"action":"remove","lines":["<script> "],"id":355}],[{"start":{"row":166,"column":0},"end":{"row":166,"column":9},"action":"remove","lines":["</script>"],"id":356}],[{"start":{"row":166,"column":0},"end":{"row":184,"column":9},"action":"insert","lines":["<script> ","    var s = $('#physical-select');","    s.multiSelect({","             selectableHeader: \"<div class='custom-header'>Select Physical Device</div>\",","             selectionHeader:  \"<div class='custom-header'>Selected Physical Device</div>\",","             afterSelect: function(values){","               $(\"#physicalFinal\").append('<option value=\"'+values+'\">'+values+'</option>');","       ","             },","             afterDeselect: function(values){","               $(\"#physicalFinal option[value='\"+values+\"']\").remove();","             }"," ","     });","","    //s.append($('<option />').text(\"new\").val(\"value\"));","    s.multiSelect('refresh');","    ","</script>"],"id":357}],[{"start":{"row":166,"column":0},"end":{"row":166,"column":9},"action":"remove","lines":["<script> "],"id":358}],[{"start":{"row":184,"column":0},"end":{"row":184,"column":9},"action":"remove","lines":["</script>"],"id":359}],[{"start":{"row":73,"column":70},"end":{"row":73,"column":71},"action":"insert","lines":[" "],"id":360}],[{"start":{"row":73,"column":71},"end":{"row":73,"column":72},"action":"insert","lines":["s"],"id":361}],[{"start":{"row":73,"column":72},"end":{"row":73,"column":73},"action":"insert","lines":["e"],"id":362}],[{"start":{"row":73,"column":73},"end":{"row":73,"column":74},"action":"insert","lines":["l"],"id":363}],[{"start":{"row":73,"column":74},"end":{"row":73,"column":75},"action":"insert","lines":["e"],"id":364}],[{"start":{"row":73,"column":74},"end":{"row":73,"column":75},"action":"remove","lines":["e"],"id":365}],[{"start":{"row":73,"column":73},"end":{"row":73,"column":74},"action":"remove","lines":["l"],"id":366}],[{"start":{"row":73,"column":72},"end":{"row":73,"column":73},"action":"remove","lines":["e"],"id":367}],[{"start":{"row":73,"column":72},"end":{"row":73,"column":73},"action":"insert","lines":["e"],"id":368}],[{"start":{"row":73,"column":73},"end":{"row":73,"column":74},"action":"insert","lines":["l"],"id":369}],[{"start":{"row":73,"column":74},"end":{"row":73,"column":75},"action":"insert","lines":["e"],"id":370}],[{"start":{"row":73,"column":75},"end":{"row":73,"column":76},"action":"insert","lines":["c"],"id":371}],[{"start":{"row":73,"column":76},"end":{"row":73,"column":77},"action":"insert","lines":["t"],"id":372}],[{"start":{"row":73,"column":77},"end":{"row":73,"column":78},"action":"insert","lines":["e"],"id":373}],[{"start":{"row":73,"column":78},"end":{"row":73,"column":79},"action":"insert","lines":["d"],"id":374}],[{"start":{"row":73,"column":78},"end":{"row":73,"column":79},"action":"remove","lines":["d"],"id":375}],[{"start":{"row":73,"column":77},"end":{"row":73,"column":78},"action":"remove","lines":["e"],"id":376}],[{"start":{"row":73,"column":76},"end":{"row":73,"column":77},"action":"remove","lines":["t"],"id":377}],[{"start":{"row":73,"column":75},"end":{"row":73,"column":76},"action":"remove","lines":["c"],"id":378}],[{"start":{"row":73,"column":74},"end":{"row":73,"column":75},"action":"remove","lines":["e"],"id":379}],[{"start":{"row":73,"column":73},"end":{"row":73,"column":74},"action":"remove","lines":["l"],"id":380}],[{"start":{"row":73,"column":72},"end":{"row":73,"column":73},"action":"remove","lines":["e"],"id":381}],[{"start":{"row":73,"column":71},"end":{"row":73,"column":72},"action":"remove","lines":["s"],"id":382}],[{"start":{"row":73,"column":70},"end":{"row":73,"column":71},"action":"remove","lines":[" "],"id":383}],[{"start":{"row":73,"column":53},"end":{"row":73,"column":54},"action":"insert","lines":["s"],"id":384}],[{"start":{"row":73,"column":54},"end":{"row":73,"column":55},"action":"insert","lines":["e"],"id":385}],[{"start":{"row":73,"column":55},"end":{"row":73,"column":56},"action":"insert","lines":["l"],"id":386}],[{"start":{"row":73,"column":56},"end":{"row":73,"column":57},"action":"insert","lines":["e"],"id":387}],[{"start":{"row":73,"column":57},"end":{"row":73,"column":58},"action":"insert","lines":["c"],"id":388}],[{"start":{"row":73,"column":58},"end":{"row":73,"column":59},"action":"insert","lines":["t"],"id":389}],[{"start":{"row":73,"column":59},"end":{"row":73,"column":60},"action":"insert","lines":["e"],"id":390}],[{"start":{"row":73,"column":60},"end":{"row":73,"column":61},"action":"insert","lines":["d"],"id":391}],[{"start":{"row":73,"column":61},"end":{"row":73,"column":62},"action":"insert","lines":[" "],"id":392}],[{"start":{"row":73,"column":53},"end":{"row":73,"column":61},"action":"remove","lines":["selected"],"id":393},{"start":{"row":73,"column":53},"end":{"row":73,"column":61},"action":"insert","lines":["selected"]}],[{"start":{"row":185,"column":0},"end":{"row":185,"column":2},"action":"insert","lines":["  "],"id":406}],[{"start":{"row":185,"column":2},"end":{"row":185,"column":4},"action":"insert","lines":["  "],"id":407}],[{"start":{"row":185,"column":4},"end":{"row":187,"column":3},"action":"insert","lines":["$('#myForm').submit(function() {","    $('select').removeAttr('disabled');","});"],"id":408}],[{"start":{"row":187,"column":0},"end":{"row":187,"column":2},"action":"insert","lines":["  "],"id":409}],[{"start":{"row":187,"column":2},"end":{"row":187,"column":4},"action":"insert","lines":["  "],"id":410}],[{"start":{"row":186,"column":4},"end":{"row":186,"column":6},"action":"insert","lines":["  "],"id":411}],[{"start":{"row":186,"column":6},"end":{"row":186,"column":8},"action":"insert","lines":["  "],"id":412}],[{"start":{"row":185,"column":8},"end":{"row":185,"column":14},"action":"remove","lines":["myForm"],"id":413},{"start":{"row":185,"column":8},"end":{"row":185,"column":20},"action":"insert","lines":["proposalForm"]}],[{"start":{"row":186,"column":11},"end":{"row":186,"column":17},"action":"remove","lines":["select"],"id":414},{"start":{"row":186,"column":11},"end":{"row":186,"column":26},"action":"insert","lines":["processingFinal"]}],[{"start":{"row":186,"column":11},"end":{"row":186,"column":12},"action":"insert","lines":["#"],"id":415}],[{"start":{"row":186,"column":11},"end":{"row":186,"column":27},"action":"remove","lines":["#processingFinal"],"id":416},{"start":{"row":186,"column":11},"end":{"row":186,"column":12},"action":"insert","lines":["s"]}],[{"start":{"row":186,"column":12},"end":{"row":186,"column":13},"action":"insert","lines":["e"],"id":417}],[{"start":{"row":186,"column":13},"end":{"row":186,"column":14},"action":"insert","lines":["l"],"id":418}],[{"start":{"row":186,"column":14},"end":{"row":186,"column":15},"action":"insert","lines":["e"],"id":419}],[{"start":{"row":186,"column":15},"end":{"row":186,"column":16},"action":"insert","lines":["c"],"id":420}],[{"start":{"row":186,"column":16},"end":{"row":186,"column":17},"action":"insert","lines":["t"],"id":421}],[{"start":{"row":186,"column":11},"end":{"row":186,"column":17},"action":"remove","lines":["select"],"id":422},{"start":{"row":186,"column":11},"end":{"row":186,"column":26},"action":"insert","lines":["processingFinal"]}],[{"start":{"row":186,"column":11},"end":{"row":186,"column":12},"action":"insert","lines":["#"],"id":423}],[{"start":{"row":185,"column":0},"end":{"row":187,"column":7},"action":"remove","lines":["    $('#proposalForm').submit(function() {","        $('#processingFinal').removeAttr('disabled');","    });"],"id":424}],[{"start":{"row":15,"column":10},"end":{"row":17,"column":7},"action":"insert","lines":["    $('#proposalForm').submit(function() {","        $('#processingFinal').removeAttr('disabled');","    });"],"id":425}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":52},"action":"remove","lines":["  $('#proposalForm').submit(function() {"],"id":426}],[{"start":{"row":17,"column":3},"end":{"row":17,"column":10},"action":"remove","lines":[" });   "],"id":427}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":[" "],"id":428}],[{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":[" "],"id":429}],[{"start":{"row":16,"column":13},"end":{"row":16,"column":29},"action":"remove","lines":["#processingFinal"],"id":430},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["e"],"id":431}],[{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["l"],"id":432}],[{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["e"],"id":433}],[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["c"],"id":434}],[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["t"],"id":435}],[{"start":{"row":52,"column":49},"end":{"row":52,"column":57},"action":"insert","lines":["selected"],"id":436}],[{"start":{"row":52,"column":57},"end":{"row":52,"column":58},"action":"insert","lines":[" "],"id":437}],[{"start":{"row":98,"column":57},"end":{"row":98,"column":65},"action":"insert","lines":["selected"],"id":438}],[{"start":{"row":98,"column":65},"end":{"row":98,"column":66},"action":"insert","lines":[" "],"id":439}],[{"start":{"row":117,"column":56},"end":{"row":117,"column":64},"action":"insert","lines":["selected"],"id":440}],[{"start":{"row":117,"column":64},"end":{"row":117,"column":65},"action":"insert","lines":[" "],"id":441}],[{"start":{"row":135,"column":50},"end":{"row":135,"column":58},"action":"insert","lines":["selected"],"id":442}],[{"start":{"row":135,"column":58},"end":{"row":135,"column":59},"action":"insert","lines":[" "],"id":443}],[{"start":{"row":155,"column":50},"end":{"row":155,"column":58},"action":"insert","lines":["selected"],"id":444}],[{"start":{"row":155,"column":58},"end":{"row":155,"column":59},"action":"insert","lines":["v"],"id":445}],[{"start":{"row":155,"column":59},"end":{"row":155,"column":60},"action":"insert","lines":[" "],"id":446}],[{"start":{"row":155,"column":59},"end":{"row":155,"column":60},"action":"remove","lines":[" "],"id":447}],[{"start":{"row":155,"column":58},"end":{"row":155,"column":59},"action":"remove","lines":["v"],"id":448}],[{"start":{"row":155,"column":58},"end":{"row":155,"column":59},"action":"insert","lines":[" "],"id":449}],[{"start":{"row":174,"column":51},"end":{"row":174,"column":59},"action":"insert","lines":["selected"],"id":450}],[{"start":{"row":174,"column":59},"end":{"row":174,"column":60},"action":"insert","lines":[" "],"id":451}]]},"ace":{"folds":[],"scrolltop":93.5,"scrollleft":0,"selection":{"start":{"row":174,"column":60},"end":{"row":174,"column":60},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1463328552963,"hash":"6670acffda90046e34b5e5c19149cbd205c0e655"}
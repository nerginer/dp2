{"filter":false,"title":"User.php","tooltip":"/app/User.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":29,"column":5},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":30,"column":4},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":31,"column":4},"end":{"row":34,"column":1},"action":"insert","lines":["public function likes()","{","    return $this->belongsToMany('App\\Post', 'likes', 'user_id', 'post_id');","}"],"id":4}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "],"id":5},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":33,"column":37},"end":{"row":33,"column":45},"action":"remove","lines":["App\\Post"],"id":6},{"start":{"row":33,"column":37},"end":{"row":33,"column":46},"action":"insert","lines":["dp::class"]}],[{"start":{"row":33,"column":46},"end":{"row":33,"column":47},"action":"remove","lines":["'"],"id":7}],[{"start":{"row":33,"column":36},"end":{"row":33,"column":37},"action":"remove","lines":["'"],"id":8}],[{"start":{"row":31,"column":0},"end":{"row":34,"column":5},"action":"remove","lines":["    public function likes()","    {","        return $this->belongsToMany(dp::class, 'likes', 'user_id', 'post_id');","    }"],"id":9}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":6},"end":{"row":19,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":139,"mode":"ace/mode/php"}},"timestamp":1461238684000,"hash":"d750e60c33ce94552da16cc327254d1170d7a262"}
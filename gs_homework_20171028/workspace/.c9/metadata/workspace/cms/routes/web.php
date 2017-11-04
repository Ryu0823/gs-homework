{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":56,"column":0},"end":{"row":76,"column":25},"action":"insert","lines":["   $validator = Validator::make($request->all(), [","        'id' => 'required',","        'item_name' => 'required|min:3|max:255',","        'item_number' => 'required|min:1|max:3',","        'item_amount' => 'required|max:6',","        'published' => 'required',","]);","//バリデーション:エラー","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","}","//データ更新","    $books = Book::find($request->id);","    $books->item_name   = $request->item_name;","    $books->item_number = $request->item_number;","    $books->item_amount = $request->item_amount;","    $books->published   = $request->published;","    $books->save();","    return redirect('/');"],"id":155}],[{"start":{"row":41,"column":46},"end":{"row":41,"column":47},"action":"remove","lines":["r"],"id":156}],[{"start":{"row":41,"column":45},"end":{"row":41,"column":46},"action":"remove","lines":["e"],"id":157}],[{"start":{"row":41,"column":44},"end":{"row":41,"column":45},"action":"remove","lines":["b"],"id":158}],[{"start":{"row":41,"column":43},"end":{"row":41,"column":44},"action":"remove","lines":["m"],"id":159}],[{"start":{"row":41,"column":42},"end":{"row":41,"column":43},"action":"remove","lines":["u"],"id":160}],[{"start":{"row":41,"column":41},"end":{"row":41,"column":42},"action":"remove","lines":["n"],"id":161}],[{"start":{"row":41,"column":40},"end":{"row":41,"column":41},"action":"remove","lines":["_"],"id":162}],[{"start":{"row":41,"column":39},"end":{"row":41,"column":40},"action":"remove","lines":["m"],"id":163}],[{"start":{"row":41,"column":38},"end":{"row":41,"column":39},"action":"remove","lines":["e"],"id":164}],[{"start":{"row":41,"column":37},"end":{"row":41,"column":38},"action":"remove","lines":["t"],"id":165}],[{"start":{"row":41,"column":36},"end":{"row":41,"column":37},"action":"remove","lines":["i"],"id":166}],[{"start":{"row":41,"column":35},"end":{"row":41,"column":36},"action":"remove","lines":[">"],"id":167}],[{"start":{"row":41,"column":34},"end":{"row":41,"column":35},"action":"remove","lines":["-"],"id":168}],[{"start":{"row":41,"column":33},"end":{"row":41,"column":34},"action":"remove","lines":["t"],"id":169}],[{"start":{"row":41,"column":32},"end":{"row":41,"column":33},"action":"remove","lines":["s"],"id":170}],[{"start":{"row":41,"column":31},"end":{"row":41,"column":32},"action":"remove","lines":["e"],"id":171}],[{"start":{"row":41,"column":30},"end":{"row":41,"column":31},"action":"remove","lines":["u"],"id":172}],[{"start":{"row":41,"column":29},"end":{"row":41,"column":30},"action":"remove","lines":["q"],"id":173}],[{"start":{"row":41,"column":28},"end":{"row":41,"column":29},"action":"remove","lines":["e"],"id":174}],[{"start":{"row":41,"column":27},"end":{"row":41,"column":28},"action":"remove","lines":["r"],"id":175}],[{"start":{"row":41,"column":26},"end":{"row":41,"column":27},"action":"remove","lines":["$"],"id":176}],[{"start":{"row":41,"column":26},"end":{"row":41,"column":30},"action":"insert","lines":["’１’;"],"id":180}],[{"start":{"row":41,"column":30},"end":{"row":41,"column":31},"action":"remove","lines":[";"],"id":181}],[{"start":{"row":41,"column":26},"end":{"row":41,"column":27},"action":"remove","lines":["’"],"id":182}],[{"start":{"row":41,"column":26},"end":{"row":41,"column":27},"action":"insert","lines":["7"],"id":183}],[{"start":{"row":41,"column":26},"end":{"row":41,"column":27},"action":"remove","lines":["7"],"id":184}],[{"start":{"row":41,"column":26},"end":{"row":41,"column":27},"action":"insert","lines":["'"],"id":185}],[{"start":{"row":41,"column":28},"end":{"row":41,"column":29},"action":"remove","lines":["’"],"id":186}],[{"start":{"row":41,"column":28},"end":{"row":41,"column":29},"action":"insert","lines":["'"],"id":187}],[{"start":{"row":42,"column":46},"end":{"row":42,"column":47},"action":"remove","lines":["t"],"id":188}],[{"start":{"row":42,"column":45},"end":{"row":42,"column":46},"action":"remove","lines":["n"],"id":189}],[{"start":{"row":42,"column":44},"end":{"row":42,"column":45},"action":"remove","lines":["u"],"id":190}],[{"start":{"row":42,"column":43},"end":{"row":42,"column":44},"action":"remove","lines":["o"],"id":191}],[{"start":{"row":42,"column":42},"end":{"row":42,"column":43},"action":"remove","lines":["m"],"id":192}],[{"start":{"row":42,"column":41},"end":{"row":42,"column":42},"action":"remove","lines":["a"],"id":193}],[{"start":{"row":42,"column":40},"end":{"row":42,"column":41},"action":"remove","lines":["_"],"id":194}],[{"start":{"row":42,"column":39},"end":{"row":42,"column":40},"action":"remove","lines":["m"],"id":195}],[{"start":{"row":42,"column":38},"end":{"row":42,"column":39},"action":"remove","lines":["e"],"id":196}],[{"start":{"row":42,"column":37},"end":{"row":42,"column":38},"action":"remove","lines":["t"],"id":197}],[{"start":{"row":42,"column":36},"end":{"row":42,"column":37},"action":"remove","lines":["i"],"id":198}],[{"start":{"row":42,"column":35},"end":{"row":42,"column":36},"action":"remove","lines":[">"],"id":199}],[{"start":{"row":42,"column":34},"end":{"row":42,"column":35},"action":"remove","lines":["-"],"id":200}],[{"start":{"row":42,"column":33},"end":{"row":42,"column":34},"action":"remove","lines":["t"],"id":201}],[{"start":{"row":42,"column":32},"end":{"row":42,"column":33},"action":"remove","lines":["s"],"id":202}],[{"start":{"row":42,"column":31},"end":{"row":42,"column":32},"action":"remove","lines":["e"],"id":203}],[{"start":{"row":42,"column":30},"end":{"row":42,"column":31},"action":"remove","lines":["u"],"id":204}],[{"start":{"row":42,"column":29},"end":{"row":42,"column":30},"action":"remove","lines":["q"],"id":205}],[{"start":{"row":42,"column":28},"end":{"row":42,"column":29},"action":"remove","lines":["e"],"id":206}],[{"start":{"row":42,"column":27},"end":{"row":42,"column":28},"action":"remove","lines":["r"],"id":207}],[{"start":{"row":42,"column":26},"end":{"row":42,"column":27},"action":"remove","lines":["$"],"id":208}],[{"start":{"row":42,"column":26},"end":{"row":42,"column":28},"action":"insert","lines":["''"],"id":209}],[{"start":{"row":42,"column":27},"end":{"row":42,"column":28},"action":"insert","lines":["1"],"id":210}],[{"start":{"row":42,"column":28},"end":{"row":42,"column":29},"action":"insert","lines":["0"],"id":211}],[{"start":{"row":42,"column":29},"end":{"row":42,"column":30},"action":"insert","lines":["0"],"id":212}],[{"start":{"row":42,"column":30},"end":{"row":42,"column":31},"action":"insert","lines":["0"],"id":213}],[{"start":{"row":43,"column":44},"end":{"row":43,"column":45},"action":"remove","lines":["d"],"id":214}],[{"start":{"row":43,"column":43},"end":{"row":43,"column":44},"action":"remove","lines":["e"],"id":215}],[{"start":{"row":43,"column":42},"end":{"row":43,"column":43},"action":"remove","lines":["h"],"id":216}],[{"start":{"row":43,"column":41},"end":{"row":43,"column":42},"action":"remove","lines":["s"],"id":217}],[{"start":{"row":43,"column":40},"end":{"row":43,"column":41},"action":"remove","lines":["i"],"id":218}],[{"start":{"row":43,"column":39},"end":{"row":43,"column":40},"action":"remove","lines":["l"],"id":219}],[{"start":{"row":43,"column":38},"end":{"row":43,"column":39},"action":"remove","lines":["b"],"id":220}],[{"start":{"row":43,"column":37},"end":{"row":43,"column":38},"action":"remove","lines":["u"],"id":221}],[{"start":{"row":43,"column":36},"end":{"row":43,"column":37},"action":"remove","lines":["p"],"id":222}],[{"start":{"row":43,"column":35},"end":{"row":43,"column":36},"action":"remove","lines":[">"],"id":223}],[{"start":{"row":43,"column":34},"end":{"row":43,"column":35},"action":"remove","lines":["-"],"id":224}],[{"start":{"row":43,"column":33},"end":{"row":43,"column":34},"action":"remove","lines":["t"],"id":225}],[{"start":{"row":43,"column":32},"end":{"row":43,"column":33},"action":"remove","lines":["s"],"id":226}],[{"start":{"row":43,"column":31},"end":{"row":43,"column":32},"action":"remove","lines":["e"],"id":227}],[{"start":{"row":43,"column":30},"end":{"row":43,"column":31},"action":"remove","lines":["u"],"id":228}],[{"start":{"row":43,"column":29},"end":{"row":43,"column":30},"action":"remove","lines":["q"],"id":229}],[{"start":{"row":43,"column":28},"end":{"row":43,"column":29},"action":"remove","lines":["e"],"id":230}],[{"start":{"row":43,"column":27},"end":{"row":43,"column":28},"action":"remove","lines":["r"],"id":231}],[{"start":{"row":43,"column":26},"end":{"row":43,"column":27},"action":"remove","lines":["$"],"id":232}],[{"start":{"row":43,"column":26},"end":{"row":43,"column":28},"action":"insert","lines":["''"],"id":233}],[{"start":{"row":43,"column":27},"end":{"row":43,"column":28},"action":"insert","lines":["2"],"id":234}],[{"start":{"row":43,"column":28},"end":{"row":43,"column":29},"action":"insert","lines":["0"],"id":235}],[{"start":{"row":43,"column":29},"end":{"row":43,"column":30},"action":"insert","lines":["1"],"id":236}],[{"start":{"row":43,"column":30},"end":{"row":43,"column":31},"action":"insert","lines":["7"],"id":237}],[{"start":{"row":43,"column":31},"end":{"row":43,"column":32},"action":"insert","lines":["-"],"id":238}],[{"start":{"row":43,"column":32},"end":{"row":43,"column":33},"action":"insert","lines":["0"],"id":239}],[{"start":{"row":43,"column":33},"end":{"row":43,"column":34},"action":"insert","lines":["3"],"id":240}],[{"start":{"row":43,"column":34},"end":{"row":43,"column":35},"action":"insert","lines":["-"],"id":241}],[{"start":{"row":43,"column":35},"end":{"row":43,"column":36},"action":"insert","lines":["0"],"id":242}],[{"start":{"row":43,"column":36},"end":{"row":43,"column":37},"action":"insert","lines":["7"],"id":243}],[{"start":{"row":43,"column":37},"end":{"row":43,"column":38},"action":"insert","lines":[" "],"id":244}],[{"start":{"row":43,"column":38},"end":{"row":43,"column":39},"action":"insert","lines":["0"],"id":245}],[{"start":{"row":43,"column":39},"end":{"row":43,"column":40},"action":"insert","lines":["0"],"id":246}],[{"start":{"row":43,"column":40},"end":{"row":43,"column":41},"action":"insert","lines":[":"],"id":247}],[{"start":{"row":43,"column":41},"end":{"row":43,"column":42},"action":"insert","lines":["0"],"id":248}],[{"start":{"row":43,"column":42},"end":{"row":43,"column":43},"action":"insert","lines":["0"],"id":249}],[{"start":{"row":43,"column":43},"end":{"row":43,"column":44},"action":"insert","lines":[":"],"id":250}],[{"start":{"row":43,"column":44},"end":{"row":43,"column":45},"action":"insert","lines":["0"],"id":251}],[{"start":{"row":43,"column":45},"end":{"row":43,"column":46},"action":"insert","lines":["0"],"id":252}],[{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "],"id":253}],[{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "],"id":254}],[{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "],"id":255}],[{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "],"id":256}],[{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"insert","lines":["    "],"id":257}],[{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"remove","lines":["    "],"id":258}]]},"ace":{"folds":[],"scrolltop":1088,"scrollleft":0,"selection":{"start":{"row":74,"column":46},"end":{"row":74,"column":46},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1509760689220,"hash":"2000b1880b50fdf2e581f9de6888ea7378c5b75d"}
{"filter":false,"title":"doll_product.blade.php","tooltip":"/laravel/resources/views/doll/doll_product.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":0,"column":0},"end":{"row":37,"column":0},"action":"insert","lines":["@extends('layouts.master2')","@section('content')","","<!--컨텐츠 타이틀-->","@section('banner')","","\t\t<header>","","\t\t</header>","\t\t<center>","\t\t<br>","\t\t<a href=\"/product?category=fairytale\" class=\"button big\">동화</a>","\t\t<a href=\"/product?category=childrenSong\" class=\"button big\">동요</a>","\t\t<a href=\"/product?category=English\" class=\"button big\">영어</a>","\t\t</center>",""," @endsection","","<section class=\"tiles\">","@foreach($content as $cont)","<?php $class = $randomNum = mt_rand(1, 6); ?>","\t<article class=\"style{{$class}}\">","\t\t<span class=\"image\">","\t\t\t<img src=\"{{$cont->cont_image}}\"style=\"width: 360px; height: 360px; \"/>","\t\t</span>","\t\t<a href=\"/productDetail?name={{$cont->cont_name}}\">","\t\t\t<h2 class=\"main_content_title\">{{$cont->cont_name}}</h2>","\t\t\t<div class=\"content\">","\t\t\t\t<p>{{$cont->cont_category}}</p>","\t\t\t</div>","\t\t</a>","\t</article>","@endforeach","</section>","@endsection","","",""],"id":1}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":38},"action":"remove","lines":["/product?category=fairytale"],"id":2}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":41},"action":"remove","lines":["/product?category=childrenSong"],"id":3}],[{"start":{"row":13,"column":11},"end":{"row":13,"column":36},"action":"remove","lines":["/product?category=English"],"id":4}],[{"start":{"row":23,"column":13},"end":{"row":23,"column":34},"action":"remove","lines":["{{$cont->cont_image}}"],"id":5}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":51},"action":"remove","lines":["/productDetail?name={{$cont->cont_name}}"],"id":6}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":52},"action":"remove","lines":["cont_name"],"id":7}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"insert","lines":["애"],"id":9}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"remove","lines":["애"],"id":11}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"remove","lines":[">"],"id":12}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"insert","lines":["d"],"id":13}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"insert","lines":["o"],"id":14}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"remove","lines":["o"],"id":15}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"remove","lines":["d"],"id":16}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"insert","lines":["-"],"id":17}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"remove","lines":["-"],"id":18}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"insert","lines":[">"],"id":19}],[{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"insert","lines":["d"],"id":20}],[{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"insert","lines":["o"],"id":21}],[{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"insert","lines":["l"],"id":22}],[{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"insert","lines":["l"],"id":23}],[{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"insert","lines":["_"],"id":24}],[{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"insert","lines":["n"],"id":25}],[{"start":{"row":26,"column":49},"end":{"row":26,"column":50},"action":"insert","lines":["a"],"id":26}],[{"start":{"row":26,"column":50},"end":{"row":26,"column":51},"action":"insert","lines":["m"],"id":27}],[{"start":{"row":26,"column":51},"end":{"row":26,"column":52},"action":"insert","lines":["e"],"id":28}],[{"start":{"row":28,"column":16},"end":{"row":28,"column":29},"action":"remove","lines":["cont_category"],"id":29}],[{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"insert","lines":["t"],"id":30}],[{"start":{"row":28,"column":17},"end":{"row":28,"column":18},"action":"insert","lines":["h"],"id":31}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["r"],"id":32}],[{"start":{"row":28,"column":19},"end":{"row":28,"column":20},"action":"insert","lines":["e"],"id":33}],[{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"insert","lines":["a"],"id":34}],[{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"insert","lines":["d"],"id":35}],[{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":["_"],"id":36}],[{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"insert","lines":["o"],"id":37}],[{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"insert","lines":["f"],"id":38}],[{"start":{"row":28,"column":25},"end":{"row":28,"column":26},"action":"insert","lines":["_"],"id":39}],[{"start":{"row":28,"column":26},"end":{"row":28,"column":27},"action":"insert","lines":["d"],"id":40}],[{"start":{"row":28,"column":27},"end":{"row":28,"column":28},"action":"insert","lines":["o"],"id":41}],[{"start":{"row":28,"column":28},"end":{"row":28,"column":29},"action":"insert","lines":["l"],"id":42}],[{"start":{"row":28,"column":29},"end":{"row":28,"column":30},"action":"insert","lines":["l"],"id":43}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":34},"action":"remove","lines":["동화"],"id":44}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["1"],"id":45}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["0"],"id":46}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["w"],"id":47}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"remove","lines":["w"],"id":48}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"remove","lines":["0"],"id":54}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"remove","lines":["1"],"id":55}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["기"],"id":60}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"remove","lines":["기"],"id":65}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["B"],"id":66}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["A"],"id":67}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["S"],"id":68}],[{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["I"],"id":69}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["C"],"id":70}],[{"start":{"row":12,"column":32},"end":{"row":12,"column":34},"action":"remove","lines":["동요"],"id":71}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":34},"action":"remove","lines":["영어"],"id":72}],[{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"insert","lines":["M"],"id":73}],[{"start":{"row":12,"column":33},"end":{"row":12,"column":34},"action":"insert","lines":["I"],"id":74}],[{"start":{"row":12,"column":34},"end":{"row":12,"column":35},"action":"insert","lines":["D"],"id":75}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"insert","lines":["D"],"id":76}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["L"],"id":77}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"remove","lines":["L"],"id":78}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"remove","lines":["D"],"id":79}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"insert","lines":["D"],"id":80}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["L"],"id":81}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"remove","lines":["L"],"id":82}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"remove","lines":["D"],"id":83}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"insert","lines":["D"],"id":84}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["E"],"id":85}],[{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"insert","lines":["L"],"id":86}],[{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"remove","lines":["L"],"id":87}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"remove","lines":["E"],"id":88}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"remove","lines":["D"],"id":89}],[{"start":{"row":12,"column":34},"end":{"row":12,"column":35},"action":"remove","lines":["D"],"id":90}],[{"start":{"row":12,"column":33},"end":{"row":12,"column":34},"action":"remove","lines":["I"],"id":91}],[{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"remove","lines":["M"],"id":92}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":37},"action":"remove","lines":["BASIC"],"id":93}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["기"],"id":98}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["본"],"id":100}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["인"],"id":105}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"remove","lines":["인"],"id":110}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"remove","lines":["본"],"id":111}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"remove","lines":["기"],"id":112}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["B"],"id":113}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["A"],"id":114}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["S"],"id":115}],[{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["C"],"id":116}],[{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"remove","lines":["C"],"id":117}],[{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["I"],"id":118}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["C"],"id":119}],[{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"insert","lines":["M"],"id":120}],[{"start":{"row":12,"column":33},"end":{"row":12,"column":34},"action":"insert","lines":["I"],"id":121}],[{"start":{"row":12,"column":34},"end":{"row":12,"column":35},"action":"insert","lines":["D"],"id":122}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"insert","lines":["D"],"id":123}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["L"],"id":124}],[{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"insert","lines":["E"],"id":125}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["H"],"id":126}],[{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["I"],"id":127}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["G"],"id":128}],[{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["H"],"id":129}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":45},"end":{"row":20,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1496644006588,"hash":"6865c5e87e2978f134b8669e6cae8185efcdd52f"}
{"filter":false,"title":"shortProductDetail.php","tooltip":"/laravel/resources/views/marionett/shortProductDetail.php","undoManager":{"mark":40,"position":40,"stack":[[{"start":{"row":0,"column":0},"end":{"row":167,"column":11},"action":"insert","lines":["@extends('layouts.master2')","","@section('assets')","<script src=\"{{secure_asset('js/turn.js')}}\"></script>","@endsection","","@section('lnb')","<li><a href=\"{{secure_url('/')}}\">전체보기</a></li>","<li><a class='dropdown-button' href='#' data-activates='category'>카테고리별</a></li>","<li><a class='dropdown-button' href='#' data-activates='price'>가격대별 조회</a></li>","<li><a class='dropdown-button' href='#' data-activates='sell'>판매순위별 조회</a></li>","<li><a class='dropdown-button' href='#' data-activates='age'>연령대별 조회</a></li>","<li><a class='dropdown-button' href='#' data-activates='date'>등록일순 조회</a></li>","<li><a href=\"{{secure_url('#keyword')}}\">키워드검색</a></li>","<li><a class='dropdown-button' href='#' data-activates='seller'>판매자 조회</a></li>","","<li><a href=\"{{secure_url('#SearchDetail')}}\">상세검색</a></li>","","<!-- Dropdown Trigger -->","","","<!-- Dropdown Structure -->","<ul id='category' class='dropdown-content'>","    <li><a href=\"{{secure_url('product?category=childrenSong')}}\">동요</a></li>","    <li><a href=\"{{secure_url('product?category=fairytale')}}\">동화</a></li>","    <li><a href=\"{{secure_url('product?category=english')}}\">영어</a></li>","    <li><a href=\"{{secure_url('product?category=dance')}}\">댄스</a></li>","    <li><a href=\"{{secure_url('product?category=education')}}\">교육</a></li>","</ul>","","","<ul id='price' class='dropdown-content'>","    <li><a href=\"{{secure_url('product?price=high')}}\">가격높은순</a></li>","    <li><a href=\"{{secure_url('product?price=low')}}\">가격낮은순</a></li>","    <li><a href=\"#!\">가격대별 입력</a></li>","</ul>","","","<ul id='sell' class='dropdown-content'>","    <li><a href=\"{{secure_url('product?sell=now')}}\">현재 판매순위</a></li>","    <li><a href=\"{{secure_url('product?sell=forYear')}}\">년간 판매순위</a></li>","    <li><a href=\"{{secure_url('product?sell=forMonth')}}\">월간 판매순위</a></li>","    <li><a href=\"{{secure_url('product?sell=forWeek')}}\">주간 판매순위</a></li>","</ul>","","","<ul id='age' class='dropdown-content'>","    <li><a href=\"{{secure_url('product?age=a0_2')}}\">0~2세</a></li>","    <li><a href=\"{{secure_url('product?age=a3_5')}}\">3~5세</a></li>","    <li><a href=\"{{secure_url('product?age=a6_8')}}\">6~8세</a></li>","    <li><a href=\"{{secure_url('product?age=all')}}\">연령무관</a></li>","    <li><a href=\"#!\">직접입력</a></li>","</ul>","","","<ul id='date' class='dropdown-content'>","    <li><a href=\"{{secure_url('product?date=new')}}\">최신순</a></li>","    <li><a href=\"{{secure_url('product?date=old')}}\">오랜된순</a></li>","</ul>","","","<ul id='seller' class='dropdown-content'>","    <li><a href=\"#!\">관리자</a></li>","    <li><a href=\"#!\">판매자 검색</a></li>","</ul>","","@endsection","","<style type=\"text/css\">","    #book div img{","        width:100%;","        height:100%;","        margin:0;","        padding:0;","    }","</style>","","@section('content')","<div class=\"row container\">","    <div class=\"col s12 contentTitle\">","        <h4 class=\"center\">{{$content->cont_name}}</h4>","        <hr>","    </div>","    <div class=\"col s12 contentMain\">","        ","        <div class=\"\" id=\"book\">","            <div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>","            <div class=\"hard\">","\t\t\t\t<table  width = \"60%\" cellpadding=\"0\" cellspacing=\"20\" rules = none>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\" align=\"center\">","\t\t\t\t\t\t\t<div align=\"center\"><h2></h2></div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">카테고리:{{$content->cont_category}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">가격:{{$content->cont_price}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">제품설명:{{$content->cont_detail}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">작성자:{{$content->user_id}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">연령대:{{$content->age}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">누적판매량:{{$content->cont_sell}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t</table>","            </div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale0.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1-1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2.JPG')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2-1.JPG')}}\"></img></div>","","  ","\t\t\t\t","\t\t\t\t<!--<div>-->","\t\t\t\t<!--    <video width=\"100%\" height=\"100%\" controls=\"controls\">-->","\t\t  <!--          <source src=\"{{$content->cont_video}}\" type=\"video/mp4\" />-->","\t\t  <!--          </video>-->","\t\t\t\t<!--</div>-->","<div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>        </div>","        ","    </div>","    <div class=\"col s12 contentMenu\">","        <hr>","        @if(Session::has('user_id'))","\t    <form name = \"purchaseForm\" action = \"/purchase?name={{$content->cont_name}}\" method=\"post\">","\t\t  <!-- Modal Trigger -->","\t\t  <a class=\"waves-effect waves-light btn left\" href=\"#purchase\">구매하기</a>","\t\t","\t\t  <!-- Modal Structure -->","\t\t  <div id=\"purchase\" class=\"modal\">","\t\t    <div class=\"modal-content\">","\t\t      <h4>구매확인창</h4>","\t\t      <p>정말로 구매하시겠습니까?</p>","\t\t    </div>","\t\t    <div class=\"modal-footer\">","\t\t      <a href=\"#cancel\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">아니오!</a>","\t\t      <button type=\"submit\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">네!</button>","\t\t    </div>","\t\t  </div>","\t    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">","\t\t</form>","       @endif","        <a href=\"{{secure_url('/')}}\" class=\"btn right\">목록으로</a>","        <!--<a href=\"{{secure_url('/content/contentList')}}\" class=\"btn right\">글 수정</a>-->","    </div>","</div>","@endsection"],"id":1}],[{"start":{"row":78,"column":0},"end":{"row":138,"column":17},"action":"remove","lines":["<div class=\"row container\">","    <div class=\"col s12 contentTitle\">","        <h4 class=\"center\">{{$content->cont_name}}</h4>","        <hr>","    </div>","    <div class=\"col s12 contentMain\">","        ","        <div class=\"\" id=\"book\">","            <div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>","            <div class=\"hard\">","\t\t\t\t<table  width = \"60%\" cellpadding=\"0\" cellspacing=\"20\" rules = none>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\" align=\"center\">","\t\t\t\t\t\t\t<div align=\"center\"><h2></h2></div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">카테고리:{{$content->cont_category}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\" height=\"16\">","\t\t\t\t\t\t\t<div align=\"left\">가격:{{$content->cont_price}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">제품설명:{{$content->cont_detail}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">작성자:{{$content->user_id}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">연령대:{{$content->age}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t\t<tr>","\t\t\t\t\t\t<td style=\"font-family:돋음; font-size:15\">","\t\t\t\t\t\t<div align=\"left\">누적판매량:{{$content->cont_sell}}</div>","\t\t\t\t\t\t</td>","\t\t\t\t\t</tr>","\t\t\t\t</table>","            </div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale0.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1-1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytale1.jpg')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2.JPG')}}\"></img></div>","            <div class=\"\"><img src=\"{{secure_asset('image/fairytail2-1.JPG')}}\"></img></div>","","  ","\t\t\t\t","\t\t\t\t<!--<div>-->","\t\t\t\t<!--    <video width=\"100%\" height=\"100%\" controls=\"controls\">-->","\t\t  <!--          <source src=\"{{$content->cont_video}}\" type=\"video/mp4\" />-->","\t\t  <!--          </video>-->","\t\t\t\t<!--</div>-->"],"id":2}],[{"start":{"row":79,"column":0},"end":{"row":80,"column":8},"action":"remove","lines":["<div class=\"hard\"><img src=\"{{$content->cont_image}}\"></img></div>        </div>","        "],"id":3}],[{"start":{"row":78,"column":0},"end":{"row":81,"column":37},"action":"remove","lines":["","","    </div>","    <div class=\"col s12 contentMenu\">"],"id":4}],[{"start":{"row":78,"column":0},"end":{"row":79,"column":0},"action":"insert","lines":["            <div class=\"\"><img src=\"{{secure_asset('image/fairytale0.jpg')}}\"></img></div>",""],"id":5}],[{"start":{"row":79,"column":0},"end":{"row":80,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":79,"column":0},"end":{"row":80,"column":0},"action":"insert","lines":["            <div class=\"\"><img src=\"{{secure_asset('image/fairytale0.jpg')}}\"></img></div>",""],"id":7}],[{"start":{"row":80,"column":0},"end":{"row":81,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":80,"column":0},"end":{"row":81,"column":0},"action":"insert","lines":["            <div class=\"\"><img src=\"{{secure_asset('image/fairytale0.jpg')}}\"></img></div>",""],"id":9}],[{"start":{"row":78,"column":52},"end":{"row":78,"column":57},"action":"remove","lines":["image"],"id":10},{"start":{"row":78,"column":52},"end":{"row":78,"column":68},"action":"insert","lines":["short_moving_img"]}],[{"start":{"row":79,"column":52},"end":{"row":79,"column":57},"action":"remove","lines":["image"],"id":11},{"start":{"row":79,"column":52},"end":{"row":79,"column":68},"action":"insert","lines":["short_moving_img"]}],[{"start":{"row":80,"column":52},"end":{"row":80,"column":57},"action":"remove","lines":["image"],"id":12},{"start":{"row":80,"column":52},"end":{"row":80,"column":68},"action":"insert","lines":["short_moving_img"]}],[{"start":{"row":78,"column":69},"end":{"row":78,"column":79},"action":"remove","lines":["fairytale0"],"id":13},{"start":{"row":78,"column":69},"end":{"row":78,"column":70},"action":"insert","lines":["c"]}],[{"start":{"row":78,"column":70},"end":{"row":78,"column":71},"action":"insert","lines":["a"],"id":14}],[{"start":{"row":78,"column":71},"end":{"row":78,"column":72},"action":"insert","lines":["t"],"id":15}],[{"start":{"row":78,"column":72},"end":{"row":78,"column":73},"action":"insert","lines":["1"],"id":16}],[{"start":{"row":78,"column":73},"end":{"row":79,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":79,"column":0},"end":{"row":79,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":79,"column":8},"end":{"row":79,"column":12},"action":"remove","lines":["    "],"id":18}],[{"start":{"row":79,"column":4},"end":{"row":79,"column":8},"action":"remove","lines":["    "],"id":19}],[{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"remove","lines":["    "],"id":20}],[{"start":{"row":78,"column":73},"end":{"row":79,"column":0},"action":"remove","lines":["",""],"id":21}],[{"start":{"row":79,"column":69},"end":{"row":79,"column":79},"action":"remove","lines":["fairytale0"],"id":22}],[{"start":{"row":79,"column":69},"end":{"row":79,"column":70},"action":"insert","lines":["d"],"id":23}],[{"start":{"row":79,"column":70},"end":{"row":79,"column":71},"action":"insert","lines":["o"],"id":24}],[{"start":{"row":79,"column":71},"end":{"row":79,"column":72},"action":"insert","lines":["g"],"id":25}],[{"start":{"row":79,"column":72},"end":{"row":79,"column":73},"action":"insert","lines":["1"],"id":26}],[{"start":{"row":80,"column":69},"end":{"row":80,"column":79},"action":"remove","lines":["fairytale0"],"id":27}],[{"start":{"row":80,"column":69},"end":{"row":80,"column":70},"action":"insert","lines":["t"],"id":28}],[{"start":{"row":80,"column":70},"end":{"row":80,"column":71},"action":"insert","lines":["i"],"id":29}],[{"start":{"row":80,"column":71},"end":{"row":80,"column":72},"action":"insert","lines":["g"],"id":30}],[{"start":{"row":80,"column":72},"end":{"row":80,"column":73},"action":"insert","lines":["e"],"id":31}],[{"start":{"row":80,"column":73},"end":{"row":80,"column":74},"action":"insert","lines":["r"],"id":32}],[{"start":{"row":80,"column":74},"end":{"row":80,"column":75},"action":"insert","lines":["1"],"id":33}],[{"start":{"row":68,"column":0},"end":{"row":75,"column":8},"action":"remove","lines":["<style type=\"text/css\">","    #book div img{","        width:100%;","        height:100%;","        margin:0;","        padding:0;","    }","</style>"],"id":34}],[{"start":{"row":67,"column":0},"end":{"row":68,"column":0},"action":"remove","lines":["",""],"id":35}],[{"start":{"row":66,"column":11},"end":{"row":67,"column":0},"action":"remove","lines":["",""],"id":36}],[{"start":{"row":96,"column":0},"end":{"row":97,"column":0},"action":"remove","lines":["        <!--<a href=\"{{secure_url('/content/contentList')}}\" class=\"btn right\">글 수정</a>-->",""],"id":37}],[{"start":{"row":73,"column":0},"end":{"row":74,"column":0},"action":"remove","lines":["",""],"id":38}],[{"start":{"row":68,"column":19},"end":{"row":69,"column":0},"action":"insert","lines":["",""],"id":39}],[{"start":{"row":69,"column":0},"end":{"row":70,"column":0},"action":"insert","lines":["        <h4 class=\"center\">{{$content->cont_name}}</h4>",""],"id":40}],[{"start":{"row":69,"column":55},"end":{"row":70,"column":0},"action":"remove","lines":["",""],"id":41}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":15},"end":{"row":6,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1501807345408,"hash":"9839cf8f7313b9bfd99e691a343212f06ace1088"}
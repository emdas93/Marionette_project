{"changed":true,"filter":false,"title":"commentBoard.blade.php","tooltip":"/laravel/resources/views/board/commentBoard.blade.php","value":"@extends('layouts.master2')\n@section('lnb')\n<ul>\n    <li><a href=\"\">{{$board}}</a></li>\n</ul>\n@endsection\n\n@section('content')\n<div class=\"row container\">\n    <div class=\"col s12\">\n        <table>\n            <tbody>\n                @foreach($boardlist as $boardlists)\n                <tr>\n                    <td>{{$boardlists->list_no}}</td>\n                    <td class=\"center-align\"><a href=\"{{secure_url('board/listRead', $boardlists->list_no)}}\">{{$boardlists->list_title}}</a></td>\n                    <td class=\"center-align\">{{$boardlists->list_name}}</td>\n                    <td class=\"center-align\">{{$boardlists->list_date}}</td>\n                    <td class=\"center-align\">{{$boardlists->list_view}}</td>\n                </tr>\n                @endforeach\n            </tbody>\n        </table>\n        \n        <br>\n        <center>\n        \n        <!--{{$start_page}}<br>-->\n        <!--{{$end_page}}<br>-->\n        <!--{{$boardlist->perPage()}}<br>-->\n        <!--{{$total_page}}-->\n        </center>\n        \n       \n        \n        \n        \n        \n        \n        <div class=\"boardMenu\">\n            <a href=\"{{secure_url('board/listWrite')}}\" class=\"btn right\">작성</a>\n        </div>\n    </div>\n</div>\n@endsection","undoManager":{"mark":-2,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":104,"column":11},"action":"insert","lines":["@extends('layouts.master2')","@section('lnb')","<ul>","    <li><a href=\"\">{{$board}}</a></li>","</ul>","@endsection","","@section('content')","<div class=\"row container\">","    <div class=\"col s12\">","        <table>","            <thead>","                <tr>","                    <th class=\"center-align\">글번호</th>","                    <th class=\"center-align\">글제목</th>","                    <th class=\"center-align\">작성자</th>","                    <th class=\"center-align\">작성날짜</th>","                    <th class=\"center-align\">조회수</th>","                </tr>","            </thead>","            <tbody>","                @foreach($boardlist as $boardlists)","                <tr>","                    <td>{{$boardlists->list_no}}</td>","                    <td class=\"center-align\"><a href=\"{{secure_url('board/listRead', $boardlists->list_no)}}\">{{$boardlists->list_title}}</a></td>","                    <td class=\"center-align\">{{$boardlists->list_name}}</td>","                    <td class=\"center-align\">{{$boardlists->list_date}}</td>","                    <td class=\"center-align\">{{$boardlists->list_view}}</td>","                </tr>","                @endforeach","            </tbody>","        </table>","        <?php","        ","        // 각 페이지마다 나타나는 리스트의 개수","        $list_size = 5;","        // 각 화면에 나타나는 페이지의 개수","        $page_size = 5; ","        ","        // 총 페이지 수","        $total_page = ceil($boardlist->total()/$list_size);","        ","        // 현재 위치해 있는 페이지의 블럭 수","        $row = ceil($boardlist->currentPage()/$page_size);","","        // 페이지네이션의 각 시작 페이지","        $start_page = (($row-1)*$page_size)+1;","        if($start_page<=0) // $start_page의 값을 매길 때 마이너스가 되지 않게 주의!","        {","            $start_page = 1;","        }","        ","        // 페이지네이션의 각 마지막 페이지","        $end_page=($start_page+$page_size)-1;","        if($total_page<$end_page) // $end_page의 값을 매길 때 총 페이지 수를 넘지 않게 주의!","        {","            $end_page=$total_page;","        }","        ","        ?>","        ","        <br>","        <center>","        @if($boardlist->currentPage() != 1) ","            <a href=\"{{$boardlist->previousPageUrl()}}\">◀ 이전</a>","        @endif","        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;","        ","        @for($i = $start_page; $i <= $end_page; $i++)","            <a href=\"{{$boardlist->url($i)}}\">[{{$i}}]</a>","        &nbsp;&nbsp;&nbsp;&nbsp;","        @endfor","        ","        &nbsp;","        @if($boardlist->currentPage() != $total_page)","            <?php","            $next=$boardlist->currentPage() + $boardlist->count();","            ","            if($total_page < $next)","            {","                $next=$total_page;","            }","            ?>","            <a href=\"{{$boardlist->nextPageUrl()}}\">다음 ▶</a>","            ","        @endif","        ","        <!--{{$start_page}}<br>-->","        <!--{{$end_page}}<br>-->","        <!--{{$boardlist->perPage()}}<br>-->","        <!--{{$total_page}}-->","        </center>","        ","       ","        ","        ","        ","        ","        ","        <div class=\"boardMenu\">","            <a href=\"{{secure_url('board/listWrite')}}\" class=\"btn right\">작성</a>","        </div>","    </div>","</div>","@endsection"],"id":1}],[{"start":{"row":32,"column":8},"end":{"row":59,"column":10},"action":"remove","lines":["<?php","        ","        // 각 페이지마다 나타나는 리스트의 개수","        $list_size = 5;","        // 각 화면에 나타나는 페이지의 개수","        $page_size = 5; ","        ","        // 총 페이지 수","        $total_page = ceil($boardlist->total()/$list_size);","        ","        // 현재 위치해 있는 페이지의 블럭 수","        $row = ceil($boardlist->currentPage()/$page_size);","","        // 페이지네이션의 각 시작 페이지","        $start_page = (($row-1)*$page_size)+1;","        if($start_page<=0) // $start_page의 값을 매길 때 마이너스가 되지 않게 주의!","        {","            $start_page = 1;","        }","        ","        // 페이지네이션의 각 마지막 페이지","        $end_page=($start_page+$page_size)-1;","        if($total_page<$end_page) // $end_page의 값을 매길 때 총 페이지 수를 넘지 않게 주의!","        {","            $end_page=$total_page;","        }","        ","        ?>"],"id":2}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":8},"action":"remove","lines":["    "],"id":3}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"remove","lines":["    "],"id":4}],[{"start":{"row":31,"column":16},"end":{"row":32,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":35,"column":8},"end":{"row":57,"column":14},"action":"remove","lines":["@if($boardlist->currentPage() != 1) ","            <a href=\"{{$boardlist->previousPageUrl()}}\">◀ 이전</a>","        @endif","        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;","        ","        @for($i = $start_page; $i <= $end_page; $i++)","            <a href=\"{{$boardlist->url($i)}}\">[{{$i}}]</a>","        &nbsp;&nbsp;&nbsp;&nbsp;","        @endfor","        ","        &nbsp;","        @if($boardlist->currentPage() != $total_page)","            <?php","            $next=$boardlist->currentPage() + $boardlist->count();","            ","            if($total_page < $next)","            {","                $next=$total_page;","            }","            ?>","            <a href=\"{{$boardlist->nextPageUrl()}}\">다음 ▶</a>","            ","        @endif"],"id":6}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":8},"action":"remove","lines":["    "],"id":7}],[{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"remove","lines":["    "],"id":8}],[{"start":{"row":34,"column":16},"end":{"row":35,"column":0},"action":"remove","lines":["",""],"id":9}],[{"start":{"row":11,"column":12},"end":{"row":19,"column":20},"action":"remove","lines":["<thead>","                <tr>","                    <th class=\"center-align\">글번호</th>","                    <th class=\"center-align\">글제목</th>","                    <th class=\"center-align\">작성자</th>","                    <th class=\"center-align\">작성날짜</th>","                    <th class=\"center-align\">조회수</th>","                </tr>","            </thead>"],"id":10}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":12},"action":"remove","lines":["    "],"id":11}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"remove","lines":["    "],"id":12}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "],"id":13}],[{"start":{"row":10,"column":15},"end":{"row":11,"column":0},"action":"remove","lines":["",""],"id":14}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":8},"end":{"row":10,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1501845747145}
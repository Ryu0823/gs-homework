{"filter":false,"title":"errors.blade.php","tooltip":"/cms/resources/views/common/errors.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":42,"column":0},"action":"insert","lines":["<!-- resources/views/books.blade.php -->","","@extends('layouts.app')","","@section('content')","    ","    ","    <div class=\"panel-body\">","        <!-- バリデーションエラーの表示に使用-->","        @include('common.errors')","        <!-- バリデーションエラーの表示に使用-->","        ","        <!-- 本登録フォーム -->","        <form action=\"{{ url('books') }}\" method=\"POST\" class=\"form-horizontal\">","            {{ csrf_field() }}","            ","            <!-- 本のタイトル -->","            <div class=\"form-group\">","                <label for=\"book\" class=\"col-sm-3 control-label\">Book</label>","                ","                <div class=\"col-sm-6\">","                    <input type=\"text\" name=\"item_name\" id=\"book-name\"class=\"form-control\">","                </div>","            </div>","            ","            <!-- 本 登録ボタン -->","            <div class=\"form-group\">","                <div class=\"col-sm-offset-3 col-sm-6\">","                    <button type=\"submit\" class=\"btn btn-default\">","                        <i class=\"glyphicon glyphicon-plus\"></i> Save","                    </button>","                </div>","            </div>","        </form>","    </div>","    ","    <!-- Book: 既に登録されてる本のリスト -->","@endsection","","","","",""],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":42,"column":0},"action":"remove","lines":["<!-- resources/views/books.blade.php -->","","@extends('layouts.app')","","@section('content')","    ","    ","    <div class=\"panel-body\">","        <!-- バリデーションエラーの表示に使用-->","        @include('common.errors')","        <!-- バリデーションエラーの表示に使用-->","        ","        <!-- 本登録フォーム -->","        <form action=\"{{ url('books') }}\" method=\"POST\" class=\"form-horizontal\">","            {{ csrf_field() }}","            ","            <!-- 本のタイトル -->","            <div class=\"form-group\">","                <label for=\"book\" class=\"col-sm-3 control-label\">Book</label>","                ","                <div class=\"col-sm-6\">","                    <input type=\"text\" name=\"item_name\" id=\"book-name\"class=\"form-control\">","                </div>","            </div>","            ","            <!-- 本 登録ボタン -->","            <div class=\"form-group\">","                <div class=\"col-sm-offset-3 col-sm-6\">","                    <button type=\"submit\" class=\"btn btn-default\">","                        <i class=\"glyphicon glyphicon-plus\"></i> Save","                    </button>","                </div>","            </div>","        </form>","    </div>","    ","    <!-- Book: 既に登録されてる本のリスト -->","@endsection","","","","",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["<!-- resources/views/common/errors.blade.php -->","","@if (count($errors) > 0)","    <!-- Form Error List -->","    <div class=\"alert alert-danger\">","        <div><strong>入力した文字を修正してください。</strong></div> ","        <div>","            <ul>","            @foreach ($errors->all() as $error)","                <li>{{ $error }}</li>","            @endforeach","            </ul>","        </div>","    </div>","@endif","","","","",""],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":0},"end":{"row":19,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"start","mode":"ace/mode/php"}},"timestamp":1509178869427,"hash":"498600aaf995495c0e02db6bba1f418e48218804"}
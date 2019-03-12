@extends('layouts.app')

@section('content')
{{-- sidebar --}}
<div class="container">
    <div class="row">
        <div class="every1">
            <div class="col-sm-2 text-center ">
                <div class="ex1">
                <img src="http://julienhome.cafe24.com/wp-content/uploads/2016/05/side-bar.png" alt="">
                <div class="menu">
                    <p class="menu-p select" >
                        <a href="{{route('community.index', ['type' => '공지사항'])}}">공지사항</a></p>
                    <p class="menu-p "><a href="{{route('community.index', ['type' => 'news'])}}">News</a></p>
                    <p class="menu-p "><a href="{{route('community.index', ['type' => '갤러리'])}}">갤러리</a></p>
                </div>

            </div>
            </div>
            
        <div class="col-sm-10">
                 @yield('inner')

        </div>
        
    </div>

</div>

</div>


@endsection

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
                        <a href="{{route('menu.waffle')}}">와플 메뉴</a></p>
                    <p class="menu-p "><a href="{{route('menu.coffee')}}">커피 메뉴</a></p>
                    <p class="menu-p "><a href="{{route('menu.drinking')}}">음료 메뉴</a></p>
                </div>

            </div>
            </div>
            
        <div class="col-sm-10">
            <div class="row">
                 @yield('inner')
            </div>

        </div>
        
    </div>

</div>

</div>


@endsection

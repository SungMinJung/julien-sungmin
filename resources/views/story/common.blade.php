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
                        <a href="{{route('brand.story')}}">브랜드 스토리</a></p>
                    <p class="menu-p"><a href="{{route('brand.ceo')}}">대표 인사말</a></p>
                    <p class="menu-p "><a href="{{route('brand.kid')}}">꼬마 줄리앙</a></p>
                    <p class="menu-p"><a href="{{route('brand.julien')}}">줄리앙 커피</a></p>
                    <p class="menu-p"><a href="{{route('brand.cofwaf')}}">커피&와플</a></p>
                    <p class="menu-p "><a href="{{route('brand.kims')}}">킴스 와플</a></p>
                    <p class="menu-p"><a href="{{route('brand.direc')}}">찾아오시는 길</a></p>
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

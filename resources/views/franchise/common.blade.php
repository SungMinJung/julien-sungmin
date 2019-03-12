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
                        <a href="{{route('franchise.competitive')}}">성공창업 경쟁력</a></p>
                    <p class="menu-p "><a href="{{route('franchise.join')}}">가맹신청</a></p>
                    <p class="menu-p "><a href="{{route('franchise.cost')}}">투자비용</a></p>
                    <p class="menu-p"><a href="{{route('franchise.guide')}}">가맹안내</a></p>
                    <p class="menu-p"><a href="{{route('franchise.explain')}}">사업설명회</a></p>
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

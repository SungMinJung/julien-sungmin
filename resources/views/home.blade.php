@extends('layouts.app')

@section('content')
<div class="row margin-header">
    <div class="col-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="active item"><img src="http://julienwaffle.com/wp-content/uploads/2017/05/003.jpg" class="img"></div>
                <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2017/05/003.jpg" class="img"></div>
                <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/11/mainbn033.jpg" class="img"></div>
            </div>

            <a class="carousel-control left" href="#carouselExampleIndicators" data-slide="prev"></a>
            <a class="carousel-control right" href="#carouselExampleIndicators" data-slide="next"></a>
        </div>
    </div>
</div>

@include('popup');

<div class="container margin-footer" style="width:1000px;">
    <!-- 첫번째 라인 -->
    <div class="row" style="margin-top:2%;">
        <div class="col-sm-4">
            <p><b>Franchise</b></p>
            <img src="http://julienwaffle.com/wp-content/uploads/2016/05/web-fran.jpg" class="image">
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
        <div class="col-sm-4">
            <p><b>Best Menu</b></p>
            <p>줄리앙와플 베스트 메뉴를 소개합니다.</p>
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="active item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EC%83%9D%ED%81%AC%EB%A6%BC%EB%94%B8%EA%B8%B0-.jpg" class="img"></div>
                            <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EB%94%B8%EA%B8%B0%EC%8A%A4%EB%AC%B4%EB%94%94-.jpg" class="img"></div>
                            <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EB%B0%94%EB%8B%90%EB%9D%BC%EC%BB%A4%ED%94%BC-.jpg" class="img"></div>
                            <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EC%B9%B4%EB%9D%BC%EB%A9%9C%EC%B4%88%EC%BD%94-.jpg" class="img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <p><b>Store</b></p>
            <p>전국 줄리앙와플 매장을 찾아보세요.</p>
            <form action="">
                <input type="text" class="col-md-8" name="keyword">
                <button class="col-sm-3">검색</button>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <p><b>신규오픈매장</b></p>
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol> -->

                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a28d0c781a6012634-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a27d27b9112687395-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201806/5b2cc1b3b14113923736-235x151.jpg" class="img col-md-4">
                            </div>
                            <div class="item">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a28d0c781a6012634-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a27d27b9112687395-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201806/5b2cc1b3b14113923736-235x151.jpg" class="img col-md-4">
                            </div>
                            <div class="item">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a28d0c781a6012634-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a27d27b9112687395-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201806/5b2cc1b3b14113923736-235x151.jpg" class="img col-md-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 두번째 라인 -->
    <div class="row" style="margin-top:5%;">
        <div class="col-sm-4">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/main_coffee-secret-1.png" class="image"></a>
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
        <div class="col-sm-4">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/메인하단-신규오픈2.jpg" class="image"></a>
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
        <div class="col-sm-4">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/main_success.jpg" class="image"></a>
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
    </div>

    <!-- 세번째 라인 -->
    <div class="row" style="margin-top:5%">
        <div class="col-sm-3">
            공지사항 NEWS
        </div>
        <div class="col-sm-3">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/main_mascot.png"></a>
        </div>
        <div class="col-sm-3">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/Group-4.png"></a>
        </div>
        <div class="col-sm-3">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/Group-5.png"></a>
        </div>
    </div>

    <!-- 네번째 라인 -->
    <div class="row" style="margin-top:5%">
        <div class="col-sm-5">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/R-0012.jpg" class="image"></a>
            <div class="middle">
                {{-- <img src="/img/imghover.png" width="50%"> --}}
            </div>
        </div>

        <div class="col-sm-5">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/생생딸기.jpg" class="image"></a>
            <div class="middle">
                {{-- <img src="/img/imghover.png" width="50%"> --}}
            </div>
        </div>

        <div class="col-sm-2 padding-init-0">
            {{-- <form action="">
                <div class="row">
                    <p class="sms_form">이름</p> <input type="text" placeholder="" style="width:50%;" class="pull-right">
                </div>
                <div class="row">
                    <p class="sms_form">전화번호</p><input type="text" placeholder="" style="width:50%;" class="pull-right">
                </div>
                <div class="row">
                        <p class="sms_form">문의내용</p> <textarea class="pull-right" style="width:50%;"></textarea>
                </div>
                <input type="submit" value="보내기">
            </form> --}}
            <table>
                <thead >
                    <p class="text-center" style="background-color: #E8DB5F">SMS 창업 지원 신청</p>
                </thead>
                <form action="">
                <tbody>
                    <tr>
                        <td><label>이름</label></td>
                        <td><input type="text" class="sms_form" name="smsName">
                        <td rowspan="3" style="height:100%;">
                            <input type="submit" value="보내기" style="height:100px; font-size:7.5pt;"></td>
                    </tr>
                    <tr>
                        <td><label>전화번호</label></td>
                        <td><input type="text" class="sms_form" name="smsPhone">
                    </tr>
                    <tr>
                        <td><label>문의내용</label></td>
                        <td><textarea class="sms_form" name="smsContent" placeholder="내용"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p class="p-inline pull-right"><input type="checkbox">
                            개인정보 수집 이용 동의
                            <a herf="">[내용보기]</a></p>
                        </td>
                    </tr>
                </tbody>
                </form>
            </table>
        </div>
    </div>
</div>
@endsection

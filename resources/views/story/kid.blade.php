@extends('story.common')

<style>
    #content{
         color: #919191;
        padding-left: 20px;
    }
    #subject{
        font-weight: bold;
        font-size: 19px;
    }
    #content2{
        font-size:13px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
        .text-center>p{
            margin-top:5%;
        }
        #startimg{
            padding-top: 100px;
        }
 
        a{
            color:#000;
        }
        a:hover{
            color:#f00;
        }
        .menu-p{
            padding:2% 0% 2% 0%;
        }
        .zoom {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transition: all 0.3s ease-in-out;
            width:100%;
         
        }
        .zoom:hover {
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2);
        }
        .imgbox{
            
            margin-bottom:5%;
            overflow: hidden;
        }

        #popup{
            position: fixed;
            z-index:1000;
            display:none;
            width:100%;
            height:100%;
            transition: all 0.3s ease-in-out;
        }
        #popimg{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
    </style>

    <script>

        function popup_show(imgurl){
            $("#popimg").attr("src", imgurl);
            $("#popup").css("background-color","rgba( 000, 000, 000, 0.5 )");
            $("#popup").css("display","block");
        }
        
        function popup_del(){
            $("#popup").css("background-color","#fff");
            $("#popup").css("display","none");
        
        }

    </script>

    
    

    <div id="popup">
        <img src="" onclick="popup_del()" id="popimg">
        {{-- <button id="pop1-btn" >제거</button> --}}
    </div>


@section('inner')


        <div id="content">
    <div class="col-sm-9 border-left" style="margin-top:5%;">
        <img id="startimg" src="http://julienwaffle.com/wp-content/uploads/2016/05/up3.png" style="width:100%;">
        <div class="row">
            <div class="col-sm-12">
                <p id="subject" style="padding-top: 50px;"><strong> 줄리앙 와플의 홍보대사 </strong> </p>
                <p id="subject"><strong> 꼬마 줄리앙</strong></p>
                <p id="content2">
                    ‘줄리앙 와플’ 매장 앞에 설치되어 있는 오줌싸개 동상은 줄리앙 와플 브랜드의 모티브이자 상징물입니다.<br>
                    줄리앙 동상은 고객들의 이목을 집중시키는 홍보대사 역할은 물론 지역의 명물로써 자리잡아 가고 있습니다.
                </p>
            </div>
        </div>
        <div class="row">
            {{-- 왼쪽 --}}
            <div class="col-sm-4">
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-1.jpg" onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-1.jpg')" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-5-705x396.jpg" onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-5-705x396.jpg')" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160709_121304829-397x705.jpg" onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160709_121304829-397x705.jpg')" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113715787-705x397.jpg" onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113715787-705x397.jpg')" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160805_135121919-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113719210-e1472007205478-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113716807-705x397.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113706809-e1472008104346-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113711524-e1472007922640-397x705.jpg" style="width:100%;"></div>
                </div>
            </div>
            {{-- 중간 --}}
            <div class="col-sm-4">
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-2-705x396.jpg" onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-2-705x396.jpg')" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                        <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-4-396x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160709_121343803-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160805_123106258-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113703302-e1472007034804-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113710672-e1472007446526-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113712314-e1472007905615-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113708265-e1472008086857-397x705.jpg" style="width:100%;"></div>
                </div>
            </div>
            {{-- 오른쪽 --}}
            <div class="col-sm-4">
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-3.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                        <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-6-705x396.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160712_144634506-705x529.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160726_182341142-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113702428-e1472006990647-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113709075-e1472007430877-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113720845-705x397.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113714170-e1472007879401-397x705.jpg" style="width:100%;"></div>
                </div>
                <div class="imgbox">
                    <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113709909-e1472008010947-397x705.jpg" style="width:100%;"></div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection





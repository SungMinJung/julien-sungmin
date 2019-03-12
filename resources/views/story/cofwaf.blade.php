@extends('story.common')

@section('inner')
<style>
    #content{
        color: #919191;
        padding-left: 20px;
        padding-top:80px;

    }
    #subject{
        font-weight: bold;
        font-size: 19px;
    }
    #content2{
        font-weight: bold;
        font-size:13px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    a:hover{
        color:#f00;
    }

    .zoom{
    transform: scale(1);
   -webkit-transform: scale(1);
   -moz-transform: scale(1);
   -ms-transform: scale(1);
   -o-transform: scale(1);
   transition: all 0.3s ease-in-out;
    }

    .zoom:hover
    {
    transform: scale(1.2);
   -webkit-transform: scale(1.2);
   -moz-transform: scale(1.2);
   -ms-transform: scale(1.2);
   -o-transform: scale(1.2);
    }

    .col-sm-6
    {
        overflow:hidden
    }

</style>
<div id="content">
   <div class="col-sm-12" style="margin-top:2%;">
       <div class="row">
           <div class="col-sm-7" style="font-size:13px; color:#666666">
           <img src="http://julienwaffle.com/wp-content/uploads/2016/05/up4.png" alt="">

        <div class="row">
            <div class="col-sm-12">
                <p id="subject" style="padding-top: 50px;"><strong> 커피 & 와플 </strong> </p>
                <p id="subject"><strong> 커피에 와플을 더하다!!</strong></p>
                <p id="content2">
                    아직도 커피만 고집하십니까?<br>
                    아직도 유사 아이템으로 성공창업을 생각하십니까?<br>
                    생각을 조금 바꿔보세요!<br>
                </p>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="zoom">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/07/%E1%84%8B%E1%85%AA%E1%84%91%E1%85%B3%E1%86%AF%E1%84%8B%E1%85%B5%E1%84%86%E1%85%B5%E1%84%8C%E1%85%B52-3x.jpg" style="width:100%; float:left;">
                </div>
                <div class="zoom">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/07/%E1%84%8C%E1%85%A2%E1%84%85%E1%85%AD%E1%84%8B%E1%85%B5%E1%84%86%E1%85%B5%E1%84%8C%E1%85%B5-2x.jpg" style="width:100%; float:left;">
                </div>
             </div>
             <div class="col-sm-6">
                <div class="zoom">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/07/%E1%84%8C%E1%85%A2%E1%84%85%E1%85%AD%E1%84%8B%E1%85%B5%E1%84%86%E1%85%B5%E1%84%8C%E1%85%B5-4x.jpg" style="width:100%; float:right;">
                </div>
                <div class="zoom">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/07/%E1%84%8B%E1%85%AA%E1%84%91%E1%85%B3%E1%86%AF%E1%84%8B%E1%85%B5%E1%84%86%E1%85%B5%E1%84%8C%E1%85%B51-2x.jpg" style="width:100%; float:right;">
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12">
                <p id="subject" style="padding-top: 50px;"><strong> 벨기에 전통 수제 와플 </strong> </p>
                <p id="subject"><strong> 커피 전문점 창업의 대안 사이드 메뉴를 찾아라!</strong></p>
                <p id="content2">
                    아직도 커피만 고집하십니까?<br>
                    아직도 유사 아이템으로 성공창업을 생각하십니까?<br>
                    생각을 조금 바꿔보세요!<br>
                </p>
                    </div>
                </div>
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                    
                        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/cw15.jpeg" style="width:100%; float:left;">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                    
                        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/cw14.jpeg" style="width:100%; float:right;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection

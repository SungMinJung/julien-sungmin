@extends('story.common')
<style>
.content{
    padding-left: 40px;
}
.firstimg{
    margin-top:130px;
}
.content .text{
    width: 432px; height: 350px;
    padding: 20px 10px 0px 0px;
    width: 50%;
    float: left;
    color: #666666;

}
.content2{
    font-size: 13px;
}
.text #title{
    margin-top: 30px;
    font-size: 20px;
    margin-bottom:20px;
}
.gallery img{
    margin-top: 50px;
    margin-left:-3px;

}
</style>
@section('inner')

<div class="content">
    <img class="firstimg" src="http://julienwaffle.com/wp-content/uploads/2016/05/up2.png" alt="">
    <div class="text">
        <div id="title">
    <strong>줄리앙 와플만의 특별한 커피<br>
    커피 줄리앙 No.9</strong></div>
    <div class="content2">
    <p> “줄리앙와플”만의 특별한 커피, 줄리앙 NO.9은 콜롬비아, 코스
        타리카등 마일드한 중남미 원두를 중심으로 블렌딩하여 부드럽고
         고소하며, 중후한 느낌이 균형있게 어우러진 커피입니다.
   </p>

        <p>
        1,700m 고도에 위치한 농장 콜롬비아 커피의 은은한 단맛, 에티
        오피아 커피의 화려한 산미, 브라질 커피의 아로마와 밸런스가 만
        나 서로 조화를 이뤄 부드럽고 편안하게 즐기실 수있도록 블랜딩
        되었으며,  100% 아라비카 커피만을 사용하여 시티 로스팅된 원
        두는 강렬한향미와 견과류의 아로마, 부드럽고 은은한 단맛, 그에
        따른 견고한 밸런스를 느끼실 수 있는 커피입니다.</p>
        <p>
        콜롬비아의 농부들이 정성껏 잘 익은 체리를 직접 하나하나 손으로<br>
        수확하듯이 커피 또한 섬세한 바리스타의 손길과 만나 고객분들께<br>
        부드럽게 스며들 수 있는 커피입니다.</p>
        </div>
    </div>
    <img style="margin:60px 0px 0px 20px; " src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-2-1-300x300.jpg" alt="">

    <div class="gallery">
        <img  src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-2-4.jpg" width="251.73" height="202.58" alt="">
        <img  src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-2-3.jpg" width="251.73" height="202.58" alt="">
        <img  src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-2-2.jpg" width="251.73" height="202.58" alt="">
        </div>


</div>
@endsection

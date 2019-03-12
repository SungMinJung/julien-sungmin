@extends('story.common')

@section('inner')



<style>
#ex1-content{
   padding-top:80px;
}
.text-center>p
{
   margin-top:5%;
}

a:hover
{
   color:#f00;
}

.zoom
{
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

.img img
{
   float: right;
   width: 90%;
   height: auto;
}

</style>
<div id="ex1-content">
   <div class="col-sm-9 border-left" style="margin-top:2%;">
       <div class="row" style="padding:10px;">
           <div class="col-sm-7" style="font-size:13px; color:#666666">
           <img src="http://julienwaffle.com/wp-content/uploads/2016/05/up1.png" alt="">
               <h4><p><strong>대한민국 No.1</p>
               <p>벨기에 전통 수제와플 전문점</strong></p></h4><br>
               <strong>
               <p>
                   줄리앙 와플은<br>
                   “벨기에 대표 길거리 음식인 와플이<br>
                   한국에서는 왜 고가로 판매되고 있을까?”<br>
                   라는 작은 생각에서 출발하였습니다.<br>
               </p>
               <p>
                   ㈜브라더푸드는 오랜 연구개발과 시행착오를 바탕으로 벨기에 와플 장인 정신을 고스란히 담은 “줄리앙 와플”만의 특별한 반죽 레시피를 개발하고, 최고급 품질의 재료들을 사용하면서도 불필요한 비용들을 최소화하여 ‘거품 없는 가격으로 맛있고 믿을 수 있는 먹거리’를 론칭하게 되었습니다.
               </p>
               <p>
                   와플의 본고장인 벨기에를 대표하는 상징물중의 하나인 오줌싸개 동상 “꼬마 줄리앙(Petit Julien)”에서 모티브를 얻어 탄생한 “줄리앙 와플”은 2015년 론칭 이후 부담 없는 가격과 뛰어난 맛으로 손님들의 발길을 끌어들이며 벨기에 정통 수제와플 업계를 선도하는 업체로 자리매김하고 있습니다.
               </p>
               <p>
                   앞으로도 저희 ㈜브라더푸드는 끊임없는 연구개발과 시스템 개선을 통해 제품 경쟁력을 확보하여 싸고 맛있는 고품질의 먹거리 개발에 최선을 다하겠습니다.
               </p>
               <p class="pull-right">
                   (주)브라더푸드 임직원 일동
               </p>
               </strong>
           </div>
           <div class="col-md-5 text-center" style="padding-top:150px;">
               <img src="http://julienwaffle.com/wp-content/uploads/2016/05/Group-23-1.png">
               <div style="height:70px" class="hr hr-invisible  avia-builder-el-7  el_after_av_image  el_before_av_image  ">
                   <span class="hr-inner "><span class="hr-inner-style"></span></span></div>
               <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-1-1-300x300.jpg" style="width:100%;height:auto;margin-left:25%;margin-bottom:20px;max-width:300px;float:right;">
           </div>
       </div>
       <div class="container">
       <div class="row">
           <div class="col-sm-6">
               <div class="zoom">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-1-2.jpg" style="width:100%;">
               </div>
           </div>
        </div>
           <div class="col-sm-6">
               <div class="zoom">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-1-3.jpg" style="width:100%;">
               </div>
           </div>
       </div>
   </div>
</div>
   @endsection

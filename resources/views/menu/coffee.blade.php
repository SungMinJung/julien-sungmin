@extends('menu.common')

@section('inner')
<style>
#ex1-content{
   padding-top:80px;
}
.text-center>p
{
   margin-top:5%;
}
</style>
<div id="ex1-content">
   <div class="col-sm-9 border-left" style="margin-top:2%;">
       <div class="row" style="padding:10px;">
           <div class="col-sm-7" style="font-size:13px; color:#666666">
           <img src="http://julienwaffle.com/wp-content/uploads/2016/05/up12-2.png" alt="">
           </div>
        </div>
    </div>
</div>
<div class="row">
      {{-- 왼쪽 --}}
      <div class="col-sm-4" style="text-align:center; font-size:11px;">
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee1.png" style="width:100%;"></div>
          <h5><strong><p><b>AMERICANO</p>
        <p>아메리카노<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          스페셜 고급원두를 적절한 비율로<br>
          블렌드하여 커피의 맛과 향을<br>
          살린 아메리카노 음료<br>
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee4.png" style="width:100%;"></div>
          <h5><strong><p><b>CAFE MOCHA</p>
        <p>카페모카<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          스페셜 고급원두로 추출한<br>
          풍부한 풍미의 에스프레소와 우유가<br>
          어우러진 라떼 음료<br>
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee7.png" style="width:100%;"></div>
          <h5><strong><p><b>NUTELLA LATTE</p>
        <p>누뗄라라떼<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          악마의 초콜릿<br>
          초코가 입에서 사르르 퍼지는<br>
          누뗄라 라떼<br>
        </p>
        </div>
      </div>
      {{-- 중간 --}}
      <div class="col-sm-4"style="text-align:center; font-size:11px;">
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee2.png"  style="width:100%;"></div>
          <h5><strong><p><b>CAFELATTE</p>
        <p>카페라떼<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          스페셜 고급원두로 추출한<br>
          풍부한 풍미의 에스프레소와 우유가<br>
          어울러진 라떼 음료<br>
        </p>
        </div>
        <div class="imgbox">
            <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee5.png" style="width:100%;"></div>
            <h5><strong><p><b>VANILLA</p>
        <p>바닐라라떼<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          스페셜 고급원두로 추출한<br>
          풍부한 풍미의 에스프레소와 우유<br>
          향긋한 바닐라 시럽까지<br>
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee8.png" style="width:100%;"></div>
          <h5><strong><p><b>GREEN TEA LATTE</p>
        <p>그린티라떼<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          진한 녹차의 풍부한 풍미가 가득<br>
         </p>
        </div>
      </div>
      {{-- 오른쪽 --}}
      <div class="col-sm-4"style="text-align:center; font-size:11px;">
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee3.png" style="width:100%;"></div>
          <h5><strong><p><b>CAPPPUCCINO</p>
        <p>카푸치노<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          스페셜 고급원두로 추출한 풍부한<br>
          풍미의 에스프레소와 우유거품이<br>
          어우러진 부드러운 카푸치노 음료<br>
         </p>
        </div>
        <div class="imgbox">
            <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/coffee6.png" style="width:100%;"></div>
            <h5><strong><p><b>CARAMEL MACHIATTO</p>
        <p>카라멜마끼야또<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          스페셜 고급원두로 추출한 풍부한<br>
          풍미의 에스프레소,우유,바닐라와<br>
          달콤한 카라멜이 어우러진 음료<br>
         </p>
        </div>
      </div>
    </div>
  </div>
@endsection

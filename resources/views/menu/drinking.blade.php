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
           <img src="http://julienwaffle.com/wp-content/uploads/2016/05/up13-1.png" alt="">
           </div>
        </div>
    </div>
</div>
<div class="row">
      {{-- 왼쪽 --}}
      <div class="col-sm-4" style="text-align:center; font-size:11px;">
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/bor6.png" style="width:100%;"></div>
          <h5><strong><p><b>OREO SHAKE</p>
        <p>오레오 쉐이크<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          초콜릿 쿠키와 달콤한 우유의<br>
          환상적인 조화<br>
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink2.png" style="width:100%;"></div>
          <h5><strong><p><b>GRAPEFRUIT ADE</p>
        <p>자몽에이드<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          자몽과 시원한 탄산수,<br>
          톡쏘는 맛이 가득<br>
          
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink7.png" style="width:100%;"></div>
          <h5><strong><p><b>GRAPEFRUIT TEA</p>
        <p>자몽차<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          상큼한 자몽과 유자의 풍미가<br>
          가득한 자몽차<br>
        
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink10.png" style="width:100%;"></div>
          <h5><strong><p><b>KIWA JUICE</p>
        <p>키위주스<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          키위를 갈아만든<br>
          시원한 주스<br>
        
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink1.png" style="width:100%;"></div>
          <h5><strong><p><b>STRAWBERRY YOGERT</p>
        <p>스트로베리 요거트<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          스페셜 딸기를 통째로 갈아<br>
          요거트와의 환상적인 조화<br>
        </p>
        </div>
      </div>
      {{-- 중간 --}}
      <div class="col-sm-4"style="text-align:center; font-size:11px;">
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink5.png"  style="width:100%;"></div>
          <h5><strong><p><b>Milk Shake</p>
        <p>밀크쉐이크<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          시원하고 달달한 밀크쉐이크<br>
        </p>
        </div>
        <div class="imgbox">
            <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink3.png" style="width:100%;"></div>
            <h5><strong><p><b>BLUE LEMON ADE</p>
        <p>블루 레몬 에이드<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          레몬과 시원한 블루<br>
          큐라소 와의 만남<br>
        </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink8.png" style="width:100%;"></div>
          <h5><strong><p><br>CITRON TEA</p>
        <p>유자차<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          상큼한 자몽과 유자의 풍미가<br>
          가득한 유자차<br>
         </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink11.png" style="width:100%;"></div>
          <h5><strong><p><b>TOMATO JUICE</p>
        <p>토마토 주스<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          토마토를 갈아만든<br>
          시원한 주스<br>
         </p>
        </div> 
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink14.png" style="width:100%;"></div>
          <h5><strong><p><b>YOGHURT SMOOTHIE</p>
        <p>요거트 스무디<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          상큼하면서도 시원한<br>
          플레인 요거트 스무디<br>
         </p>
        </div>  
      </div>
      {{-- 오른쪽 --}}
      <div class="col-sm-4"style="text-align:center; font-size:11px;">
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink4.png" style="width:100%;"></div>
          <h5><strong><p><b>CHOCO BANANA</p>
        <p>초코바나나<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          진한 초코맛과 천연 바나나가<br>
          어우러진 시원한 음료<br>
          
         </p>
        </div>
        <div class="imgbox">
            <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink6.png" style="width:100%;"></div>
            <h5><strong><p><b>PEACH ICE TEA</p>
        <p>복숭아 아이스티<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          맛있는 새콤달콤 복숭아맛의<br>
          복숭아 아이스티<br>
          
         </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink9.png" style="width:100%;"></div>
          <h5><strong><p><b>STRAWBERRY JUICE</p>
        <p>딸기 주스<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          딸기를 갈아만든<br>
          시원한 주스<br>
          
         </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink12.png" style="width:100%;"></div>
          <h5><strong><p><b>GREEN GRAPE</p>
        <p>청포도 주스<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          청포도를 갈아만든<br>
          시원한 주스<br>
         
         </p>
        </div>
        <div class="imgbox">
          <div class="zoom"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/drink13.png" style="width:100%;"></div>
          <h5><strong><p><b>STRAWBERRY SMOOTHIE</p>
        <p>딸기 스무디<b></p></h5></strong>
        <span style="color:#FF0000">
        <p>
          상큼한 딸기를<br>
          시원하게 즐길수 있는 스무디<br>
         
         </p>
        </div>
      </div>
    </div>
  </div>
@endsection

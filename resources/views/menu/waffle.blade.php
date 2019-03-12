@extends('menu.common')

@section('inner')
<style>
    .border-left{
      border-left:1px solid lightgray;
    }
    .tag{
      border-top:1px solid lightgray;
      border-bottom:1px solid lightgray;
      background-color: #eee;
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
​
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
    #ex1-content{
    padding-top:80px;
    }
</style>
 <script>
​
    function popup_show(imgurl){
      $("#popimg").attr("src", imgurl);
      $("#popup").css("background-color","rgba( 000, 000, 000, 0.5 )");
      $("#popup").css("display","block");
    }
    
    function popup_del(){
      $("#popup").css("background-color","#fff");
      $("#popup").css("display","none");
    
    }
​
  </script>
  <div id="popup">
    <img src="" onclick="popup_del()" id="popimg">
    {{-- <button id="pop1-btn" >제거</button> --}}
  </div>
<div id="ex1-content">
   <div class="col-sm-9 border-left" style="margin-top:2%;">
       <div class="row" style="padding:10px;">
           <div class="col-sm-7" style="font-size:13px; color:#666666">
           <img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EC%99%80%ED%94%8C%EC%8B%A0%EB%A9%94%EB%89%B4-%EC%83%81%EB%8B%A8.jpg" alt="">
           </div>
        </div>
    </div>
</div>
<a href="http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5.jpg" class="lightbox-added alignleft" style="float: left; margin: 0px; padding: 0px;"><img class="wp-image-1962 size-full alignleft" src="http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5.jpg" alt="와플메뉴5" width="833" height="1368" srcset="http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5.jpg 832w, http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5-182x300.jpg 182w, http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5-768x1263.jpg 768w, http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5-626x1030.jpg 626w, http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5-429x705.jpg 429w, http://julienwaffle.com/wp-content/uploads/2016/05/와플메뉴5-450x740.jpg 450w" sizes="(max-width: 832px) 100vw, 832px"><span class="image-overlay overlay-type-image" style="left: -5px; top: 4px; overflow: hidden; display: block; height: 1233px; width: 760px;"><span class="image-overlay-inside"></span></span></a>
@endsection

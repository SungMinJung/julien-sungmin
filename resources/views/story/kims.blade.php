@extends('story.common')

@section('inner')

<style>
#ex1-content{
   padding-top:80px;
}

.zoom{
    display:block;
    margin-left:auto;
    margin-right:auto;
}
</style>

<div id="ex1-content">
   <div class="col-sm-9 border-left" style="margin-top:2%;">
       <div class="row" style="padding:10px;">
           <div class="col-sm-7" style="font-size:13px; color:#666666">
           <img src="http://julienwaffle.com/wp-content/uploads/2016/07/%ED%82%B4%EC%8A%A4%EC%83%81%EB%8B%A8.jpg" alt="">
           </div>
           <div class="row">
       <div class="zoom">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/07/%ED%82%B4%EC%8A%A4%EC%99%80%ED%94%8C%EC%86%8C%EA%B0%9C.jpg" style="width:120%;">
               </div>
           </div>
      </div>
  </div> 
</div> 
        
@endsection

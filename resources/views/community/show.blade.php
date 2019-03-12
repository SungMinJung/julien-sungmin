@extends('community.common')
<style>
    #startimg{
        padding-top: 150px;
    }
    p{
        margin: 0;
        padding: 12px 22px;
        color: #545861;
        font-weight: bold;
        font-size: 22px;
        line-height: 30px;
    }
.kboard-detail{
    clear:both;
    float:left;
    width:100%;
    border-top: 1px solid #e3e3e3;
    border-bottom:1px solid #e3e3e3;
    background-color:#f9f9f9;
    font-size:12px;
}
.detail-name{
    float:left;
    font-weight:bold;
    color:#545861;
    text-align:right;
}
.detail-value{
    float:left;
    padding-left: 20px;
    color: #545861;
}
.detail-attr{
   display:inline-block;
   zoom:1;
   float:left;
   margin: 0;
   padding: 12px 35px 12px 22px; 
}
#address{
    padding-top: 30px;
    padding-left: 70px;
    backface-visibility: hidden;
}
.middle{
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top : 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform:translate(-50%,-50%);
    text-align:center;
}
.content2:hover #address {
  opacity: 0.3;
}

.content2:hover .middle {
  opacity: 1;
}
.text {
  background-color: red;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.text:active{

}
</style>
@section('inner')

<div class="content">
<img id="startimg"src="http://julienwaffle.com/wp-content/uploads/2016/05/up17-1.png" alt="">
    <p>줄리앙와플 준가맹점</p>
    <div class="kboard-detail">
        <div class="detail-attr detail-writer">
            <div class="detail-name">작성자</div>
            <div class="detail-value">{{ $document->user_id }}</div> 
        </div>
        <div class="detail-attr detail-date">
            <div class="detail-name">작성일</div>
            <div class="detail-value">{{ date("Y-m-d h:i", strtotime($document->created_at)) }}</div>
        </div>

        <div class="detail-attr detail-view">
            <div class="detail-name">조회</div>
            <div class="detail-value">{{ $document->view_count }}</div>
        </div>
    </div>

    <div class="content2">
        <img id="address" src="{{ $document->main_image }}" alt="">
        <div class="middle">
        </div>
    </div>
    {{ $document->content }}
    </div>

    <a href="{{ route('community.index', $document->type) }}" class="btn btn-primary">목록보기</a>

</div>
@endsection
@extends('franchise.common')

@section('inner')

<style>

.guidecon
{
    width: 80%;
    height: auto;
    margin: 0px auto;
}

.col-guide
{
    display: inline-block;
    margin-left: 10%;
}

.guide-img img
{
    width: 30%;
    /* margin-left: 10%; */
    margin-top: 20px;
}

</style>

<div id="ex1-content">
    <div class="col-md-12" style="margin-top:5%;">
        <div class="row" style="padding:10px;">
            <div class="col-10" style="font-size:13px; color:#666666">
                
                <div class="head">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/05/up7.png">
                </div>
                <div class="title">
                    <p>
                        <strong>가맹 안내<br></strong>
                        <strong>철저하고 체계적인 절차를 통해<br></strong>
                        <strong>손쉽고 빠른 영업개시가 가능합니다.</strong>
                    </p>
                </div>

                <div class="guidecon">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-2-1.png" alt="">
                </div>
                <div class="col-guide">
                    <div class="guide-img">
                        <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-2-2.png" alt="" title="fran-2-2" itemprop="contentURL">
                        <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/Group-11.png" alt="" title="Group 11" itemprop="contentURL">
                        <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-2-4.png" alt="" title="fran-2-4" itemprop="contentURL">
                    </div>
                </div>
                <div class="col-guide">
                    <div class="guide-img">
                        <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-2-5.png" alt="" title="fran-2-5" itemprop="contentURL">
                        <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-2-6.png" alt="" title="fran-2-6" itemprop="contentURL">
                        <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-2-7.png" alt="" title="fran-2-7" itemprop="contentURL">
                    </div>    
                </div>
                <p style="text-align: center;margin-top:7%;margin-bottom:3%;">
                    <span style="font-size:17px">항상 함께 한다는 마음으로 끝까지 함께합니다.<br></span>
                    <span style="font-size: 15px;">줄리앙 와플의 매장 성공 스토리를 들어보세요!</span>
                </p>

                <a href="{{ route('store.success') }}" style="margin:0px auto"><img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/infobtn.png" alt="" style="width:125px;height:54px;"></a>
            </div>
        </div>
    </div>
</div>

@endsection


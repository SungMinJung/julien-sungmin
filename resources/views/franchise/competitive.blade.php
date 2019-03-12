@extends('franchise.common')

@section('inner')

<style>

.con img
{
    width: 49.5%;
    height: auto;
    max-width: 416px;
    margin-top: 20px;
}

.col-competitive
{
    display: inline-flex;
    justify-content: space-between;
}

.competitive-mid img
{
    width: 95%;
    height: auto;
    margin: 0px 5px 5px 0px;
}

.tent
{
    text-align: left;
    margin-top: 10px;
}

.bottom img
{
    width: 49%;
    height: auto;
    float: left;

}

</style>

<div id="ex1-content">
    <div class="col-md-12" style="margin-top:5%;">
        <div class="row" style="padding:10px;">
            <div class="col-10" style="font-size:13px; color:#666666">
                
                <div class="head">
                    <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/up6.png" alt="">
                </div>

                <div class="title">
                    <p>
                        <strong>왜! &nbsp; why!</strong><br>
                        <strong>줄리앙 와플이 특별한가!!</strong>
                    </p>
                </div>

                <div class="con">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-1.png" alt="">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/05/frandd.png" alt="">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-3.png" alt="">
                    <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-4.png" alt="">
                </div>

                <div class="title">
                    <p>
                        <strong>답은! &nbsp; Answer!<br></strong>
                        <strong>최고의 품질과 브랜드의 경쟁력은<br>
                        프랜차이즈의 생명력</strong>
                        <strong>체계화된 선진 프랜차이즈 시스템</strong>
                    </p>
                </div>

                <div class="col-competitive">
                    <div class="competitive-mid">
                        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-5-300x300.jpg" alt="">
                    </div>
                    <div class="competitive-mid">
                        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-6-300x300.jpg" alt="">
                        
                    </div>
                    <div class="competitive-mid">
                        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-7-300x300.jpg" alt="">
                       
                    </div>
                    <div class="competitive-mid">
                        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-8-300x300.jpg" alt="">
                        
                    </div>
                </div>
                <div class="col-competitive" >
                    {{-- <div class="tent"> --}}
                        <p>
                            “벨기에 정통 수제와플” 벨기에 와플 장인기술의 노하우를&nbsp;전수받아 벨기에 현지 직수입한 생산원료를 사용하여&nbsp;최고의 맛을 보장합니다.
                        </p>
                        <p>
                            가맹본사의 자체공장에서 생산하여 배송까지 신속 편리한 업무를 하며 언제&nbsp;어디서나 신선하고 위생적인 제품을 공급받는 것이 가능합니다.
                        </p>
                        <p>
                            자체 연구 개발한 기술과 노하우를 바탕으로 삼양그룹&nbsp;식품연구소와 전용 PRE -MIX 를 연구 개발하고 있습니다.
                        </p>
                        <p>
                            우수한 품질의 제품생산을 위해 자체생산라인을 갖췄으며, 원활한 수급을 위해&nbsp;추가적인 외부 OEM 방식을 도입해 모든 프로세스를 체계적으로 관리합니다.
                        </p>
                    {{-- </div> --}}
                </div>
                        
                <div class="bottom">
                    <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-9.jpg" alt="">
                    <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/fran-1-10.jpg" alt="" style="float:right;">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

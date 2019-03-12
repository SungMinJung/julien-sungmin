@extends('story.common')

@section('inner')

{{-- 구글맵 호출 및 설정 --}}
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter=new google.maps.LatLng(37.483103, 126.995278);
    var myCenter2=new google.maps.LatLng(37.483069, 126.995858);
    
    function initialize() {
    
    var mapProp = {
        center:myCenter,
        zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var mapProp2 = {
        center:myCenter2,
        zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var map2=new google.maps.Map(document.getElementById("googleMap2"),mapProp2);
    
    var marker=new google.maps.Marker({
        position:myCenter,
    });
    var marker2=new google.maps.Marker({
        position:myCenter2,
    });
    
    marker.setMap(map);
    marker2.setMap(map2);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="ex1-content">
    <div class="col-md-12" style="margin-top:5%;">
        <div class="row" style="padding:10px;">
            <div class="col-sm-11" style="font-size:13px; color:#666666">
                
                <div class="head">
                    <img class="avia_image " src="http://julienwaffle.com/wp-content/uploads/2016/05/up5.png" alt="">
                </div>  
                
                <div class="title">
                    <p><strong>(주) 브라더푸드 찾아오시는길</strong></p>
                </div>

                <div id="googleMap"></div>
                
                <div class="content">
                    <p>
                        <strong><br>본사주소<br></strong>
                        (주) 브라더푸드<br>
                        주소 : 서울시 서초구 방배 13길 18 아크로타워 2층 209호<br>
                        대표번호 : 1670 – 5892<br>
                        메일주소 : &nbsp;brotherfood@naver.com
                    </p>
                </div>

                <div class="title">
                    <p><strong>줄리앙 와플 방배 본점 찾아오시는길</strong></p>
                </div>

                <div id="googleMap2"></div>

                <div class="content">
                    <p>
                        <strong><br>방배 본점 주소<br></strong>
                        줄리앙 와플(방배점)<br>
                        주소 :&nbsp;서울특별시 서초구 방배로 13길 18, 방배아크로타워 115호<br>
                        대표번호 : 1670 – 5892<br>
                        메일주소 : &nbsp;brotherfood@naver.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


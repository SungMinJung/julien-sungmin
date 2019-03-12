@extends('store.common')

@section('inner')
    <div class="col-md-12 padding-init-0" style="background-color: #eee;">
        <div class="col-md-6 padding-init-0">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <h2><p><b>줄리앙 매장</b></p></h2>
                <p><b>오픈 매장</b></p>
                <div class="" id="store_find">
                    <form action="">
                        <div class="row"><label>지역선택</label>
                            <select class="pull-right" style="width: 174px; height:40px;">
                                {{-- <option>전체보기</option>
                                @foreach ($storeList as $store)
                                    <option>{{ $store->area }}</option>
                                @endforeach --}}
                                <option>전체보기</option>
                                <option>서울</option>
                                <option>인천</option>
                                <option>경기도</option>
                                <option>강원도</option>
                                <option>충청북도</option>
                                <option>세종</option>
                                <option>대전</option>
                                <option>충청남도</option>
                                <option>전라북도</option>
                                <option>광주</option>
                                <option>전라남도</option>
                                <option>경상북도</option>
                                <option>대구</option>
                                <option>울산</option>
                                <option>경상남도</option>
                                <option>제주도</option>
                                <option>부산</option>
                            </select>
                            <br></div>
                        <div class="row"><label>지점명/주소검색</label><input type="text" class="pull-right" style="height:40px;"></div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="map" id="korea">
                <div class="busan">
                    <p class="p-busan"><a href="{{ route('store.finding',['area'=>'부산']) }}">부산</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/busan.png"  >
                </div>
                <div class="gangwon">
                    <p class="p-gangwon"><a href="{{ route('store.finding',['area'=>'강원']) }}">강원도</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gangwon.png"></div>
                <div class="chungbok">
                    <p class="p-chungbok"><a href="{{ route('store.finding',['area'=>'충북']) }}">충청 북도</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/chungbuk.png" ></div>
                <div class="chungnam">
                    <p class="p-chungnam"><a href="{{ route('store.finding',['area'=>'충남']) }}">충청 남도</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/chungnam.png" > </div>
                <div class="daegu">
                    <p class="p-daegu"><a href="{{ route('store.finding',['area'=>'대구']) }}">대구</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/daegu.png" >    </div>
                <div class="daejeon">
                    <p class="p-daejeon"><a href="{{ route('store.finding',['area'=>'대전']) }}">대전</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/daejeon.png">  </div>
                <div class="gwangju">
                    <p class="p-gwangju"><a href="{{ route('store.finding',['area'=>'광주']) }}">광주</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gwangju.png" >      </div>
                <div class="gyeongbuk">
                    <p class="p-gyeongbuk"><a href="{{ route('store.finding',['area'=>'경북']) }}">경상 북도</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gyeongbuk.png" ></div>
                <div class="gyeonggi">
                    <p class="p-gyeonggi"><a href="{{ route('store.finding',['area'=>'경기']) }}">경기도</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gyeonggi.png" ></div>
                <div class="gyeongnam">
                    <p class="p-gyeongnam"><a href="{{ route('store.finding',['area'=>'경남']) }}">경상 남도</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/gyeongnam.png" ></div>
                <div class="incheon">
                    <p class="p-incheon"><a href="{{ route('store.finding',['area'=>'인천']) }}">인천</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/incheon.png" ></div>
                <div class="jeju">
                    <p class="p-jeju"><a href="{{ route('store.finding',['area'=>'제주']) }}">제주</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/jeju.png"></div>
                <div class="jeonbuk">
                    <p class="p-jeonbuk"><a href="{{ route('store.finding',['area'=>'전북']) }}">전라 북도</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/jeonbuk.png" ></div>
                <div class="jeonnam">
                    <p class="p-jeonnam"><a href="{{ route('store.finding',['area'=>'전남']) }}">전라 남도</p></a>
                        <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/jeonnam.png" ></div>
                <div class="sejong">
                    <p class="p-sejong"><a href="{{ route('store.finding',['area'=>'세종']) }}">세종</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/sejong.png"></div>
                <div class="seoul">
                    <p class="p-seoul"><a href="{{ route('store.finding',['area'=>'서울']) }}">서울</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/seoul.png"></div>
                <div class="ulsan">
                    <p class="p-ulsan"><a href="{{ route('store.finding',['area'=>'울산']) }}">울산</p></a>
                    <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-franchise/images/ulsan.png" ></div>

            </div>
        </div>

        
    </div>
    <div id="store_table" class="col-md-12 padding-init-0">
        <table class="table table-bordered text-center">
            <thead >
                <tr>
                    <th class="text-center" style="width:10%;">지역</th>
                    <th class="text-center" style="width:30%;">지점명</th>
                    <th class="text-center" style="width:50%;">주소</th>
                    <th class="text-center" style="width:10%;">비고</th>
                </tr>
            </thead>
            <tbody>
                    {{-- <td>지역</td>
                    <td>지점명</td>
                    <td>주소</td>
                    <td>비고</td> --}}

                    @foreach ($storeList as $store)
                        <tr>
                            <td>{{ $store->area }}</td>
                            <td>{{ $store->title }}</td>
                            <td>{{ $store->address }}</td>
                            <td> - </td>
                        </tr>
                    @endforeach
            </tbody>            
        </table>
    </div>

@endsection


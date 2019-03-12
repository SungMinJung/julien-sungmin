@extends('franchise.common')

@section('inner')

<form method="POST" action="{{ route('franchise.store') }}" onsubmit="return FormSubmit();">
    @csrf
    <div class="form-group">
        <label for="app_name">이름 (필수)</label>
        <input type="text" class="form-control" name="app_name">
    </div>
    <div class="form-group">
        <label for="app_tel">연락처 (필수)</label>
        <input type="text" class="form-control" name="app_tel">
    </div>
    <div class="radio">
        <label for="app_tel_possible_time">통화가능시간
            <input type="radio" name="app_tel_possible_time" value="언제든지" checked="checked">언제든지
            <input type="radio" name="app_tel_possible_time" value="09시~12시">09시~12시
            <input type="radio" name="app_tel_possible_time" value="12시~14시">12시~14시
            <input type="radio" name="app_tel_possible_time" value="14시~16시">14시~16시
            <input type="radio" name="app_tel_possible_time" value="16시~18시">16시~18시
            <input type="radio" name="app_tel_possible_time" value="18시 이후">18시 이후
        </label>
    </div>

    <div class="radio">
        <label for="app_budget">창업예산
            <input type="radio" name="app_budget" value="1억미만" checked="checked">1억미만
            <input type="radio" name="app_budget" value="1억5천미만">1억5천미만
            <input type="radio" name="app_budget" value="2억미만">2억미만
            <input type="radio" name="app_budget" value="2억미만">2억미만
            <input type="radio" name="app_budget" value="2억이상">2억이상
        </label>
    </div>
    <div class="radio">
        <label for="app_space">희망평수
            <input type="radio" name="app_space" value="10평미만" checked="checked">10평미만
            <input type="radio" name="app_space" value="15평미만">15평미만
            <input type="radio" name="app_space" value="20평미만">20평미만
            <input type="radio" name="app_space" value="30평미만">30평미만
            <input type="radio" name="app_space" value="40평미만">40평미만
            <input type="radio" name="app_space" value="40평이상">40평이상
        </label>
    </div>
    <div class="radio">
        <label for="app_exist">점포유.무
            <input type="radio" name="app_exist" value="유" checked="checked">유
            <input type="radio" name="app_exist" value="무">무
        </label>
    </div>
    <div class="checkbox">
        <label for="app_recognition_route">인지경로
            <input type="checkbox" name="app_recognition_route" value="포털 사이트">포털 사이트
            <input type="checkbox" name="app_recognition_route" value="팜플렛/브로슈어">팜플렛/브로슈어
            <input type="checkbox" name="app_recognition_route" value="지인의 추천">지인의 추천
        </label>
    </div>
    <div class="radio">
        <label for="app_area">창업희망지역
            <input type="radio" name="app_area" value="무관" checked="checked">무관         
            <input type="radio" name="app_area" value="서울">서울
            <input type="radio" name="app_area" value="경기">경기        
            <input type="radio" name="app_area" value="인천">인천        
            <input type="radio" name="app_area" value="강원">강원        
            <input type="radio" name="app_area" value="충남">충남        
            <input type="radio" name="app_area" value="세종">세종        
            <input type="radio" name="app_area" value="대전">대전        
            <input type="radio" name="app_area" value="충북">충북         
            <input type="radio" name="app_area" value="부산">부산        
            <input type="radio" name="app_area" value="울산">울산            
            <input type="radio" name="app_area" value="대구">대구        
            <input type="radio" name="app_area" value="경북">경북        
            <input type="radio" name="app_area" value="경남">경남        
            <input type="radio" name="app_area" value="전남">전남        
            <input type="radio" name="app_area" value="전북">전북        
            <input type="radio" name="app_area" value="제주">제주        
        </label>
    </div>
    <div class="radio">
        <label for="app_period">창업희망 기간
            <input type="radio" name="app_period" value="지금" checked="checked">지금
            <input type="radio" name="app_period" value="1개월이내">1개월이내
            <input type="radio" name="app_period" value="2~3개월이내">2~3개월이내
            <input type="radio" name="app_period" value="3~6개월이내">3~6개월이내
            <input type="radio" name="app_period" value="6개월~1년이내">6개월~1년이내
            <input type="radio" name="app_period" value="내년이후">내년이후
        </label>
    </div>
    <p>문의내용</p>
    <textarea class="form-control" name="app_content" rows="10"></textarea>
    <div class="g-recaptcha" data-sitekey="6LcgXIsUAAAAANsy3IcfLJyBMgGLT74uoj73WaiQ"></div>

    <div class="agreeBox">
        개인정보 수집 및 이용에 대한 안내<p>
    
        <p>㈜브라더푸드는 귀하의 개인정보보호를 매우 중요시하며, 『정보통신망이용촉진등에관한법률』을 준수하고 있습니다. 
           ㈜브라더푸드의 개인정보보호방침을 통하여 귀하께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 
           어떠한 조치가 취해지고 있는지 알려드립니다.</p>
    
        <p>1. 개인정보의 수집 및 이용목적<br>
            ㈜브라더푸드는 가맹문의 및 상담을 의뢰 하고자 하는 이용자의 확인 및 마케팅 자료로써 귀하의 원하고자 하는 가맹문의 및 상담문의의 최적 서비스를 
            제공하기 위한 목적으로 귀하의 개인정보를 수집ㆍ이용하고 있습니다.</p>
        
        <p>2. 수집하는 개인 정보의 항목<br>
            - 이름, 연락처 : 상담 신청 등의 서비스 이용에 따른 본인 확인 절차에 이용</p>
        
        <p>3. 개인정보의 보유 및 이용기간<br>
            - 이용자의 개인정보는 원친적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기 합니다.<br>
            - 다만, 회사 내부 방침에 의한 정보보유 사유로 고객사의 원활한 서비스 제공을 위해 고객명, 이메일주소, 전화번호, 기타 선택 항목을 1년간 보유 할 수 있습니다.<br>
            - 상법,전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존 할 필요가 있는 경우에는 일정기간 보존합니다.<br>
            * 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년*전자상거래등에서의 소비자보호에 관한 법률(본인확인에 관한 기록(개월), 방문에 관한 기록(3개월)<br>
    </div>
    <input type="checkbox" name="app_agreement" value="agree">개인정보 수집 및 이용에 관한 사항에 동의합니다.<br>

    <button type="submit">보내기</button>
</form>
    
@endsection
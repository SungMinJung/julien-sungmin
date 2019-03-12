@extends('community.common')

<script>


function popup_show(imgurl)
{
    $("#popimg").attr("src", imgurl);
    
    $("#popup").css("background-color","rgba( 000, 000, 000, 0.5 )");
    $("#popup").css("display","block");
}

function popup_del(){
    $("#popup").css("background-color","#fff");
    $("#popup").css("display","none");

}
</script>

<div id="popup">
<img src="" onclick="popup_del()" id="popimg">
{{-- <button id="pop1-btn" >제거</button> --}}
</div>

@section('inner')
<div class="content">
    <img id="first" src="{{ $imgUrl }}" alt="">
          <!-- @foreach ($documents as $document)
                <img class="effect1" src="{{ $document->main_image }}" onclick="popup_show('{{ $documents->main_image }}')" alt="">
            @endforeach -->

    <div class="gallery1" id="horizen">
        
        <div class="row1" id="hori1">
             @foreach($img as $img)
            <img class="main_img" src="{{$img->img}}" onclick="popup_show('{{ $img->img }}')" width="100%">
             @endforeach

        </div>



    </div>

</div>
@endsection

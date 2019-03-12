@extends('community.common')
<style>
.content{
    padding-left: 30px;
}

.searchSubmit{
    background:#4A4A4A;
    border-radius: 5px;
    font-weight:400;
    font-size:11px;
    color: #FFFFFF;
    border:0;
    padding: 9px 11px;
}
#img{
    /* margin-top: 50px; */
    padding-top:150px;
    width: 100%;
    height: auto;
    max-width: 750px;
    min-width: 475px;
}
#notice {
    border: 2px solid #979797;
    font-size:12px;
  width: 100%;
  text-align:center;
}

#notice td, #notice th {
  border: 1px solid #ddd;
  padding: 8px;
}

#notice tr:hover {background-color: #ddd;}

#notice th {
  text-align:center;
  padding-top: 12px;
  padding-bottom: 12px;
  border-top:3px solid #F1D0AD;
  background-color: #F9F3B9;
  border-left:  1px solid #979797;
  border-right:  1px solid #979797;
  border-bottom:  1px solid #979797;

  /* color: black; */
}
#number{
    width:12%;
  text-align:center;

}
#notice  td {
border-left: none;
border-right: none;
border-top:  1px solid #979797;
border-bottom:  1px solid #979797;

}
#subject{
  width: 35%;

}
#writer{
width: 18%;
}
#date{

}
#cnt{
width: 12%;
}
</style>
@section('inner')
            <div class="content">
            <img id="img" src="{{ $imgUrl }}" alt="">
            <div class="row">
            <div class="col-sm-6">
                
                <input type="text" size="30">
                <button type="submit" class="searchSubmit">검색</button>
            </div><br>
            </div>


<table id="notice">
  <tr>
    <th id="number">번호</th>
    <th id="subject">제목</th>
    <th id="writer">글쓴이</th>
    <th id="date">날짜</th>
    <th id="cnt">조회</th>
  </tr>
  @foreach ($documents as $document)
  <tr>
    <td>{{ $document->id }}</td>
    <td><a href="{{ route('community.show', ['type' => $document->type, 'id' => $document->id]) }}">{{ $document->title }}</a></td>
    <td>{{ $document->user_id }}</td>
    <td>{{ date("Y년 m월 d일", strtotime($document->created_at)) }}</td>
    <td>{{ $document->view_count }}</td>
  </tr>
  @endforeach
</table>

{{ $documents->render() }}

</div>

@endsection
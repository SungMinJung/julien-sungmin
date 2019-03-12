@extends('layouts.app')

@section('content')
    
<table class="table" id="admintable">
    <tr>
        <td>제목 : {{ $document->title }} &nbsp;&nbsp;&nbsp; 작성자 : {{ $document->user_id }} &nbsp;&nbsp;&nbsp; 작성일 : {{ $document->created_at }}</td>
    </tr>
    <tr>
        <td><img src="{{ $document->main_image }}" alt="" srcset=""><br>{{ $document->content }}</td>
    </tr>
</table>

<a href="{{ route('docu.admin') }}" class="btn btn-primary" id="adminbtn">목록보기</a>

@endsection


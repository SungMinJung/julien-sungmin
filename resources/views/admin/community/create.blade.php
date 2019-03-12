@extends('layouts.app')

@section('content')
    
<form action="{{ route('docu.store') }}" method="post" enctype="multipart/form-data" id="dropzone" class="dropzone" style="margin: 10% auto;width: 750px;text-align: center;">
    @csrf
    <label for="type">종류</label>
    <select name="type" class="form-control">
        <option>공지사항</option>
        <option>news</option>
        <option>갤러리</option>
    </select>
    <label for="type">제목</label>
    <input type="text" name="title" class="form-control">
    <label for="type">내용</label>
    <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
    <label for="type">사진</label>
    <input type="file" name="main_image">

    <button type="submit" id="adminbtn" class="btn btn-primary" style="margin-left:93%">등록</button>
</form>

@endsection
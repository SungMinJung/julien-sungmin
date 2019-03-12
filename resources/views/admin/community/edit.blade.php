@extends('layouts.app')

@section('content')
    
<form action="{{ route('docu.update', $document->id) }}" method="post" enctype="multipart/form-data" id="admintable">
    @csrf
    @method('put')
    <label for="type">종류</label>
    <select name="type" class="form-control">
        <option>공지사항</option>
        <option>news</option>
        <option>갤러리</option>
    </select>
    <label for="type">제목</label>
<input type="text" name="title" class="form-control" value="{{ $document->title }}">
    <label for="type">내용</label>
    <textarea name="content" cols="30" rows="10" class="form-control">{{ $document->content }}</textarea>
    <label for="type">사진</label>
    <input type="file" name="main_image">

    <button type="submit" id="adminbtn" class="btn btn-primary" style="margin-left:93%">등록</button>
</form>

@endsection
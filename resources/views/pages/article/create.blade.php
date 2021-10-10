@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{URL::to('/bai-viet')}}" method="POST">
        @csrf
        <h2>Thêm bài viết</h2>
        <div>
            <label for="">Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div>
            <label for="">Nội dung</label>
            <textarea name="content" class="form-control" rows="5" required="required">{{old('content')}}</textarea>
            @error('content')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>


@endsection('content')

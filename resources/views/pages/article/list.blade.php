@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Danh sách bài viết</h2>

    <?php
        $message = Session::get('message');
        if($message){
            echo '<span>',$message.'</span>';
            Session::put('message',null);
        }
    ?>
    <ul>
        @foreach($articles as $article)
        <li>{{ $article->title }}</li>
        @endforeach
    </ul>

    <div>
        {{$articles->links()}}
    </div>
</div>

@endsection('content')

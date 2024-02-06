@extends('layouts.app')
@section('content')
@foreach($posts as $post)
<div class="container-fluid mt-20" style="margin-left:-10px;">
    <div class="row">
        <div class="col-md-12 w-75 ms-auto me-auto">
            <div class="card mb-2">
                <p>{{$post->body}}</p>
            </div>
            <div class="d-flex">
                <a href="{{route('post.edit',$post)}}"><button class="btn btn-primary mb-4">編集</button></a>
                <form method="post" action="{{route('post.destroy',$post)}}" class="ms-1">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onClick="return confirm('本当に削除しますか？');">削除</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
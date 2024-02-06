@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 mt-6  ms-auto me-auto">
        <div class="card-body">
            <h1 class="mt4">つぶやきの作成</h1>
            <form method="post" action="{{route('post.store')}}">
                @csrf
                <div class="form-group mt-3">
                    <label for="body">つぶやきの内容</label>
                    <textarea name="body" class="form-control" id="body" cols="30" rows="10" placeholder="ここにつぶやきの内容を書く"></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-3">つぶやく</button>
            </form>
        </div>
    </div>
</div>
@endsection
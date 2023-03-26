@extends('layouts.insta')
@section('content')
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="media" name="media">
            @error('media')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="posttext" name="posttext" rows="3"></textarea>
                @error('posttext')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success" name="saveposts">Добавить</button>
        </div>
    </form>
@endsection

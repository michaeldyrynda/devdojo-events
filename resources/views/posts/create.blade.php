@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 mx-auto">
            <form method="post" action="{{ route('posts.store') }}">
                @csrf
                <div class="card px-4 py-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input id="title" name="title" type="text" class="form-control {{ $errors->first('title', 'is-invalid') }}">
                            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <label for="body">Post Body</label>
                            <textarea id="body" name="body" rows="10" class="form-control {{ $errors->first('body', 'is-invalid') }}"></textarea>
                            {!! $errors->first('body', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

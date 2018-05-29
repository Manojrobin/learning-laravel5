@extends('layouts.app')
@section('content')

    <div class="container  d-flex justify-content-center">
        <div class="container">
            <div class="jumbotron text-center">
                <div class="panel-body">Show your post on laravel demo site.</div>
            </div>
        </div>

        <div class="container">
                <div class="form-group">
                    <label for="exampleInputpost">Post Name</label>
                   {{ $page->name }}
                </div>
                <div class="form-group">
                    <label for="exampleInputcontent">Post content</label>
                   {{ $page->content }}
                <div class="form-group">
                    <label for="exampleimage">Image </label>
                </div>

           <image src="/images/{{ $page->image }}" height="300px" width="500px" ></image>
        </div>
    </div>
@endsection

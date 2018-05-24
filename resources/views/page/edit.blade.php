@extends('layouts.app')
@section('content')

<div class="container  d-flex justify-content-center">
    <div class="container">
        <div class="jumbotron text-center">
            <h2>Update Post</h2>
            <div class="panel-body">Create your post on laravel demo site.</div>
        </div>
    </div>

    <div class="container">

        @include('alert::bootstrap')
        <form  action="{{ route('page.update',['page'=>$page->id]) }}" method="POST" enctype='multipart/form-data'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="exampleInputpost">Post Name</label>
                <input type="text" class="form-control" id="exampleInputpost" aria-describedby="postHelp"
                       placeholder="Post name" value="{{ $page->name }}" name='name'>
                
            </div>
            <div class="form-group">
                <label for="exampleInputcontent">Post content</label>
                <textarea type="content" rows="3" class="form-control" id="exampleInputcontent"
                          placeholder="content" name='content'>{{ $page->content }}</textarea>
            </div>
            
            <div class="gallery">
                <a target="_blank" href="forest.jpg">
                    <image class="img-rounded" src="/images/{{ $page->image }}" height="300px" width="500px"></image>
                    <input type='hidden' name='current_image' value="{{ $page->image }}">
                </a>
                <div class="desc">Change Post image</div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="file" name="image">
                </div>
            </div>
             <input type="submit" class="btn btn-primary" value="update">

              </form>
            </div>
    </div>
</div>
@endsection

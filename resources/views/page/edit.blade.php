@extends('page.master')
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
            <div class="form-group">
                <label for="exampleAuther">Auther Name</label>
                <input type="text" class="form-control" id="exampleInputAuther" aria-describedby="AutherHelp"
                       placeholder="Auther Name" value="{{ $page->author }}"  name='author'>
            </div>
            <div class="form-group">
                <label for="exampleSelect2">Email</label>
                <input type="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp"
                       placeholder="Enter email" value='{{ $page->email }}' name='email'>
                       <small id="postHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection

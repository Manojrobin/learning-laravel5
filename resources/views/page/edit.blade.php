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
        <form  action="{{ route('page.update',['page'=>$page->id]) }}" method="POST">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="exampleInputpost">Post Name</label>
                <input type="text" class="form-control" id="exampleInputpost" aria-describedby="postHelp"
                       placeholder="Post name" value="{{ $page->postname }}" name='postname'>
                
            </div>
            <div class="form-group">
                <label for="exampleInputcontent">Post content</label>
                <textarea type="content" rows="3" class="form-control" id="exampleInputcontent"
                          placeholder="content" name='postcontent'>{{ $page->postcontent }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleAuther">Auther Name</label>
                <input type="text" class="form-control" id="exampleInputAuther" aria-describedby="AutherHelp"
                       placeholder="Auther Name" value="{{ $page->postauthor }}"  name='postauthor'>
            </div>
            <div class="form-group">
                <label for="exampleSelect2">Email</label>
                <input type="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp"
                       placeholder="Enter email" value='{{ $page->authoremail }}' name='authoremail'>
                       <small id="postHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection

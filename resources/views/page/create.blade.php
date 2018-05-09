@extends('page.master')
@section('content')
<div class="container  d-flex justify-content-center">
    <div class="container">
        <div class="jumbotron text-center">
            <h2>Create Post</h2>
            <div class="panel-body">Create your post on laravel demo site.</div>
        </div>
    </div>
   
        @if($errors->all())
        @foreach($errors->all() as $err)
         <div class="alert alert-danger">
        <li> {{ $err }} </li>
        </div>
        @endforeach
        @endif
   
    <div class="container">
        <form  action="{{ route('page.store') }}" method="POST">
<<<<<<< HEAD
          {{ csrf_field() }}
=======
            @csrf
>>>>>>> b5d0bc84179ab179571619a1004fe9e0a6d3a845
            <div class="form-group">
                <label for="exampleInputpost">Post Name</label>
                <input type="text" class="form-control" id="exampleInputpost" aria-describedby="postHelp"
                       placeholder="Post name" name='postname'>
                
            </div>
            <div class="form-group">
                <label for="exampleInputcontent">Post content</label>
                <textarea type="content" rows="3" class="form-control" id="exampleInputcontent"
                          placeholder="content" name='postcontent'></textarea>
            </div>
                <div class="form-group">

                    <input type="file" class="filestyle" data-icon="false">

                </div>
            <div class="form-group">
                <label for="exampleAuther">Auther Name</label>
                <input type="text" class="form-control" id="exampleInputAuther" aria-describedby="AutherHelp"
                       placeholder="Auther Name" name='postauthor'>
            </div>
            <div class="form-group">
                <label for="exampleSelect2">Email</label>
                <input type="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp"
                       placeholder="Enter email" name='authoremail'>
                       <small id="postHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

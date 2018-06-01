@extends('layouts.app')
@section('content')
@php $user = Auth::user() @endphp

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
        <form  action="{{ route('page.store') }}" method="POST" enctype='multipart/form-data'>

          {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputpost">Post Name</label>
                <input type="text" class="form-control" id="exampleInputpost" aria-describedby="postHelp"
                       placeholder="Post name" name='name'>
                
            </div>
            <div class="form-group">
                <label for="exampleInputcontent">Post content</label>
                <textarea type="content" rows="3" class="form-control" id="exampleInputcontent"
                          placeholder="content" name='content'></textarea>
            </div>


                <div class="form-group">
                    <input type="file" name="image" class="filestyle">
                </div>

            <input type="hidden" name="user_id" value='{{ $user->id }}'>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

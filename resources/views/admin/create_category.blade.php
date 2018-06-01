@extends('layouts.adminlayout')
@section('content')


    <div class="container">
        <div class="jumbotron text-center">
            <h2>ADD CATEGORY</h2>

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
        @include('alert::bootstrap')
        <form  action="{{ route('storecategory') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('GET') }}
            <div class="form-group">
                <label for="exampleInputpost">Category Name</label>
                <input type="text" class="form-control" id="exampleInputpost" aria-describedby="postHelp"
                       placeholder="Category name" name='category_name'>

            </div>
            <div class="form-group">
                <label for="exampleInputcontent">Category content</label>
                <textarea type="content" rows="3" class="form-control" id="exampleInputcontent"
                          placeholder="content" name='category_content'></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
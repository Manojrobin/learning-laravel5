@extends('page.master')
@section('content')
    <div class="container">
	   	<div class="row borders">
	   		 <div class="col-sm-2 borders">Sr. no.</div>
	  <div class="col-sm-3 borders"><b>Post Name</b></div>
	  <div class="col-sm-3 borders"><b>Author Email</b></div>
	  <div class="col-sm-4 borders"><b>Operation</b></div>
	</div>
	 </div>
	 <div class="container">
   	@foreach($page as $pages)
   	 
<div class="row borders">
  <div class="col-sm-2 borders">{{ ++$loop->index }} </div>
  <div class="col-sm-3 borders">{{ $pages->postname }}</div>
  <div class="col-sm-3 borders">{{ $pages->authoremail }}</div>
  <div class="col-sm-4 borders">
  	<a class='btn btn-xs btn-primary ' href="{{ route('page.edit',['pages' => $pages->id ]) }}">edit</a>
	<form onsubmit="return confirm('are you sure want to delete');" action='{{ route("page.destroy",$pages->id) }}' method='Post'>
		@csrf
		@method('delete')
  	<button type="submit" class='btn btn-xs btn-primary '>Delete</button>
  </form>

</div>
</div>

 @endforeach
 {{ $page->links() }}
</div>

@endsection





@extends('layouts.app')
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
	<a href="{{ route('page.show',$pages->id) }}}"><div class="col-sm-3 borders">{{ $pages->name }}</div></a>
  <div class="col-sm-3 borders">{{ $pages->email }}</div>
  <div class="col-sm-4 borders">
  	<a class='btn btn-xs btn-primary ' href="{{ route('page.edit',['pages' => $pages->id ]) }}">edit</a>

	

	<form onsubmit="return confirm('are you sure want to delete');" action='{{ route("page.destroy",$pages->id) }}' method='POST'>
	{{ csrf_field() }}
	{{ method_field('delete') }}
  	<button type="submit" class='btn btn-xs btn-primary '>Delete</button>
  </form>

		<select name="post_type" class="posttype btn btn-xs btn-primary" data-id="{{ $pages->id }}">
		   <option>Public</option>
		   <option>Private</option> 
		</select>
		
			
		
</div>
</div>

 @endforeach
 {{ $page->links() }}
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
        $(document).ready(function () {
        	
           $(".posttype").change(function () {
                  var posttype = $(this).find(":selected").text();
                  var postid = $(this).data('id');
                  
                  
                  console.log(posttype + postid); 

					$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});

	              $.ajax({
					       url: '/update_post_type/', 
					       type: 'GET',
					       data: { 
					       	posttype: posttype,
					       	post_id: postid,
					       	_method: 'put'
					       } ,
					       success: function(response){ 
                          alert('update');
						    },
						    error: function(jqXHR, textStatus, errorThrown) { 
							alert('not update');
						     }
						})
				})	        
         });	
    </script>





@extends('layouts.app')
@section('content')

    <div class="container">
	   	<div class="row borders">
	   		 <div class="col-sm-2 borders">Sr. no.</div>
	  <div class="col-sm-4 borders"><b>Post Name</b></div>
	  <div class="col-sm-6 borders"><b>Operation</b></div>
	</div>
	 </div>
	 <div class="container">

   	@foreach($page as $pages)
   	 
<div class="row borders">
  <div class="col-sm-2 borders">{{ ++$loop->index }} </div>
	<a href="{{ route('page.show',$pages->id) }}}"><div class="col-sm-4 borders">{{ $pages->name }}</div></a>
  <div class="col-sm-6 borders">
  	<a class='btn btn-xs btn-primary ' href="{{ route('page.edit',['pages' => $pages->id ]) }}">edit</a>

	

	<form onsubmit="return confirm('are you sure want to delete');" action='{{ route("page.destroy",$pages->id) }}' method='POST'>
	{{ csrf_field() }}
	{{ method_field('delete') }}
  	<button type="submit" class='btn btn-xs btn-primary '>Delete</button>
    </form>
	  <div class="form-group">
		  <label for="exampleInputcontent">Post type</label>
		<select name="page_type" class="pagetype btn btn-xs btn-primary form-control" data-id="{{ $pages->id }}">
		   <option>Public</option>
		   <option>Private</option> 
		</select>
	  </div>

	  <div class="form-group">
				  <label for="exampleInputcontent">Select category</label>

		          <select name="category" class="selectpicker form-control category" data-id="{{ $pages->id }}" data-style="btn-success"  data-selected-text-format="count">
					  @foreach($categories as $category)
						  {{$category->name}}
						  <option value="{{ $category->id }}">{{ $category->name }}</option>
					  @endforeach
				  </select>
	  </div>

  </div>
</div>

 @endforeach
 {{ $page->links() }}
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
        $(document).ready(function () {
        	
           $(".pagetype").change(function () {
                  var pagetype = $(this).find(":selected").text();
                  var pagetid = $(this).data('id');
                  
                  
                  console.log(pagetype + pagetid);

					$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});

	              $.ajax({
					       url: '/update_page_type/',
					       type: 'GET',
					       data: { 
					       	pagetype: pagetype,
					       	page_id: pagetid,
					       	_method: 'put'
					       } ,
					       success: function(response){ 
                            alert('Update');
						    },
						    error: function(jqXHR, textStatus, errorThrown) { 
							alert(errorThrown);
						     }
						})
				})



            $(".category").change(function () {
                var categoryid = $(this).find(":selected").val();
                var pagetid = $(this).data('id');


                console.log(categoryid+'--' + pagetid);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '/update_category/',
                    type: 'GET',
                    data: {
                        categoryid: categoryid,
                        pageid: pagetid,
                        _method: 'put'
                    } ,
                    success: function(response){
                        alert('update');
                    },
                    error: function() {
                        alert('not update' );
                    }
                })
            })

        });
    </script>





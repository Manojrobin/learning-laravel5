@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="jumbotron text-center">
        <div class="panel-body">Show All public  post on laravel demo site.</div>
    </div>
</div>

                  <div class="container">
                     <div class="row borders">
                         <div class="col-sm-4 borders">Sr. no.</div>
                            <div class="col-sm-4 borders"><b>Post Name</b></div>
                       </div>
                   </div>

            <div class="container">
                @foreach($page as $pages)
                 <div class="row borders">
                     <div class="col-sm-4 borders">{{ ++$loop->index }}</div>
                        <a href="{{ route('page.show',$pages->id) }}}">
                            <div class="col-sm-4 borders">{{ $pages->name }}</div>
                        </a>
                      </div>
               @endforeach
              {{ $page->links() }}
            </div>
            
@endsection

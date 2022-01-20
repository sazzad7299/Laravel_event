@extends('layouts.front_master')
@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
<div class="container">
    <div class="row " >
        <div class="col-md-12">
            <h5 class="text-center pb-5">Single Categories Event</h5>
            <div class="row mb-5"> 
                @if(count($events)>0)
                    @foreach($events as $event)
                    <div class="col-md-3">
                        <div class="card">
                          <a href="{{route('single_cat_page',['id'=>$event->id])}}"><img src="{{asset('images/event/'.$event->image)}}" class="card-img-top" alt="{{$event->title}}" height="250px" /></a>
                          <div class="card-body">
                            <h5 class="card-title"><a href="">{{$event->title}}</a></h5>
                          </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <p class="alert alert-danger">No Category Found</p>
                @endif
            </div>
            <!-- Pagination -->
            {{$events->links()}}
        </div>
        <!-- Right SIdebar -->
        
    </div>
</div>

@endsection
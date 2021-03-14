@extends('template.main')
@section('content')
    <section class="container text-center my-5">
        <div class="card w-100 bg-dark text-white" >
            <div class="card-body">
              <h5 class="card-title" style="color:rgba(225, 133, 66) ">{{$show->name}}</h5>
              <p class="card-text">{{$show->city}}</p>
              <p class="card-text">{{$show->country}}</p>
              <p class="card-text">{{$show->max}}</p>
              <a href="/teams/{{$show->id}}/edit" class="btn btn-primary">Update</a>
            </div>
          </div>
    </section>
@endsection
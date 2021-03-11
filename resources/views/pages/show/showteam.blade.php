@extends('template.main')
@section('content')
    <section class="container text-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$show->name}}</h5>
              <p class="card-text">{{$show->city}}</p>
              <p class="card-text">{{$show->country}}</p>
              <p class="card-text">{{$show->max}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </section>
@endsection
@extends('template.main')
@section('content')
    <section class="container text-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('$show->url')}}" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">{{$show->name}}</h5>
              <p class="card-text">{{$show->firstname}}</p>
              <p class="card-text">{{$show->age}}</p>
              <p class="card-text">{{$show->phone}}</p>
              <p class="card-text">{{$show->email}}</p>
              <p class="card-text">{{$show->gender}}</p>
              <p class="card-text">{{$show->country}}</p>
              <p class="card-text">{{$show->role}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </section>
@endsection
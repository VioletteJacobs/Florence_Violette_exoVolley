@extends('template.main')
@section('content')
    <section class="container text-center">
        <div class="card" style="width: 18rem; m-5">
          @if ($show->photos->url == null)
          <img class="card-img-top" src="{{asset("img//volley.jpeg")}}" alt="Card image cap">
          @endif
          <img class="card-img-top" src="{{asset("storage/img/".$show->photos->url)}}" alt="Card image cap">

            <div class="card-body">

              <h5 class="card-title"> Name : {{$show->name}} {{$show->firstname}}</h5>
              <p class="card-text"> Age : {{$show->age}}</p>
              <p class="card-text"> Phone : {{$show->phone}}</p>
              <p class="card-text"> E-mail : {{$show->email}}</p>
              <p class="card-text"> Gender : {{$show->gender}}</p>
              <p class="card-text"> Country : {{$show->country}}</p>
              <p class="card-text"> Role: {{$show->role}}</p>
              <p class="card-text"> Team : {{$show->teams->name}}</p>
              <a href="/players/{{$show->id}}/edit" class="btn btn-primary">Update</a>
            </div>
          </div>
    </section>
@endsection
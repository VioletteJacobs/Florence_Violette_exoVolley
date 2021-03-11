@extends('template.main')
@section('content')
<section class="container bg-dark text-white my-5">
    <h1 class="text-center">All the teams</h1>
    {{-- tables des équipes avec un bouton show --}}
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Show</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($DBTeam as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->city}}</td>
              <td>
                  <form action="/teams/{{$item->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a href="" class="btn btn-primary">Show</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>

</section>
<section class="container bg-dark text-white my-5">
    <h1 class="text-center">All the players</h1>
    {{-- tables des équipes avec un bouton show --}}
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Name</th>
            <th scope="col">Firstname</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($DBPlayer as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->firstname}}</td>
              <td>{{$item->role}}</td>
              <td>
                <form action="/players/{{$item->id}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
              <td><a href="" class="btn btn-primary">Show</a></td>
            </tr>
                
            @endforeach
        </tbody>
      </table>

</section>

@endsection
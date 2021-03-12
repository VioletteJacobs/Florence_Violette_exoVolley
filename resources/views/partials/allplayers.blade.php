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
            <th scope="col">Team</th>
            <th scope="col">Gender</th>
            <th scope="col">delete</th>
            <th scope="col">show</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($DBPlayer as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->firstname}}</td>
              <td>{{$item->role}}</td>
              <td>{{$item->teams->name}}</td>              
              <td>{{$item->gender}}</td>
              <td>
                <form action="/players/{{$item->id}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
            <td>
                <form action="/players/{{$item->id}}" method="POST">
                    @csrf
                    @method("GET")
                    <button class="btn btn-success" type="submit">Voir plus</button>
                </form>
            </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>

</section>
<section class="container bg-dark text-white my-5">
    <h1 class="text-center p-5" style="color: rgba(225, 133, 66)">All the teams</h1>
    {{-- tables des équipes avec un bouton show --}}
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">delete</th>
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
              <td>
                <form action="/teams/{{$item->id}}" method="POST">
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
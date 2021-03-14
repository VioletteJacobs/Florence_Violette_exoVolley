<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">Team full</h1>
    @foreach ($fullTeam as $item)
    <p>{{$item->name}}</p>
        
    @endforeach
</section>
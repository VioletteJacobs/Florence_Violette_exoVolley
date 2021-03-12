<section class="container">
    <h1 class="text-center bg-dark text-white">2 team fulls</h1>
    @foreach ($players ->where("team_id", "!=", 1) as $item)

    <p>{{$item->name}}</p>
        
    @endforeach
</section>
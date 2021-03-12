<section class="container">
    <h1 class="text-center bg-dark text-white">équipes non-remplies du jour</h1>
    @foreach ($players ->where("team_id", "=", 1) as $item)
    
    <p>{{$item->teams->name}}</p>
        
    @endforeach
</section>
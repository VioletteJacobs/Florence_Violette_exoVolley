<section class="container">
    <h1 class="text-center bg-dark text-white">équipes non-remplies du jour</h1>
    {{-- @foreach ($teams->where as $item)
        
    @endforeach --}}
    <p>condition non trouvées mais proposer à : </p>
    @foreach ($players ->where("team_id", "=", 1)-> random(2) as $item)
    
    <p>{{$item->name}}</p>
        
    @endforeach
</section>
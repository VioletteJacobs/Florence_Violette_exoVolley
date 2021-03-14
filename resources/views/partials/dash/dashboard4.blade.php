<section class="container">
    <h1 class="text-center bg-dark" style="color: rgba(225, 133, 66)">équipes non-remplies du jour</h1>
    @foreach ($dispoTeam as $item)
    <p><span style="color: rgba(225, 133, 66)">{{$item->name}} </span> de {{$item->city}}</p>
        
    @endforeach
    <span>Proposer un poste à : </span>
    @foreach ($players ->where("team_id", "=", 1)-> random(2) as $item)
    
    <p>{{$item->name}} {{$item->firstname}}</p>
        
    @endforeach
</section>
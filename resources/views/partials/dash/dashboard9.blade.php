<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">5 joueurs avec équipe du jour</h1>
    
    <?php $i=0; ?>

    @foreach ($players->shuffle() as $player) 
        @if ($player->gender === "male" && $player->team_id != 1)
        <p><span style="color: rgba(225, 133, 66)">{{$player->name}} </span>{{$player->firstname}}</p>
            
        @endif
        
    @endforeach
</section>
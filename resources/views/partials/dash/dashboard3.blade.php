<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">4 Joueurs avec équipe du jour</h1>
    @foreach ($playersWith->random(4) as $item)
    <p><span style="color: rgba(225, 133, 66)">{{$item->name}} {{$item->firstname}}</span>  fait partie de l'équipe {{$item->teams->name}}</p>
        
    @endforeach
</section>
<section class="container">
    <h1 class="text-center bg-dark text-white">4 Joueurs avec équipe du jour</h1>
    @foreach ($playersWith->random(4) as $item)
    <p>{{$item->name}} {{$item->firstname}} fait partir de l'équipe {{$item->teams->name}}</p>
        
    @endforeach
</section>
<section class="container">
    <h1 class="text-center bg-dark text-white">4 Joueurs avec équipe du jour</h1>
    @foreach ($playersWith as $item)
    <p>{{$item->name}} {{$item->firstname}}</p>
        
    @endforeach
</section>
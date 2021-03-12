<section class="container">
    <h1 class="text-center bg-dark text-white">Joueurs sans équipe</h1>

    @foreach ($playersWithout as $item)
    <p>{{$item->name}} {{$item->firstname}}</p>
        
    @endforeach
</section>
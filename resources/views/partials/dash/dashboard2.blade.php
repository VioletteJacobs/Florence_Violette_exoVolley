<section class="container">
    <h1 class="text-center bg-dark text-white"> 4 Joueurs sans équipe</h1>
    @foreach ($playersWithout->random(4) as $item)
    <p>{{$item->name}} {{$item->firstname}}</p>
        
    @endforeach
</section>
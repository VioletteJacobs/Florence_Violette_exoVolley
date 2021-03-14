<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)"> 4 Joueurs sans équipe</h1>
    @foreach ($playersWithout->random(4) as $item)
    <p><span style="color: rgba(225, 133, 66)">{{$item->name}} </span> {{$item->firstname}}</p>
        
    @endforeach
</section>
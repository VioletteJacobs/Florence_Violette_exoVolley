<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)"> 4 Joueurs sans équipe</h1>
    <?php $i=0; ?>

    @foreach ($players->shuffle() as $item)
    @if ($item->team_id == 1 && $i<4)
        
    <p><span style="color: rgba(225, 133, 66)">{{$item->name}} </span> {{$item->firstname}}</p>
    <?php $i++; ?>  
    @endif

        
    @endforeach
</section>
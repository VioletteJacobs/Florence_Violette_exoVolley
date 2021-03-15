<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)"> 2 Team full</h1>

    <?php $i=0; ?>
    @foreach ($teams->shuffle() as $item)
    @if ($item->max === count($item->players) && $i<2)

    <p>{{$item->name}}</p>
    <?php $i++; ?>  

    @endif
    @endforeach

</section>
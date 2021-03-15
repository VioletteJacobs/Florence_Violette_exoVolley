<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">Les patriotes</h1>

    <?php $i=0; ?>

    @foreach ($players->shuffle() as $item)
    @if ($item->country === $item->teams->country && $i<4)
        
    <p><span style="color: rgba(225, 133, 66)">{{$item->name}} </span> {{$item->firstname}}</p>
    <?php $i++; ?>  
    @endif

        
    @endforeach

    {{-- @foreach ($patriot as $item)
<p><span style="color: rgba(225, 133, 66)">{{$item->name}} {{$item->firstname}}</span> de {{$item->country}}</p>
    
@endforeach --}}
</section>
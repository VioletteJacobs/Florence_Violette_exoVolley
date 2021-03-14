<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">Les patriotes</h1>
@foreach ($patriot as $item)
<p><span style="color: rgba(225, 133, 66)">{{$item->name}} {{$item->firstname}}</span> de {{$item->country}}</p>
    
@endforeach
</section>
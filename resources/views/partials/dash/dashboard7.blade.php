<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">Les patriotes</h1>
@foreach ($patriot as $item)
<p>{{$item->name}} de {{$item->country}}</p>
    
@endforeach
</section>
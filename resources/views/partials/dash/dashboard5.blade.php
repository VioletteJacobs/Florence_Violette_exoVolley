<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">équipes européennes</h1>
    @foreach ($euTeams as $item)
    <p>{{$item-> name}} de {{$item-> country}}</p>
        
    @endforeach

</section>
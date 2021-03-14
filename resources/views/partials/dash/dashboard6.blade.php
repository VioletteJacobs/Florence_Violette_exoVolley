<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">équipes non-européennes</h1>
    @foreach ($notEuTeams as $item)
    <p>{{$item->name}} venant de {{$item->country}}</p>
        
    @endforeach
</section>
<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">5 joueurs avec équipe du jour</h1>
    @foreach ($playersWith->where("gender", "=", "male") as $item)
    <p>{{$item->name}} {{$item->firstname}}</p>
    @endforeach
</section>
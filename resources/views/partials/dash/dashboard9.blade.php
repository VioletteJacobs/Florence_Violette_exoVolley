<section class="container">
    <h1 class="text-center bg-dark " style="color: rgba(225, 133, 66)">5 joueurs avec équipe du jour</h1>
    @foreach ($playersWith->where("gender", "=", "male") as $item)
    <p><span style="color: rgba(225, 133, 66)">{{$item->name}} </span>{{$item->firstname}}</p>
    @endforeach
</section>
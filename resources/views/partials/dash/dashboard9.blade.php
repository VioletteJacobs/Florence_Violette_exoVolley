<section class="container">
    <h1 class="text-center bg-dark text-white">5 joueurs avec équipe du jour</h1>
    @foreach ($playersWith->where ("gender", "=", "male") as $item)
    @if ($item == null)
    <p>Il n'y en a pas pour le moment... </p>
        
    @endif
    <p>{{$item->name}} {{$item->firstname}}</p>
    @endforeach
</section>
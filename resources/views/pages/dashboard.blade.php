@extends('template.main')
@section('content')
<section class="container text-center">
    <h1 class="text-center" style="color: rgba(225, 133, 66)">Bienvenue dans votre dashboard</h1>
    @include('partials.dash.dashboard1')
    @include('partials.dash.dashboard2')
    {{-- @include('partials.dash.dashboard3')
    @include('partials.dash.dashboard4')
    @include('partials.dash.dashboard5')
    @include('partials.dash.dashboard6')
    @include('partials.dash.dashboard7')
    @include('partials.dash.dashboard8')
    @include('partials.dash.dashboard9')  --}}
</section>
    
@endsection
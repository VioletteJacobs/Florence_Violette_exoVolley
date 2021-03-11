@extends('template.main')
@section('content')
<section class="container">

    <h1>Add a team: </h1>
        {{-- message d'erreur --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- form player et photo --}}
    <form action="/teams" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name : </label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="">City : </label>
            <input type="text" name="city">
        </div>
        <div class="form-group">
            <label for="">Country: </label>
            <input type="text" name="country">
        </div>
        <div class="form-group">
            <label for="">Nombre de joueur maximum : </label>
            <input type="text" name="max">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>

</section>
    
@endsection
@extends('template.main')
@section('content')
<section class="container bg-dark text-white my-5  p-5 text-center">

    <h1 style= "color: rgba(225, 133, 66) ">Add a team: </h1>
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
    <form action="/teams" method="POST" >
        @csrf
        <div class="form-group">
            <label for="" >Name : </label>
            <input type="text" name="name" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">City : </label>
            <input type="text" name="city" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Country: </label>
            <input type="text" name="country" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Nombre de joueur maximum : </label>
            <input type="text" name="max" class="btncreate">
        </div>
        <button class="btn btn-success btnform" type="submit">Submit</button>
    </form>

</section>
    
@endsection
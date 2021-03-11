@extends('template.main')
@section('content')
<section class="container bg-dark text-white m-5 p-5">

    <h1 class="text-center">Add a player: </h1>
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
    <form action="/players" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name : </label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="">Firstame : </label>
            <input type="text" name="firstname">
        </div>
        <div class="form-group">
            <label for="">Age : </label>
            <input type="number" name="age">
        </div>
        <div class="form-group">
            <label for="">Phone : </label>
            <input type="text" name="phone">
        </div>
        <div class="form-group">
            <label for="">Email : </label>
            <input type="text" name="email">
        </div>
        <div class="form-group">
            <label for="">Gender : </label>
            <input type="text" name="gender">
        </div>
        <div class="form-group">
            <label for="">Country : </label>
            <input type="text" name="country">
        </div>
        <div class="form-group">
            <label for="">Role : </label>
            <input type="text" name="role">
        </div>
        <div class="form-group">
            <label for="url">Photo: </label>
            <input type="file" name="url">
        </div>

        {{-- <div class="form-group">
            <select name="team_id" id="">
                @foreach ($DBTeam as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div> --}}

        <button class="btn btn-success" type="submit">Submit</button>
    </form>

</section>
    
@endsection
@extends('template.main')
@section('content')
<section class="container bg-dark text-white my-5  p-5 text-center align-items-center">

    <h1 class="text-center" style= "color: rgba(225, 133, 66) ">Add a player: </h1>
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
            <input type="text" name="name" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Firstame : </label>
            <input type="text" name="firstname" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Age : </label>
            <input type="number" name="age" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Phone : </label>
            <input type="text" name="phone" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Email : </label>
            <input type="email" name="email" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Gender : </label>
            <select name="gender" id="" class="btncreate">
                <option value="male">Male</option>
                <option value="femal">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Country : </label>
            <input type="text" name="country" class="btncreate">
        </div>
        <div class="form-group">
            <label for="">Role : </label>
            <select name="role" id="" class="btncreate">
                <option value="back">Back</option>
                <option value="center">Center</option>
                <option value="front">Front</option>
                <option value="replace">Replace</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Photo: </label>
            <input type="file" name="url" class="btncreate">
        </div>

        <div class="form-group">
            <label for="">Team: </label>
            <select name="team_id" id="" class="btncreate">
                @foreach ($DBTeam as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success btnform" type="submit">Submit</button>
    </form>

</section>
    
@endsection
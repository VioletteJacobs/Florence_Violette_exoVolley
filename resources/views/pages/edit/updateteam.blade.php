@extends('template.main')
@section('content')
<section class="container">
    <h1>Modify a team</h1>

    <form action="/teams/{{$edit->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Name : </label>
            <input type="text" name="name" value="{{$edit->name}}">
        </div>
        <div class="form-group">
            <label for="">City : </label>
            <input type="text" name="city" value="{{$edit->city}}">
        </div>
        <div class="form-group">
            <label for="">Country: </label>
            <input type="text" name="country" value="{{$edit->country}}">
        </div>
        <div class="form-group">
            <label for="">Nombre de joueur maximum : </label>
            <input type="text" name="max" value="{{$edit->max}}">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</section>
    
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Crear un nuevo Video</h2>
        <hr>
        <form action="" method="post" ectype="multipart/form-data" class="col-lg-7">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Miniatura</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="video">Archivo de Video</label>
                <input type="file" class="form-control" name="video" id="video">
            </div>   
            <button type="submit" class="btn btn-success">Crear Video</button>     
        </form>
    </div>
</div>
@endsection
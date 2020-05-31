@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>Descarga de formatos</h3>        
            <br><br>  
            <form method="POST" action="{{ route('classrooms.exports.students', ['classroom_id' => $classroom_id]) }}">
                @csrf                                
                <div class="form-group">
                    <label for="file-formats">Selecciona un formato deseado</label>
                    <select class="form-control" id="file-formats">
                    <option>Firmas de padres</option>
                    <option>Asistencia por mes</option>
                    <option>Calificaciones</option>
                    </select>
                </div>
                <br><br>  
                <button type="submit" class="btn btn-success">Generar formato</button> 
                <a class="btn btn-secondary" href="{{ route('classrooms.students', ['classroom_id' => $classroom_id]) }}" role="button">Regresar a listado</a>               
            </form>
        </div>       
    </div>
</div>
@endsection

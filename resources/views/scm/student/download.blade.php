@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>Subir una lista de alumnos</h3>        
            <br><br>  
            <form method="POST" action="{{ route('classrooms.exports.students', ['classroom_id' => $classroom_id]) }}">
                @csrf                
                <select>  
                    <option>Selecciona un formato deseado </option>
                    <option>Formato fecha </option>
                </select>

                <br><br>  
                <button type="submit" class="btn btn-primary">Generar formato</button>                
            </form>
        </div>       
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>Subir una lista de alumnos</h3>        
            <br><br>  
            <form method="POST" action="{{ route('classrooms.imports.students', ['classroom_id' => $classroom_id]) }}">
                @csrf                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="students_file" name="students_file">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br><br>  
                <button type="submit" class="btn btn-success">Registrar alumnos</button>
                <a class="btn btn-secondary" href="{{ route('classrooms.students', ['classroom_id' => $classroom_id]) }}" role="button">Regresar a listado</a>          
            </form>
        </div>       
    </div>
</div>
@endsection

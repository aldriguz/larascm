@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>Subir una lista de alumnos</h3>            
            <a class="btn btn-primary" href="{{ route('classrooms.students.create', ['classroom_id' => $classroom_id]) }}" role="button">Registrar nuevo alumno</a>
            <button type="button" class="btn btn-outline-primary hidden">Subir lista de alumnos</button>
            
            <br><br>  
            <form>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            </form>
        </div>       
    </div>
</div>
@endsection

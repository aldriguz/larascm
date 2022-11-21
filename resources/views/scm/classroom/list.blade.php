@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @isset($import_successful)
            <div role="alert">
                {{ $import_successful }}
            </div><br><br>
            @endisset

            <h3>Lista de alumnos</h3>            
            <a class="btn btn-success" href="{{ route('classrooms.students.create', ['classroom_id' => $classroom_id]) }}" role="button">Registrar nuevo alumno</a>
            <a class="btn btn-secondary" href="{{ route('classrooms.students.upload', ['classroom_id' => $classroom_id]) }}" role="button">Registrar mas de 1 alumno</a>            
            <a class="btn btn-secondary" href="{{ route('classrooms.students.download', ['classroom_id' => $classroom_id]) }}" role="button">Generar formatos</a>            
            
            <br><br>  
             <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombres</th>
                  <th scope="col">Apellidos</th>                  
                </tr>
              </thead>
              <tbody>                
                @foreach ($students as $key=>$student)                                        
                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->father_lastname }} {{ $student->mother_lastname }}</td>
                  </tr>
                @endforeach           
              </tbody>
            </table>   
        </div>       
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>Lista de estudiantes</h3>
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-success">Success</button>

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

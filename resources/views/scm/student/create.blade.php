@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('classrooms.students.store', ['classroom_id' => $classroom_id]) }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombres</label>
            <input type="text" class="form-control" id="name" name="name">        
        </div>

        <div class="form-group">
            <label for="father-lastname">Apellido Paterno</label>
            <input type="text" class="form-control" id="father-lastname" name="father-lastname">        
        </div>

        <div class="form-group">
            <label for="mother-lastname">Apellido Materno</label>
            <input type="text" class="form-control" id="mother-lastname" name="mother-lastname">        
        </div>

        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" value="{{ old('email') }}">                    

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
        </div>
                
        <button type="submit" class="btn btn-primary">Registrar alumno</button>            
        <a class="btn btn-secondary" href="{{ route('classrooms.students', ['classroom_id' => $classroom_id]) }}" role="button">Regresar a listado</a>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Selecciona el aula que tienes a cargo antes de continuar</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('classrooms') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Aulas a tu cargo</label>

                            <div class="col-md-6">                                                            
                                <select class="custom-select" id="classroom-id" name="classroom-id" required>
                                    <option selected>Click aqui para seleccionar</option>
                                    @foreach ($classrooms as $classroom)                                        
                                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                    @endforeach
                                </select>
                               

                            </div>
                        </div>                      

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ir a listado
                                </button>

                                <a class="btn btn-link" href="">
                                    Necesitas ayuda?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

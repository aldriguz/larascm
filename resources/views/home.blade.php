@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action active">
                Mi lista de alumnos
              </button>
              <button type="button" class="list-group-item list-group-item-action">Subir nueva lista</button>
              <button type="button" class="list-group-item list-group-item-action">Crear documento</button>
              <button type="button" class="list-group-item list-group-item-action" disabled>Configuracion</button>
            </div>

        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

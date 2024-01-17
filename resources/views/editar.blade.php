@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Editar Usuario') }}</div>

        <div class="card-body">
          <form action="{{ route('salvar',['id' => $usuario->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Correo:</label>
              <input type="text" name="email" class="form-control" value="{{ $usuario->email }}">
            </div>

            <div class="mb-3">
              <label for="mensaje" class="form-label">Mensaje:</label>
              <textarea name="mensaje" class="form-control">{{ $usuario->mensaje }}</textarea>
            </div>

            <button type="submit" class="btn btn-success btn-sm">Editar</button>
            <a href="javascript:history.back()" class="btn btn-danger btn-sm">Regresar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Información general') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Mensaje</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @forelse($datos as $dato)
                <tr>
                  <td>{{$dato->id}}</td>
                  <td>{{$dato->nombre}}</td>
                  <td>{{$dato->email}}</td>
                  <td>{{$dato->mensaje}}</td>
                  <td>
                    <div class="btn-group" role="group">
                    <a href="{{ route('editar', ['id' => $dato->id]) }}" class="btn btn-success btn-sm">Editar</a>
                      <form name="borrar" action="{{ route('borrar', ['id' => $dato->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                      </form>
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="5">
                    <h1>Sin valores</h1>
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
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

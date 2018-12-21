@extends('layouts.admin')

@section('title', 'Categorias')
@section('page_title', 'Categorias')
@section('page_subtitle', 'Listado')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('categorias') }}">categorías</a></li>
    <li class="active">Listado</li>
@endsection

@section('content')

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="btn-group">
            <a href="{{ url('categorias/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Categorías disponibles</h3>
              <div class="box-tools">
                <form>
                  <input type="hidden" id="_url" value="{{ url('') }}">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">
                  <div class="input-group input-group-sm" id="search-content">
                    <input type="text" name="q"  value="{{ request()->q }}" class="form-control pull-right"  id="search-input" placeholder="Buscar" autocomplete="off">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                 </form>
              </div>
            </div>
            <div class="box-body table-responsive table-striped">
              <table class="table table-responsive table-hover">
                <tr>
                    <th>Categoría</th>
                    <th>Creado</th>
                    <th>Actualizado</th>
                    <th></th>
                </tr>
                @foreach ($categorias as $categoria)
                <tr class="row{{ $categoria->id }}">
                  <td>{{ $categoria->categoria }}</td>
                  <td>{{ $categoria->created_at }}</td>
                  <td>{{ $categoria->updated_at }}</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-gears"></i> <span class="caret"></span>
                      </button>
                      <ul class=" dropdown-menu dropdown-menu-right">
                        <li><a href="{{ url('categorias', [$categoria->encode_id, 'edit']) }}"><i class="fa fa-edit"></i> Editar</a></a></li>
                        <li class="divider"><li>
                        <li><a href="#confirm-modal" id="{{ $categoria->encode_id }}"  class="del-btn" data-toggle="modal"><i class="fa fa-trash"></i> Eliminar</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="box-footer clearfix">
              {{ $categorias->links() }}
              <p class="text-muted">Mostrando <strong>{{ $categorias->count() }}</strong> registros de <strong>{{$categorias->total() }}</strong> totales</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection

@push('scripts')
  <script src="{{ asset('js/admin/categorias/index.js') }}"></script>
@endpush

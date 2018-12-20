@extends('layouts.admin')

@section('title', 'Categorias')
@section('page_title', 'Categorias')
@section('page_subtitle', 'Editar')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('categorias') }}">categorías</a></li>
    <li class="active">Editar</li>
@endsection

@section('content')

  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          <a href="{{ url('categorias') }}" class="btn btn-primary"><i class="fa fa-sort-alpha-desc"></i> Listado</a>
          <a href="{{ url('categorias/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" id="main-form">
            <input type="hidden" id="_url" value="{{ url('categorias', [$categorias->id]) }}">
            <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <div class="box-body">
              <div class="form-group pading">
                <label for="name">Nombre de Categoría</label>
                <input class="form-control" id="categoria" name="categoria" value="{{ $categorias->categoria }}" placeholder="Nombres">
                <span class="missing_alert text-danger" id="categoria_alert"></span>
              </div>
              <div class="box-footer">
              <button type="submit" class="btn btn-primary ajax" id="submit">
                <i id="ajax-icon" class="fa fa-edit"></i> Editar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('scripts')
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <script src="{{ asset('js/admin/categorias/edit.js') }}"></script>
@endpush

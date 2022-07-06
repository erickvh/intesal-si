@extends('layouts.admin')

@section('title_page')
Usuarios
@endsection

@section('title_content')
<i class="fa fa-users fa-fw" aria-hidden="true"></i> Usuarios
@endsection

@section('breadcrumb')
<li class="active breadcrumb-item"><a href="{{url()->current()}}">Usuarios</a></li>
@endsection


@section('content')
<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <usuarios-component :permissions='{{ $permissions }}'></usuarios-component>
        </div>
    </div>
</div>
<!-- /.content -->


@endsection
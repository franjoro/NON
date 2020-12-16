@extends('layouts.plantillaMenu')

@section('title', 'Usuarios')

@section('content')

    <!-- Botón -->
    <a type="button" class="btn btn-primary float-right" href="newuser.html">Agregar nuevo usuario</a>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">NON</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listado de empleados autorizados</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Codigo empleado</th>
                <th>Departamento</th>
                <th>Creado por:</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Codigo Empleado</th>
                <th>Departamento</th>
                <th>creado por:</th>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <td>José</td>
                <td>Valladares</td>
                <td>931</td>
                <td>Tienda</td>
                <td>Victor Miguel</td>
            </tr>
            <tr>
                <td>Daniel</td>
                <td>Chacon</td>
                <td>101</td>
                <td>Bodega</td>
                <td>Victor Miguel</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>

@endsection 
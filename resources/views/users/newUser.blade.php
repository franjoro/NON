@extends('layouts.plantillaMenu')

@section('title', 'Agregar Usuario')

@section('content')

    <!-- Botón -->
    <a type="button" class="btn btn-primary float-right" href="userlist.html">Regresar</a>
            
    <!-- Page Heading -->
    <!--form para nuevo usuario-->

    <h1 class="h3 mb-4 text-gray-800">Agregar Nuevo Usuario</h1>

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Formulario de inventario</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

        <form>

            <!-- Nombre -->
            <div class="form-group">
            <label for="name" class="control-label">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Nombres"> 
            </div>

            <!-- Apellidos -->
            <div class="form-group"> 
                <label for="lastName" class="control-label">Apellido</label>
                <input type="text" class="form-control" name="lastName" placeholder="Apellidos">
            </div>
            
            <!-- Código empleado -->
            <div class="form-group">
            <label for="employeeCode" class="control-label">Codigo Empleado</label>
            <input type="number" class="form-control" name="employeeCode" placeholder="Código empleado">
            </div> 

            <!-- Departamento que pertenece -->
            <div class="form-group"> 
            <label for="color" class="control-label">Departamento</label>
            <select class="form-control">
                <option value="contabilidad">Contabilidad</option>
                <option value="tienda">Tienda</option>
                <option value="gerencia">Gerencia</option>
                <option value="bodega">Bodega</option>
            </select>  
            </div>

            <!-- Autorizacion -->
            <div class="form-group"> 
            <label for="autorizado" class="control-label">Creado por:</label>
            <input type="text" class="form-control" name="Creado" placeholder="creado por">
            </div>                    
        
            <!-- Button Agregar-->
            <div class="form-group"> 
                <a type="submit" class="btn btn-primary" href="">Agregar</a>
            </div>     
            
        </form>
        
        </div>
    </div>
    </div>

@endsection
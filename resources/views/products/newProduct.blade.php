@extends('layouts.plantillaMenu')

@section('title', 'Agregar Articulo')

@section('content')

    <!-- Botón -->
    <a type="button" class="btn btn-primary float-right" href="tables.html">Regresar</a>
            
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Agregar articulo al inventario</h1>

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Formulario de inventario</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

        <form>

            <!-- Prenda -->
            <div class="form-group">
            <label for="prenda" class="control-label">Prenda</label>
            <select class="form-control">
                <option value="camisa">Camisa</option>
                <option value="camisaformal">Camisa formal</option>
                <option value="pantalon">Pantalon</option>
                <option value="vestido">Vestido</option>
                <option value="falda">Falda</option>
                <option value="jeans">Jeans</option>
                <option value="sueter">Sueter</option>
            </select>                    
            </div>

            <!-- Marca -->
            <div class="form-group"> 
                <label for="marca" class="control-label">Marca</label>
                <input type="text" class="form-control" name="marca" placeholder="Zara, Dior, Carolina Herrera, etc.">
            </div>
            
            <!-- Talla -->
            <div class="form-group">
            <label for="talla" class="control-label">Talla</label>
            <select class="form-control">
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>                    
            </div> 

            <!-- Color -->
            <div class="form-group"> 
            <label for="color" class="control-label">Color</label>
            <input type="text" class="form-control" name="color" placeholder="Rojo, Azul, Verde, etc.">
            </div>

            <!-- Codigo -->
            <div class="form-group"> 
            <label for="codigo" class="control-label">Codigo</label>
            <input type="number" class="form-control" name="codigo" placeholder="00000">
            </div>

            <!-- Cantidad -->
            <div class="form-group"> 
            <label for="cantidad" class="control-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" placeholder="00">
            </div>                    
            
            <!-- Button Agregar-->
            <div class="form-group"> 
                <a type="submit" class="btn btn-primary" href="tables.html">Agregar</a>
            </div>     
            
        </form>
        
        </div>
    </div>
    </div>

@endsection
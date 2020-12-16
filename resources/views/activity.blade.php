@extends('layouts.plantillaMenu')

@section('title', 'Movimientos')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Movimientos NON</h1>
          
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Movimientos en el inventario</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Usuario</th>
                <th>Prenda</th>
                <th>Marca</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Usuario</th>
                <th>Prenda</th>
                <th>Marca</th>
                <th>Fecha</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Jose</td>
                <td>Camisa</td>
                <td>Quicksilver</td>
                <td>23/09/2020</td>
              </tr>
              <tr>
                <td>Rene</td>
                <td>Pantalon</td>
                <td>Dockers</td>
                <td>17/08/2020</td>
              </tr>
              <tr>
                <td>Andrea</td>
                <td>Sueter</td>
                <td>North Face</td>
                <td>09/06/2020</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection
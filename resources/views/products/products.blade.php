@extends('layouts.plantillaMenu')

@section('title', 'Inventario')

@section('content')

    <!-- Botón -->
    <a type="button" class="btn btn-primary float-right" href="agregar.html">Agregar articulo al inventario</a>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Inventario NON</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Inventario general</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Prenda</th>
                <th>Marca</th>
                <th>talla</th>
                <th>Color</th>
                <th>Codigo</th>
                <th>Cantidad</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Prenda</th>
                <th>Marca</th>
                <th>talla</th>
                <th>Color</th>
                <th>Codigo</th>
                <th>Cantidad</th>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <td>Camisa</td>
                <td>Quicksilver</td>
                <td>M</td>
                <td>Rojo</td>
                <td>00001</td>
                <td>35</td>
            </tr>
            <tr>
                <td>Camisa</td>
                <td>Quicksilver</td>
                <td>L</td>
                <td>Rojo</td>
                <td>00002</td>
                <td>48</td>
            </tr>
            <tr>
                <td>Camisa</td>
                <td>Quicksilver</td>
                <td>XL</td>
                <td>Rojo</td>
                <td>00004</td>
                <td>9</td>
            </tr>
            <tr>
                <td>Camisa</td>
                <td>Quicksilver</td>
                <td>S</td>
                <td>Rojo</td>
                <td>00003</td>
                <td>13</td>
            </tr>
            <tr>
                <td>Pantalon</td>
                <td>Dockers</td>
                <td>S</td>
                <td>Cafe</td>
                <td>00005</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Pantalon</td>
                <td>Dockers</td>
                <td>M</td>
                <td>Cafe</td>
                <td>00006</td>
                <td>17</td>
            </tr>
            <tr>
                <td>Pantalon</td>
                <td>Dockers</td>
                <td>L</td>
                <td>Cafe</td>
                <td>00007</td>
                <td>64</td>
            </tr>
            <tr>
                <td>Pantalon</td>
                <td>Dockers</td>
                <td>XL</td>
                <td>Cafe</td>
                <td>00008</td>
                <td>18</td>
            </tr>
            <tr>
                <td>Camisa</td>
                <td>Carolina Herrera</td>
                <td>S</td>
                <td>Celeste</td>
                <td>00009</td>
                <td>17</td>
            </tr>
            <tr>
                <td>Camisa</td>
                <td>Carolina Herrera</td>
                <td>M</td>
                <td>Celeste</td>
                <td>00010</td>
                <td>8</td>
            </tr>
            <tr>
                <td>Camisa</td>
                <td>Carolina Herrera</td>
                <td>L</td>
                <td>Celeste</td>
                <td>00011</td>
                <td>21</td>
            </tr>
            <tr>
                <td>Jeans</td>
                <td>Levi's</td>
                <td>S</td>
                <td>Azul</td>
                <td>00012</td>
                <td>13</td>
            </tr>
            <tr>
                <td>Jeans</td>
                <td>Levi's</td>
                <td>M</td>
                <td>Azul</td>
                <td>00013</td>
                <td>17</td>
            </tr>
            <tr>
                <td>Jeans</td>
                <td>Levi's</td>
                <td>L</td>
                <td>Azul</td>
                <td>00014</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Vestido</td>
                <td>Dior</td>
                <td>S</td>
                <td>Morado</td>
                <td>00015</td>
                <td>8</td>
            </tr>
            <tr>
                <td>Vestido</td>
                <td>Dior</td>
                <td>M</td>
                <td>Morado</td>
                <td>00016</td>
                <td>16</td>
            </tr>
            <tr>
                <td>Vestido</td>
                <td>Dior</td>
                <td>L</td>
                <td>Morado</td>
                <td>00017</td>
                <td>7</td>
            </tr>
            <tr>
                <td>Sueter</td>
                <td>North Face</td>
                <td>S</td>
                <td>Negro</td>
                <td>00018</td>
                <td>26</td>
            </tr>
            <tr>
                <td>Sueter</td>
                <td>North Face</td>
                <td>M</td>
                <td>Negro</td>
                <td>00019</td>
                <td>15</td>
            </tr>
            <tr>
                <td>Sueter</td>
                <td>North Face</td>
                <td>L</td>
                <td>Negro</td>
                <td>00020</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Falda</td>
                <td>H&M</td>
                <td>S</td>
                <td>Verde</td>
                <td>00021</td>
                <td>14</td>
            </tr>
            <tr>
                <td>Falda</td>
                <td>H&M</td>
                <td>M</td>
                <td>Verde</td>
                <td>00022</td>
                <td>6</td>
            </tr>
            <tr>
                <td>Falda</td>
                <td>H&M</td>
                <td>L</td>
                <td>Verde</td>
                <td>00023</td>
                <td>11</td>
            </tr>
            <tr>
                <td>Camisa Formal</td>
                <td>Ralph Lauren</td>
                <td>S</td>
                <td>Blanco</td>
                <td>00024</td>
                <td>13</td>
            </tr>
            <tr>
                <td>Camisa Formal</td>
                <td>Ralph Lauren</td>
                <td>M</td>
                <td>Blanco</td>
                <td>00025</td>
                <td>27</td>
            </tr>
            <tr>
                <td>Camisa Formal</td>
                <td>Ralph Lauren</td>
                <td>L</td>
                <td>Blanco</td>
                <td>00026</td>
                <td>15</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>

@endsection
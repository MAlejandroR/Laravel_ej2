<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<header class="flex flex-row content-center items-center bg-green-200 border-2 border-blue-900 h-15v ">
    <h1 class="text-3xl text-blue-800">DATOS DE EMPRESA</h1>
</header>
<div class="h-65v">
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
        </tr>
        </thead>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->telefono}}</td>
            </tr>
        @endforeach
    </table>

</div>


</body>
</html>

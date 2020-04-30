<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Ventas</title></head>
<body>
    




<div class='container'>

<div style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:bold;font-style:italic;color:#3E3E69;border: 5px double #564673;
letter-spacing:6pt;word-spacing:-1pt;font-size:45px;text-align:center;font-family:palatino linotype, palatino, serif;line-height:2;">SkyNostrum</div>

<div style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;text-decoration:underline;color:#681182;
letter-spacing:6pt;word-spacing:5pt;font-size:42px;text-align:center;font-family:verdana, sans-serif;line-height:2;">Registro de Ventas</div>

<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Producto</th>
                
                <th>Observaciones</th>
                <th>Cantidad</th>
                
            </tr>                            
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->clientes->nombre }}</td>
                <td>{{ $venta->productos->nombre }}</td>
                <td >{{ $venta->observaciones }}</td>
                <td style="text-align:right">{{ $venta->cantidad }}</td>
                
                
               
                
            </tr>
            @endforeach
        </tbody>
    </table>





</div>



</body>
</html>







   



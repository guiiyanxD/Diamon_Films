<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h5>    Cliente: {{$fact->distribucion_id}}</h5>
    <h5>    Descripcion: {{$fact->descripcion}}</h5>
    <h5>    Concepto: {{$fact->concepto}}</h5>
    <h5>    I.V.A.: {{$fact->iva_factura}}</h5>
    <h5>    Importe a la transaccion: {{$fact->it}}</h5>
    <h5>    Monto Total: {{$fact->monto}}</h5>
    <footer style="text-align: center">
        <p>Esta factura no tiene ningún valor legal</p>
    </footer>

</body>
</html>

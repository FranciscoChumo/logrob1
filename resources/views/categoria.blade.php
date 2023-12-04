<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('categoria')}}" method="post">
        @csrf
        <h2>::Registro de Categoria::</h2>
        <label>Categoria: </label>
        <input type="text" id="nombre" name="categoria"><br><br>
        <button type="submit">Registrar</button>
    </form>

</body>
</html>
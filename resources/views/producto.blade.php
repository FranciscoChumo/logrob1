<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('producto')}}" method="post">
        @csrf 
        <h2>::Productos</h2>
        <label for="">Nombre: </label><br><br>
        <input type="text" name="nombre"><br><br>

        <label for="">Fecha de vencimiento: </label><br><br>
        <input type="date" name="fecha"><br><br>

        <label for="">Precio: </label><br><br>
        <input type="text" name="precio"><br><br>

        <label for="">Stock: </label><br><br>
        <input type="number" name="cantidad"><br><br>

        <select name="id_categoria" id="">
            @foreach($categoria as $item)
                <option value={{$item->id}}>{{$item->categoria}}</option>
            @endforeach
        </select>

        <button type="submit">Agregar</button>
    </form>
    <br>
    <button><a href="{{url('datos')}}">Ver productos</a></button>
</body>
</html>
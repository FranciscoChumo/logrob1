<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <table border="1px red">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre del producto</th>
                    <th>Fecha de vencimiento</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->fecha}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->cantidad}}</td>
                    <td>
                        <form action="{{url('datos', $item->id)}}" method="post">
                            @csrf
                            @method('delete')
                           <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        
        <form action="{{url('filtrar')}}" method="GET">
            @csrf
            <select name="datoFiltrado" id="">
                @foreach($categoria as $item)
                   <option value="{{$item->id}}">{{$item->categoria}}</option>
                @endforeach
            </select> 
            <button type="submit">Filtrar</button>      
        </form>
 
  
</body>
</html>

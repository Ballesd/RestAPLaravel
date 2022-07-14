<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <h3>Cliente <span>{{$cliente->nombre}}</span> cursa las materias: </h3>

    <table>
        <thead>
            <th>Productos</th>
        </thead>
        <tbody>
            @foreach($cliente->productos as $resgiter)
            <tr>
                <td>{{ $resgiter->nombre }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <div>
      <h3>Alumno: <span>{{ $alumno->nombre }}</span> cursa las materias: </h3>

      <table>
          <thead>
              <th>MATERIAS</th>
          </thead>
          <tbody>
              @foreach($alumno->materias as $register)
              <tr>
                  <td>{{ $register->nombre }}</td>
              </tr>

              @endforeach
          </tbody>
      </table>
    </div>
    <div>
      <h3>Materia: <span>{{ $materia->nombre }}</span> cursa las alumnos: </h3>

      <table>
          <thead>
              <th>Alumnos</th>
          </thead>
          <tbody>
              @foreach($materia->alumnos as $register)
              <tr>
                  <td>{{ $register->nombre }}</td>
              </tr>

              @endforeach
          </tbody>
      </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="jeicss.css" type="text/css" media="screen">
</head>
<body>
    <header>

    </header>
    <main>
 </tbody>
</table>

    <?php
        $cliente=array(
            "cliente"=>array("cedula"=>1223,"nombre"=>"jeider","apellido"=>"bastos","edad"=>"33"),
            "cliente2"=>array("cedula"=>3456,"nombre"=>"camilo","apellido"=>"rodriguz","edad"=>"35"),
            "cliente3"=>array("cedula"=>1452,"nombre"=>"andres","apellido"=>"cazas","edad"=>"26"),
            "cliente4"=>array("cedula"=>16434,"nombre"=>"erika","apellido"=>"herrera","edad"=>"20")
        );
    ?>
    <!--cedula, nombre, apellido y edad  -->
    <table class="table">
      <thead class="thead-dark">
    <tr>
      <th scope="col">cedula</th>
      <th scope="col">nomebre</th>
      <th scope="col">apellido</th>
      <th scope="col">edad</th>
    </tr>
      </thead>
      <tbody>
      <?php foreach($cliente as $datos):?>
    <tr>
      <th scope="row"><?php echo($datos["cedula"]);?></th>
      <td><?php echo($datos["nombre"]);?></td>
      <td><?php echo($datos["apellido"]);?></td>
      <td><?php echo($datos["edad"]);?></td>
    </tr>
    <?php endforeach?>
  </tbody>
    </table>
    </main>
<!--cedula, nombre, apellido y edad  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
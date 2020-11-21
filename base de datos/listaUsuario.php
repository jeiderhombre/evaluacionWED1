<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista Usuario</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <?php  
    //primero incluimos un enlase de archivo
    include("BaseDatos.php");

    //crear la consulta 
    $consultarDatosSql="SELECT * FROM usuarios WHERE 1";

    //BUSCAR DATOS
    $transa=new BaseDatos();
    $usuarios=$transa->buscarDatos($consultarDatosSql);
    print_r($usuarios);
?>
    <div class="container-fluid">
        <div class="row">
            <?php foreach($usuarios as $usuarios):?>
                <div class="card col-mb-4" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo($usuarios["foto"])?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($usuarios["nombre"])?></h5>
                        <p class="card-text"><?php echo($usuarios["descripcion"])?></p>
                        <a href="eliminarUsuarios.php?id=<?php echo($usuarios["ID_usuario"]);?>" class="btn btn-primary">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["ID_usuario"]) ?>">
                        Editar
                        </button>
                    </div>
                
                    <div class="modal fade" id="editar<?php echo($usuarios["ID_usuario"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editando usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarUsuario.php?id=<?php echo($usuarios["ID_usuario"]) ?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($usuario["nombre"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripción:</label>
                                            <textarea class="form-control" name="descripcionEditar"> <?php echo($usuario["descripcion"])?>  </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>
<?php include("../../templates/header.php"); ?>

<br>
<h3>Usuarios</h3>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">
            Agregar usuario
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">57924</td>
                        <td>Programador junior</td>
                        <td>********</td>
                        <td>correo@correo.com</td>
                        <td>
                            <a name="btneditar" id="btneditar" class="btn btn-info" href="#" role="button">Editar</a>
                            <a name="btneliminar" id="btneliminar" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php include("../../templates/footer.php"); ?>
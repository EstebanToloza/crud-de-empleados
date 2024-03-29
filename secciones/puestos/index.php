<?php include("../../templates/header.php"); ?>

<br>
<h3>Empleados</h3>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">
            Agregar registro
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">57924</td>
                        <td>Programador junior</td>
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
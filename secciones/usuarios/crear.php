<?php include("../../templates/header.php"); ?>

<br>

<div class="card">
    <div class="card-header">Usuarios</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del usuario" />
            </div>
            <div class="mb-3">
                <label for="contrasenia" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="*****" />
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Email</label>
                <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
            </div>


            <button type="submit" class="btn btn-success">
                Agregar
            </button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../templates/footer.php"); ?>
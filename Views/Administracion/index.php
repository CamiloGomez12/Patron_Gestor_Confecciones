<?php include "Views/Templates/header.php"; ?>

<div class="card">
    <div class="card-header bg-dark text-white">
        Datos de la empresa

    </div>
    <div class="card-body">
        <form id="frmEmpresa">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <input id="id" class="form-control" type="hidden" name="id" value="<?php echo $data['id'] ?>"  >
                <label for="nombre">Nombre</label>
                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre"  value="<?php echo $data['nombre'] ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="ruc">Ruc</label>
                <input id="ruc" class="form-control" type="text" name="ruc" placeholder="Ruc" value="<?php echo $data['ruc'] ?>">
            </div>
        </div>

            <div class="col-md-6">
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Teléfono" value="<?php echo $data['telefono'] ?>">
            </div>
        </div>

            <div class="col-md-6">
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Dirección" value="<?php echo $data['direccion'] ?>">
            </div>
        </div>

            <div class="col-md-6">
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" class="form-control" name="mensaje" rows="3" placeholder="Mensaje"><?php echo $data['mensaje'] ?></textarea>
            </div> 
        </div>
</div>

            

           

            

            <br>
            <button class="btn btn-primary" type="button" onclick="modificarEmpresa()">Modificar</button>
<br>
        </form>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>
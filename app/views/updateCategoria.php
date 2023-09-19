<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar contacto</h1>
            <div>
                <input type="text" id="id" value="<?php echo $contacto['id'] ?>">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" value="<?php echo $contacto['nombre'] ?>" aria-describedby="nombreHelp"> <!--aria-describedby para personas que tienen problemas de vista-->
                    <div id="nombreHelp" class="form-text">Ingresa el nombre a actualizar</div>
                </div>
                <button id="actualizarCategoria" class="btn btn-warning" >Actualizar</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/updateCategorias.controller.php"
?>
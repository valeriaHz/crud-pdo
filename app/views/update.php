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
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" value="<?php echo $contacto['telefono'] ?>" aria-describedby="telefonoHelp">
                    <div id="telefonoHelp" class="form-text">Ingresa el telefono a actualizar</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $contacto['email'] ?>" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ingresa el email a actualizar</div>
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="categoria" value="<?php echo $contacto['categoria'] ?>" aria-describedby="categoriaHelp">
                    <div id="categoriaHelp" class="form-text">Ingresa la categoria a actualizar</div>
                </div>
                <button id="actualizar" class="btn btn-warning" >Actualizar</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/update.controller.php"
?>
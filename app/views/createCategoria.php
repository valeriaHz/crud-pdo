<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar categoria</h1>
            <form action="">
                <div class="mb-3">
                <div class="mb-3">
                <label for="categoria" class="form-label" style="display: flex;">Categoria</label>
                <input type="text" class="form-control"id="categoria" aria-describedby="categoriaHelp">
                <div id="categoriaHelp" class="form-text">Ingresa una categoria</div>
                </div>
                <div id="crearCategoria" class="btn btn-outline-success">Agregar categoria</div>
            </form>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/createCategoria.controller.php"
?>

    

    <!-- objeto global de js window (en el navegador) -->
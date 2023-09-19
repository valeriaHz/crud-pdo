<!-- <?php 
    print_r($contactos);
?> -->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <a class="btn btn-outline-success mb-3" href="./create">Agregar contacto</a>
            <a class="btn btn-outline-info mb-3" href="./createCategoria">Agregar categorias</a>
            <hr>
            <div class="table-responsive">
                <table style="background-color:#D5F5E3" class="table table align-middle table-striped table-hover table-border">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Categoria</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($contactos as $contacto):
                        ?>
                        <tr>
                            <td><?php echo $contacto["nombre"]?></td>
                            <td><?php echo $contacto["telefono"] ?></td>
                            <td><?php echo $contacto["email"] ?></td>
                            <td><?php echo $contacto["categoria"]?></td>
                            <td>
                                <a class="btn btn-outline-secondary" href="./update&id=<?php echo $contacto["id"] ?>">Actualizar</a>
                            </td>
                            <td>
                            <button onclick="eliminar(<?php echo $contacto['id'] ?>)" class="btn btn-outline-danger">Eliminar</button>
                            </td>
                        </tr>
                        
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
            <br>
            <a class="btn btn-info" href="./home">Regresar</a>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/delete.controller.php"
?>











<!-- enviar por url
primer variable con simbolo ? y luego id pero si se quiere enviar otro dato va con &
youtube.com/var? id=1 & var2 id=4 -->
<div class="container mt-3">
        <div class="row">
            <div class="col">
                <hr>
                <div class="table-responsive">
                    <table style="background-color: #D1F2EB; border-collapse: collapse" width="25%" class="table table-bordered table align-middle">
                        <thead>
                        <tr style="border-bottom: 1px solid #FDFEFE;">
                            <th style="padding: 12px 15px;">Categoria</th>
                        </tr>
                        </thead>
                        <tbody style="background-color:#D6EAF8">
                            <?php 
                                foreach ($categorias as $categoria):
                            ?>
                            <tr style="border-bottom: 1px solid #FDFEFE; ">
                                <td style="padding: 12px 15px;"><?php echo $categoria["categoria"] ?></td>
                                
                            </tr>
                            
                            <?php
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <a class="btn btn-outline-info" href="./createCategoria">Actualizar</a>
                <a class="btn btn-outline-warning" href="./read">Regresar</a>
            </div>
        </div>
    </div>
<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->updateCategoria([
        "id" => $_POST["id"],
        "categoria" => $_POST["categoria"],
    ]);
?>
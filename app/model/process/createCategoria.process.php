<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->createCategoria([
        "categoria" => $_POST["categoria"],
    ]);
    
    
    
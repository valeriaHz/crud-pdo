<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require "./app/views/includes/metatags.php"
    ?>
</head>
<body>

    <?php
        require "./app/model/crud.class.php";
        $crud = new Crud();
        if (isset($_GET["view"])){
            switch ($_GET["view"]){
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    $contactos = $crud->read();
                    include "./app/views/read.php";
                    break;
                case 'update':
                    $contacto = $crud->show($_REQUEST["id"]);
                    include "./app/views/update.php";
                    break;
                case 'create':
                    $categorias = $crud->readCategoria();
                    include "./app/views/create.php";
                    break;
                case 'readCategoria':
                    $categorias = $crud->readCategoria();
                    include "./app/views/readCategoria.php" ;
                    break;
                case 'createCategoria':
                    $categorias = $crud->readCategoria();
                    include "./app/views/createCategoria.php";
                    break;
                case 'updateCategoria':
                    $categorias = $crud->showCategoria($_REQUEST["id"]);
                    include "./app/views/updateCategorias.php";
                    break;
                default:
                    header("location: ./read");
                    break;
            }
        }else{
            header("location: ./home");
        }  
    ?>
    
    <?php
        require "./app/views/includes/scripts.php"
    ?>
</body>
</html>

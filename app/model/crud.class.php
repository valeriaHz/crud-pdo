<?php

use LDAP\Result;

class Crud {

    private $conexion;
    private $host ="localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "agenda";

    public function __construct(){
      $this -> conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user, $this->pass );  
    }

    public function read() {
      $query = "SELECT contactos.id, contactos.nombre, contactos.telefono, contactos.email, categorias.categoria
      FROM contactos 
      LEFT JOIN categorias
      ON contactos.categoria = categorias.id";
      $stmt = $this->conexion->prepare($query);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      unset($this->conexion);
      return $result;
    }

    public function readCategoria() {
      $query = "SELECT * FROM categorias";
      $stmt = $this->conexion->prepare($query);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      unset($this->conexion);
      return $result;
    }

    public function create($datos){
        $query = "INSERT INTO contactos(nombre, telefono, email, categoria) VALUES (:nombre, :telefono, :email, :categoria)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre", $datos["nombre"]);
        $stmt->bindParam(":telefono", $datos["telefono"]);
        $stmt->bindParam(":email", $datos["email"]);
        $stmt->bindParam(":categoria", $datos["categoria"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }

    public function createCategoria($datos){
      $query = "INSERT INTO categorias(categoria) VALUES (:categoria)";
      $stmt = $this->conexion->prepare($query);
      $stmt->bindParam(":categoria", $datos["categoria"]);
      $stmt->execute();
      unset($this->conexion);
      return json_encode($stmt);
  }

    public function update($datos){
        $query="UPDATE contactos SET nombre=:nombre, telefono=:telefono, email=:email, categoria=:categoia  WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $datos["id"]);
        $stmt->bindParam(":nombre", $datos["nombre"]);
        $stmt->bindParam(":telefono", $datos["telefono"]);
        $stmt->bindParam(":email", $datos["email"]);
        $stmt->bindParam(":categoria", $datos["categoria"]);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }

    public function updateCategoria($datos){
      $query="UPDATE categorias SET categoria=:categoria WHERE id=:id";
      $stmt = $this->conexion->prepare($query);
      $stmt->bindParam(":id", $datos["id"]);
      $stmt->bindParam(":categoria", $datos["categoria"]);
      $stmt->execute();
      unset($this->conexion);
      return $stmt;
  }

    public function delete($id){
        $query = "DELETE FROM contactos WHERE id =:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }

    public function deleteCategoria($id){
      $query = "DELETE FROM categorias WHERE id =:id";
      $stmt = $this->conexion->prepare($query);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      unset($this->conexion);
      return $stmt;
  }

    public function show($id){
        $query = "SELECT * FROM contactos WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function showCategoria($id){
      $query = "SELECT * FROM categorias WHERE id=:id";
      $stmt = $this->conexion->prepare($query);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      unset($this->conexion);
      return $result;
  }

}


?>
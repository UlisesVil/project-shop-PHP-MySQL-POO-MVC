<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Producto{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db = Database::connect(); /*Conexion base de datos*/
    }
    
    public function getId() {
        return $this->id;
    }

    public function getCategoria_id() {
        return $this->categoria_id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getOferta() {
        return $this->oferta;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getImagen() {
        return $this->imagen;
    }

    
    public function setId($id): void {
        $this->id = $id;
    }

    public function setCategoria_id($categoria_id): void{
        $this->categoria_id = $categoria_id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    public function setPrecio($precio): void {
        $this->precio = $this->db->real_escape_string($precio);
    }

    public function setStock($stock): void {
        $this->stock = $this->db->real_escape_string($stock);
    }

    public function setOferta($oferta): void {
        $this->oferta = $this->db->real_escape_string($oferta);
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    public function setImagen($imagen): void {
        $this->imagen = $imagen;
    }


    public function getAll(){
        $productos = $this->db->query('SELECT * FROM productos ORDER BY id DESC;');
        return $productos;
    }
    
    public function getAllCategory(){
        //Se coloca el alias de catnombre ya que si no se coloca
        //se crea conflicto ya que ambas tablas comparten el mismo 
        //nombre de campo "nombre" si en ver.php llamamos a $product->nombre
        //nos dejara el mismo nombre que la categoria y no el nombre del 
        //producto individual
        $sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p "
                . "INNER JOIN categorias c ON c.id = p.categoria_id "
                . "WHERE p.categoria_id = {$this->getCategoria_id()} "
                . "ORDER BY id DESC;"; 
        $productos = $this->db->query($sql);
        return $productos;
    }
    
    public function getRandom($limit){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
        //var_dump($productos);
        //die();
        return $productos;
        
    }
    
    
    public function getOne(){
        $producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()};");
        return $producto->fetch_object();
    }
    
    
    public function save() {

        $sql = "INSERT INTO productos VALUES(null, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}');";
        //var_dump($sql);
        //die();
        $save = $this->db->query($sql);
        echo $this->db->error;

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }
    
    public function edit() {

        $sql = "UPDATE productos SET nombre = '{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = {$this->getPrecio()}, stock = {$this->getStock()}, categoria_id = {$this->getCategoria_id()}";
        
        if($this->getImagen()!= null){
            $sql .= ", imagen = '{$this->getImagen()}'";
        }
               
        $sql .= "WHERE id={$this->id};";
        //var_dump($sql);
        //die();
        $save = $this->db->query($sql);
        //echo $this->db->error;

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }
    
    public function delete(){
        $sql= "DELETE FROM productos WHERE id= {$this->id};";
        $delete = $this->db->query($sql);
        
        $result = false;
        if ($delete) {
            $result = true;
        }

        return $result;
    }

}
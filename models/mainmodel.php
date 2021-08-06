<?php 
class MainModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){
        $sql = 'INSERT INTO dimension_cliente (nombre,correo,comentario)
        values (:nombre,:correo,:comentario)';

        $query = $this->db->conectar();
        // generar una transaccación en la base de datos. Representan cualquier cambio en la base de datos 
        // Proporcionando secuencias de trabajo fiables y aislamiento entre programas accediendo a la vez a la base de datos
        $query->beginTransaction();

        try{
            //insert tabla 1
            $result = $query->prepare($sql);
            $result->execute(['nombre'=>$datos['nombre'],
                              'correo'=>$datos['correo'],
                              'comentario'=>$datos['comentario']]);

            // control en las transacciones SQL, guardar los cambios.
            $query->commit();

            return true;
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
            print_r("Error connection: ". $e->getMessage());
            return $e->getMessage();
        }
    }

    public function mostrarcomentario(){
        $coment=[];
        try {
            $sql='SELECT id_cliente, nombre, comentario, fecha_registro FROM `dimension_cliente`';
            $consulta=$this->db->conectar()->query($sql);
            while ($a=$consulta->fetch()) {
                array_push($coment, $a);
            }
            return $coment;
            }catch (PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                print_r("Error connection: ". $e->getMessage());
                return $e->getMessage();
            }
    }
}
?>
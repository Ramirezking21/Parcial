<?php
class PermisosModel {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM Permisos");
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM Permisos WHERE Id_permisos = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO Permisos (Id_perfil, Id_acceso, Puede_crear, Puede_leer, Puede_actualizar, Puede_borrar) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiii", $data['Id_perfil'], $data['Id_acceso'], $data['Puede_crear'], $data['Puede_leer'], $data['Puede_actualizar'], $data['Puede_borrar']);
        return $stmt->execute();
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE Permisos SET Id_perfil = ?, Id_acceso = ?, Puede_crear = ?, Puede_leer = ?, Puede_actualizar = ?, Puede_borrar = ? WHERE Id_permisos = ?");
        $stmt->bind_param("iiiiiii", $data['Id_perfil'], $data['Id_acceso'], $data['Puede_crear'], $data['Puede_leer'], $data['Puede_actualizar'], $data['Puede_borrar'], $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM Permisos WHERE Id_permisos = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>

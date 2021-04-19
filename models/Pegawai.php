<?php

class Pegawai extends Db {
    public function selectData(){
        $stmt = $this->conn->prepare("SELECT Pegawai.id, Pegawai.nip, Pegawai.nama, Divisi.nama as namaDivisi FROM Pegawai INNER JOIN Divisi ON Pegawai.iddivisi = Divisi.id");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    public function addPegawai(array $dataInput){
        $stmt = $this->conn->prepare("INSERT INTO `Pegawai` ( `nip`, `nama`, `email`, `agama`, `iddivisi`, `foto`) VALUES ( :nip, :nama, :email, :agama, :divisi, :foto) ");
        $params = array(
            ":nip" => $dataInput['nip'],
            ":nama" => $dataInput['nama'],
            ":email" => $dataInput['email'],
            ":agama" => $dataInput['agama'],
            ":divisi" => $dataInput['divisi'],
            ":foto" => $dataInput['foto'],
        );

        $status = false;
        try {
            $stmt->execute($params);
            $status = true;
        } catch (PDOException $e) {
            $status = false;
        }

        return $status;
    }

    public function updatePegawai(array $dataInput){
        $stmt = $this->conn->prepare("UPDATE `Pegawai` SET `nip` = :nip,`nama` = :nama,`email` = :email,`agama` = :agama,`iddivisi` = :divisi,`foto` = :foto WHERE `Pegawai`.`id` = :id");
        $params = array(
            ":id" => $dataInput['id'],
            ":nip" => $dataInput['nip'],
            ":nama" => $dataInput['nama'],
            ":email" => $dataInput['email'],
            ":agama" => $dataInput['agama'],
            ":divisi" => $dataInput['divisi'],
            ":foto" => $dataInput['foto'],
        );

        $status = false;
        try {
            $stmt->execute($params);
            $status = true;
        } catch (PDOException $e) {
            $status = false;
        }

        return $status;
    }

    public function getPegawai($id){
        $stmt = $this->conn->prepare("SELECT Pegawai.*, Divisi.id as divisiId, Divisi.nama as namaDivisi FROM Pegawai INNER JOIN Divisi ON Pegawai.iddivisi = Divisi.id WHERE Pegawai.id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    public function deletePegawai($id){
        $stmt = $this->conn->prepare("DELETE FROM `Pegawai` WHERE `Pegawai`.`id` = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

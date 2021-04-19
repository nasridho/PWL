<?php

class Member extends Db{
    public function getMember($username){
        $stmt = $this->conn->prepare("SELECT * FROM Member WHERE username = :username");
        $stmt->bindParam(':username',$username);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
}
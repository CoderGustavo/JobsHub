<?php

class userController{
    protected $user, $table;

    public function __construct(){
        include "../model/user.php";
        $this->user = new User();
        $this->conn = $this->user->getConnection();
        $this->table = $this->user->getTable();
    }

    public function login($email, $password){
        $password = md5(sha1(md5(sha1($password))));

        $query = $this->conn->prepare("SELECT * FROM $this->table where email = :email AND password = :pass");
        $query->bindParam(":email", $email);
        $query->bindParam(":pass", $password);
        $query->execute();
        $user = $query->fetch();
        if(Empty($user)){
            $res = array("error" => "Credenciais incorretas");
            return json_encode($res);
        }else{
            return json_encode($user);
        }

    }

    public function register($nome, $email, $cpf, $password, $confirm_password){
        if($password != $confirm_password){
            return "As senhas não coincidem!";
        }

        $password = md5(sha1(md5(sha1($password))));

        $query = $this->conn->prepare("INSERT INTO $this->table (name, email, cpf, password) VALUES (:name, :email, :cpf, :pass)");
        $query->bindParam(":name", $nome);
        $query->bindParam(":email", $email);
        $query->bindParam(":cpf", $cpf);
        $query->bindParam(":pass", $password);
        $sucesso = $query->execute();
        if(!$sucesso){
            $res = array("error" => $query->errorInfo()[2]);
            return json_encode($res);
        }else{
            $res = array("success" => "Usuário criado com sucesso!");
            return json_encode($res);
        }
    }

    public function editAccount($userlogged ,$username, $email, $cpf, $password){
        $userlogged = json_decode($userlogged);
        $pass = md5(sha1(md5(sha1($password))));

        if($userlogged->password != $pass){
            $res = array("error" => "Senha digitada não coincide com sua senha atual!");
            return json_encode($res);
        }

        $query = $this->conn->prepare("UPDATE users SET name = :name, email = :email, cpf = :cpf WHERE id = :id");
        $query->bindParam(":id", $userlogged->id);
        $query->bindParam(":name", $username);
        $query->bindParam(":email", $email);
        $query->bindParam(":cpf", $cpf);
        $id = $query->execute();
        if($id){
            $res = array("success" => "Alterações realizadas com sucesso!");
            return json_encode($res);
        }
    }

    public function editPass($userlogged, $current_password, $new_password, $new_password_confirmation){
        $userlogged = json_decode($userlogged);
        $pass = md5(sha1(md5(sha1($current_password))));

        if($userlogged->password != $pass){
            $res = array("error" => "Senha digitada não coincide com sua senha atual!");
            return json_encode($res);
        }else if($new_password != $new_password_confirmation){
            $res = array("error" => "As novas senhas não se coincidem!");
            return json_encode($res);
        }

        $new_password = md5(sha1(md5(sha1($new_password))));

        $query = $this->conn->prepare("UPDATE users SET password = :password WHERE id = :id");
        $query->bindParam(":id", $userlogged->id);
        $query->bindParam(":password", $new_password);
        $id = $query->execute();
        if($id){
            $res = array("success" => "Alterações realizadas com sucesso!");
            return json_encode($res);
        }
    }

}
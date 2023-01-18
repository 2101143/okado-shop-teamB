<?php
    class DBManager{
        private function dbConnect(){
            $pdo = new PDO('mysql:host=localhost;dbname=okado_test;charset=utf8','webuser','abccsd2');
            return $pdo;
        }
        function createAccount($mail,$pass){
            $pdo = $this->dbConnect();
            $sql = "INSERT INTO user (user_mail,user_password)
            VALUES(?,?)";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$mail,PDO::PARAM_STR);
            $ps->bindValue(2,password_hash($pass,PASSWORD_DEFAULT),PDO::PARAM_STR);
            $ps->execute();
        }
        function login($mail,$pass){
            $pdo = $this->dbConnect();
            $sql = "SELECT * FROM user WHERE user_mail = ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,$mail,PDO::PARAM_STR);
            $ps->execute();
            $search = $ps->fetchAll();
            if(!empty($search)){
                foreach($search as $row){
                    if(password_verify($pass,$row["user_password"]) == true){
                        return $search;
                    }else{
                        return [];
                    }
                }
            }else{
                return [];
            }
        }
    }
?>
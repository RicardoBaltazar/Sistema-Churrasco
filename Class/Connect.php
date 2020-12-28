<?php

Class Database{
    private static $pdo;
    public static function connect(){
        if(self::$pdo==null){
            try {
                self::$pdo = new PDO('mysql:host=localhost;dbname=barbecue_challenge;charset=utf8', 'root', '');
            } catch (PDOException $error) {
                echo "Erro oc, banco de dados: ".$error->getMessage();
                exit();
            } catch (Exception $error){
                echo "Erro Genérico: ".$error->getMessage();
                exit();
            }
        }
        return self::$pdo;
    }
}
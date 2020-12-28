<?php

require_once 'Connect.php';

Class Insert{
    public function InsertDatabase($name, $beverage, $guest, $nameGuest, $beverageGuest, $totalvalue, $beverageValue, $foodValue){
        try{
            $insert = Database::connect()->prepare('INSERT INTO list(name, beverage, guest, name_guest, beverage_guest, total_value, beverage_value, food_value)
            VALUES(:name, :beverage, :guest, :name_guest, :beverage_guest, :total_value, :beverage_value, :food_value)');
            $insert->bindParam(":name", $name);
            $insert->bindParam(":beverage", $beverage);
            $insert->bindParam(":guest", $guest);
            $insert->bindParam(":name_guest", $nameGuest);
            $insert->bindParam(":beverage_guest", $beverageGuest);
            $insert->bindParam(":total_value", $totalvalue);
            $insert->bindParam(":beverage_value", $beverageValue);
            $insert->bindParam(":food_value", $foodValue);
            $executeInsert = $insert->execute();   
            
            if($executeInsert){
                echo 'dados cadastrados!';
                //header('location:?page=home&parameter=Dados Cadastrados com sucesso! ');
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }   
}
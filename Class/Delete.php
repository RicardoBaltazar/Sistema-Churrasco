<?php
require_once 'Connect.php';

Class Delete{

    public function deleteUser($id){
        try{
            $delete = Database::connect()->prepare("DELETE FROM list WHERE id = :id");
            $delete->bindParam(":id", $id);
            $delete->execute();
            if($delete){
                header('location:pages/home.html');
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function deleteGuest($id, $guest, $beverageGuest, $food, $total, $beverageValue){
        try{
            $update = Database::connect()->prepare("UPDATE list SET name_guest = NULL, 
            beverage_guest = :beverage_guest, guest = :guest, food_value = :food_value, beverage_value = :beverage_value, 
            total_value = :total_value WHERE id = :id");
            $update->bindParam(":id", $id);
            $update->bindParam(":beverage_guest", $beverageGuest);
            $update->bindParam(":guest", $guest);
            $update->bindParam(":food_value", $food);
            $update->bindParam(":beverage_value", $beverageValue);
            $update->bindParam(":total_value", $total);
            $update->execute();
            if($update){
                header('location:pages/home.html');
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
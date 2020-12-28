<?php

require_once 'Connect.php';

Class Select{

    public function selectName(){
        try{
            $selectName = Database::connect()->prepare("SELECT name, id FROM list ORDER BY name ASC");
            $selectName->execute();
            $executeSelectName = $selectName->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelectName){
                foreach($executeSelectName as $value){
                    echo "<p>".$value['name']."<a href='../validationDeleteUser.php?id=".$value['id']."' class='btn'>Excluir participante</a></p>";
                    
                }
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function selectGuest(){
        try{
            $selectNameGuest = Database::connect()->prepare("SELECT name_guest, id, beverage FROM list ORDER BY name_guest ASC");
            $selectNameGuest->execute();
            $executeSelectNameGuest = $selectNameGuest->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelectNameGuest){
                foreach($executeSelectNameGuest as $value){
                    if(!$value['name_guest'] == ''){
                        //echo $value['id'];
                        echo "<p>".$value['name_guest']."<a href='../validationDeleteGuest.php?
                        id=".$value['id']."&beverage=".$value['beverage'].";
                        ' class='btn'>Excluir convidado</a></p>";
                    }
                }
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function totalValue(){
        try{
            $selectTotalValue = Database::connect()->prepare("SELECT sum(total_value) as total_value FROM list");
            $selectTotalValue->execute();
            $executeSelecTotalValue = $selectTotalValue->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelecTotalValue){
                foreach($executeSelecTotalValue as $value){
                    echo "<p>".$value['total_value']."</p>";
                }
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function foodValue(){
        try{
            $selectFoodValue = Database::connect()->prepare("SELECT sum(food_value) as food_value FROM list");
            $selectFoodValue->execute();
            $executeSelecFoodValue = $selectFoodValue->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelecFoodValue){
                foreach($executeSelecFoodValue as $value){
                    echo "<p>".$value['food_value']."</p>";
                }
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function beverageValue(){
        try{
            $selectBeverageValue = Database::connect()->prepare("SELECT sum(beverage_value) as beverage_value FROM list");
            $selectBeverageValue->execute();
            $executeSelecBeverageValue = $selectBeverageValue->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelecBeverageValue){
                foreach($executeSelecBeverageValue as $value){
                    echo "<p>".$value['beverage_value']."</p>";
                }
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
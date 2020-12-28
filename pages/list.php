<?php
require_once '../Class/Select.php';
$select = new Select;
?>
<section class="section-list">
    <h4>Lista dos participantes: </h4>
    <?php
    $select->selectName();
    ?>

    <br>
    <h4>Lista dos convidados:</h4>
    <?php
    $select->selectGuest();
    ?>

    <br>
    <h4>Total arrecadado:</h4>
    <?php
    $select->totalValue();
    ?>

    <br>
    <h4>Total de gastos:</h4>
    <?php
    $select->totalValue();
    ?>

    <br>
    <h4>Total gasto em comida:</h4>
    <?php
    $select->foodValue();
    ?>

    <br>
    <h4>Total gasto em bebida:</h4>
    <?php
    $select->beverageValue();
    ?>
</section>
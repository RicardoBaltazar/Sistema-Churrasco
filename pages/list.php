<?php
require_once '../Class/Select.php';
$select = new Select;
?>
<!--
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <title>Desafio do Churrasco</title>
</head>

<body>
    <div class="page">
        <header>
            <div>
                <h1>Churrasco da Empresa</h1>
                <p>Sistema para gerenciar o churrasco da empresa!</p>
            </div>
            <a href="" class="link-menu" id="home">Home</a>
        </header>
        
        <div class="section-form">
            -->
            
            <section class="section">
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
            <!--
        </div>

    </div>

    <script>
        $(document).ready(function(){
            $('.link-menu').click(function(){
                let load_url = this.id
                load_url = load_url+'.html'
                //alert(load_url)

                
                $.ajax({
                    url: load_url,
                    success: function(data){
                        $('.page').html(data)
                    }
                })
                
            })
        })
    </script>
</body>
</html>
-->

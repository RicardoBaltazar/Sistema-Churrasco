<section class="section">
    <p><strong>Valor do churrasco por participante: </strong>10$</p>
    <p><strong>Valor da bebida por participante: </strong>10$</p>
    <p><strong>Valor para levar um convidado: </strong>10$</p>
    <br>
    <h4>Se você deseja participar do churrasco da empresa, preencha os campos abaixo!</h4>
    <br>
    <form action="../validation.php" method="POST">
        <div class="field">
            <label for="name">Seu Nome:</label>
            <input type="text" placeholder="Digite seu nome" name="name" required>
        </div>
        <div class="field">
            <label for="name">Voce pretende beber algo? </label>
            <div class="field-radio">
                <input type="radio" name="beverage" id="" value='1'>
                <label for="">Sim</label>
                <input type="radio" name="beverage" id="" value='0'>
                <label for="">Não</label>
            </div>
        </div>

        <div class="field">
            <label for="name">Voce deseja levar um convidado:</label>
            <div class="field-radio">
                <input type="radio" name="guest" value='1'>
                <label for="">Sim</label>
                <input type="radio" name="guest" value='0'>
                <label for="">Não</label>
            </div>
        </div>

        <div class="field">
            <label for="guest">Nome do convidado</label>
            <input type="text" placeholder="Nome do convidado" name="name-guest">
        </div>

        <div class="field">
            <label for="name">Seu convidado pretende beber algo?:</label>
            <div class="field-radio">
                <input type="radio" name="beverage-guest" value='1'>
                <label for="">Sim</label>
                <input type="radio" name="beverage-guest" value='0'>
                <label for="">Não</label>
            </div>
        </div>
        <input type="submit" class="button" name="action" value="Cadastrar">
    </form>
</section>
<?php $render('header'); ?>

<section class="container bg_h" >
<h2 class="title_1">BOLSA ALIMENTACAO IF GOIANO</h2>
<h2 class="title">Campus Rio Verde</h2>
</section>
<section class="cover-form">
<div class="container bg">
    <div class="form-container">
    <h2 style="margin: 5px;">Novo Usuário</h2>
        <form action="">
        <div class="form-wrape">
            <p>*Nome:</p>
            <input type="text" placeholder="Nome" name="nome" required value="<?=$usuario['nome']?>">
        </div>
        <div class="form-wrape">
            <p>*Código:</p>
            <input type="number" placeholder="Código" name="codigo" required value="<?=$usuario['codigo']?>">
        </div>
        <div class="form-wrape">
        <br>
        <div class="form-wrape">
            <input class="bt" type="submit" id="submit" value="Salvar ">
        </div>
        <div class="form-wrape" style="border: 2px solid #CCC;border-radius:3px; color: #CCC; font-weight: bold; padding: 5px">
            <p class="info">* Campos Obrigatórios </p>
        </div>
        </form>
    </div>  
</div>
</section>

<section class="container bg_h" >
    <br>
    <br>
    <br>
</section>
<?php $render('footer'); ?>
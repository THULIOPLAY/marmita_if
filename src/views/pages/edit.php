<?php $render('header'); ?>

<section class="cover-form">
        <div class="container bg">
            <div class="form-container">
                <h2>Editar Agendamento: <?=$usuario['nome']?> </h2>
                <form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                    <div class="form-wrape">
                        <p>*Nome:</p>
                        <input type="text" placeholder="Nome" name="nome" required value="<?=$usuario['nome']?>">
                    </div>

                    <div class="form-wrape">
                        <p>*Código:</p>
                        <input type="number" placeholder="123456789456" name="matricula" required value="<?=$usuario['matricula']?>">
                    </div>

                    <div class="form-wrape">
                    <p>*Horário</p>
                    <select name="horario" id="cars" >
                        <option value="Almoço">Almoço</option>
                        <!-- <option value="Janta">Janta</option> -->
                    </select>
                    </div>

                    <div class="form-wrape">
                        <p>*Data:</p>
                        <input type="date" name="data" required value="<?=$usuario['data']?>">
                    </div>

                    <div class="form-wrape">
                        <input class="bt" type="submit" value="Salvar">
                    </div>

                    <div class="form-wrape">
                        <p class="info">* Campos Obrigatórios </p>
                    </div>

                </form>

            </div>
        </div>
    </section>
<?php $render('footer'); ?>

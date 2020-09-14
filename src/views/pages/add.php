<?php $render('header'); ?>

<section class="cover-form">
        <div class="container bg">
            <div class="form-container">

                <?php if (!empty($flash)):?>
                    <h2 style="border: 2px solid #0b8b50; color: #0b8b50; font-weight: bold; margin: 5px;"><?php echo $flash ?></h2>
                <?php endif; ?>

                <h2>Novo Agendamento para Marmita</h2>
                <form method="POST" action="<?=$base;?>/novo">
                    <div class="form-wrape">
                        <p>*Nome:</p>
                        <input type="text" placeholder="Nome" name="nome" required>
                    </div>

                    <div class="form-wrape">
                        <p>*Código:</p>
                        <input type="number" placeholder="123456789456" name="matricula" required>
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
                        <input type="date" name="data" required>
                    </div>

                    <div class="form-wrape">
                        <input class="bt" type="submit" value="Marcar">
                    </div>

                    <div class="form-wrape">
                        <p class="info">* Campos Obrigatórios </p>
                    </div>

                </form>

            </div>
        </div>
    </section>

<?php $render('footer'); ?>

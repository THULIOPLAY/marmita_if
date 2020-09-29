<?php $render('header'); ?>
<?php $agora = date('H:i');?>
<?php $date = date('Y/m/d');?>
<?php $data_amanha = date ('Y/m/d', strtotime('+1 day'));?>


<section class="container bg_h" >
<h2 class="title_1">BOLSA ALIMENTACAO IF GOIANO</h2>
<h2 class="title">Campus Rio Verde</h2>
</section>

<section class="cover-form">
        <div class="container bg">
            <div class="form-container">

                <?php if (!empty($flash)):?>
                    <h2 style="border: 2px solid #0b8b50; color: #FFF; background: #0b8b50; font-weight: bold; margin: 5px;"><?php echo $flash ?></h2>
                <?php elseif(!empty($error)): ?>
                    <h2 style="border: 2px solid rgb(255, 9, 50); color: #FFF; background: rgb(255, 9, 50); font-weight: bold; margin: 5px;"><?php echo $error ?></h2>
                <?php endif; ?>
                
                <h2 style="margin: 5px;">Novo Agendamento</h2>

                <?php if ( $agora < '08:30'):?>
                    <h2 style="border: 2px solid rgb(0, 113, 206); background:rgb(0, 113, 206) ; color: #FFF; font-weight: bold; margin: 5px;">Agendamento para: <?php echo $date; ?> </h2>
                <?php elseif( $agora > '13:30'): ?>
                    <h2 style="border: 2px solid rgb(0, 113, 206); background:rgb(0, 113, 206) ; color: #FFF; font-weight: bold; margin: 5px;">Agendamento para: <?php echo $data_amanha; ?> </h2>
                <?php elseif( $agora > '08:30' && $agora < '13:30'): ?>
                    <h2 style="border: 2px solid rgb(255, 189, 9); color: rgb(255, 189, 9); font-weight: bold; margin: 5px;">Agendamento Bloqueado!  </h2>
                <?php endif;?>

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

                    <?php if ( $agora > '08:30' && $agora < '13:30'):?>
                        <br>
                        <h2 style="border: 2px solid rgb(255, 9, 50); color: rgb(255, 9, 50); font-weight: bold; margin: 5px;">Horário excedido: <?php echo $agora; ?> </h2>                
                        <div class="form-wrape">
                            <input style="color: rgb(255, 9, 50);" class="bt" type="submit" id="submit" value="INDISPONÍVEL" disabled>
                        </div>
                    <?php else: ?>
                        <br>
                        <div class="form-wrape">
                            <input class="bt" type="submit" id="submit" value="Marcar ">
                        </div>
                    <?php endif;?>

                    <div class="form-wrape" style="border: 2px solid #CCC;border-radius:3px; color: #CCC; font-weight: bold; padding: 5px">
                    <p class="info">* Agendamento disponível das 13:30 as 08:30 horas </p>
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

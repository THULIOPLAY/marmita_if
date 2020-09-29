<?php $render('header'); ?>

<div class="container">
    <a class="bt " href="<?=$base;?>/novo">Marcar Horário</a>
    <a class="bt col-g" href="<?=$base;?>/cadastrar">Novo Administrador</a> <br><br>
    <a class="bt_info col-y" href="<?=$base;?>/pdf" target="_blank" >Imprimir</a> 

   <hr>
    <h2 style="color: rgb(56, 56, 56); font-size:20px;">Buscar por dia:</h2>
    <form method="POST" action="<?=$base;?>/date">
        <input class="form-control" type="date" name="listDate">
        <input type="submit" class="bt_info" value="Buscar" >
    </form>
    <hr>

    <?php if (!empty($data)):?>
    <label>Imprimir Resultado</label>
    <form method="POST" action="<?=$base;?>/pdfres">
        <input class="form-control" type="hidden" name="data_imp" value="<?=$data?>">
        <input type="submit" class="bt_info col-y" value="Imprimir" target="_black">
    </form>
    <?php endif;?>    

<div class=" table-responsive-sm">
    <table class="content-table" >
        <thead>
            <tr>
                <th>
                    <a href="<?=$base?>/home" style=" text-decoration: none; color: white"><img width="20" src="<?=$base;?>/assets/images/calendario.png"> <label id="date"></label></a>
                    <script>
                        n =  new Date();
                        y = n.getFullYear();
                        m = n.getMonth() + 1;
                        d = n.getDate();
                        document.getElementById("date").innerHTML = y + "/"  + m  + "/" + d;
                    </script>
                </th>
        </tr>
        </thead>
        <br>
        <thead>
            <tr >
                <th>Código</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        
            <tr >
                <td> 
                    <img width="20" src="<?=$base;?>/assets/images/pessoas.png">
                    <?= $usuario['matricula'] ?>
                </td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['data'] ?></td>
                <td><?= $usuario['horario'] ?></td>
                <td>
                    <a class="bt col-y" href="<?=$base;?>/usuario/<?=$usuario['id']?>/editar">[Editar]</a>
                    <a class="bt col-red" href="<?=$base;?>/usuario/<?=$usuario['id']?>/deletar" onclick="return confirm('Tem certeza que deseja excluir esse agendamento?')">[Excluir]</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
    
</div>
</div>
    <div id="dropDownSelect1"></div>
    
    <div id="dropDownSelect1"></div>
<?php $render('footer'); ?>

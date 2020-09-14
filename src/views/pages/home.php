<?php $render('header'); ?>

<div class="container">
    <a class="bt" href="<?=$base;?>/novo">Marcar Horário</a>
    <a class="bt col-g" href="<?=$base;?>/cadastrar">Novo Administrador</a>
    <a class="bt col-y" href="<?=$base;?>/pdf" target="_blank">Imprimir Lista</a>

</div>

<div class="container">
    <table class="content-table" >
        <thead>
            <tr>
                <th>
                    <img width="20" src="<?=$base;?>/assets/images/calendario.png"> <label id="date"></label>
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

    <div id="dropDownSelect1"></div>
    
    <div id="dropDownSelect1"></div>
<?php $render('footer'); ?>

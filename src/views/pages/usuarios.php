<?php $render('header'); ?>

    <div class="container">
        <h2 style="color: rgb(56, 56, 56); ">Usuários</h2>
        <hr>

        <div class=" table-responsive-sm">
    <table class="content-table" >
        <thead>
            <tr >
                <th>Id</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        
            <tr >
                <td> 
                    <img width="20" src="<?=$base;?>/assets/images/pessoas.png">
                    <?= $usuario['id'] ?>
                </td>
                <td><?= $usuario['codigo'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td>
                    <a class="bt col-y" href="<?=$base;?>/alunos/<?=$usuario['id']?>/editar">[Editar]</a>
                    <a class="bt col-red" href="<?=$base;?>/usuario/<?=$usuario['id']?>/deletar" onclick="return confirm('Tem certeza que deseja excluir esse agendamento?')">[Excluir]</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
    
</div>
</div>
        
    </div>

<?php $render('footer'); ?>

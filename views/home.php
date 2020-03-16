<?php 

?>
<div class='container-fluid'>
        <div class='row'>
            <a href='<?=BASE_URL?>home/addUsuario' class='btn btn-default'><i class="fa fa-plus-square-o" aria-hidden="true"></i> Adicionar Usuário</a>
        </div>
    <div class='row'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Usuário</th>
                    <th>Slug</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($dadosUsuarios as $dado):
                    //print_r($dado);
            ?>
                <tr>
                    <td><a class='link-padrao' href='<?= BASE_URL?>home/abrir/<?=$dado['slug']?>'><?=$dado['id']?></a></td>
                    <td><a class='link-padrao' href='<?= BASE_URL?>home/abrir/<?=$dado['slug']?>'><?=$dado['nome']?></a></td>
                    <td><a class='link-padrao' href='<?= BASE_URL?>home/abrir/<?=$dado['slug']?>'><?=$dado['telefone']?></a></td>
                    <td><a class='link-padrao' href='<?= BASE_URL?>home/abrir/<?=$dado['slug']?>'><?=$dado['email']?></a></td>
                    <td><a class='link-padrao' href='<?= BASE_URL?>home/abrir/<?=$dado['slug']?>'><?=$dado['usuario']?></a></td>
                    <td><a class='link-padrao' href='<?= BASE_URL?>home/abrir/<?=$dado['slug']?>'><?=$dado['slug']?></a></td>
                    <td>
                        <div class="btn-group ">
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"href="#"><i style='font-size:15' class="fa fa-cog fa-fw"></i> </a>
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="fa fa-caret-down" style='font-size:15' title="Toggle dropdown menu"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=BASE_URL?>home/editarUsuario/<?=$dado['slug']?>"><i class="fa fa-pencil fa-fw"></i> Editar</a></li>
                            <li><a href="<?=BASE_URL?>home/excluirUsuario/<?=$dado['slug']?>"><i class="fa fa-trash-o fa-fw"></i> Deletar</a></li>
                        </ul>
                        </div>
                    </td>
                </tr>
            <?php
                endforeach;
            ?>
            </tbody>
        </table>
    </div>
</div>

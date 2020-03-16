<div class='col-md-6 colorGray'>
        <form action='<?=BASE_URL?>home/editarUser' method='post'>
            <input type='hidden' name='id' value='<?=$id?>'/>
            <div class='form-group'>
                <label class='label-negrito'>Nome:</label>
                <input class='form-control' value='<?=$nome?>' name='nome'/>
            </div>
            <div class='form-group'>
                <label class='label-negrito'>Email:</label>
                <input class='form-control' value='<?=$email?>' type='email' name='email'/>
            </div>
            <div class='form-group'>
                <label class='label-negrito'>Senha:</label>
                <input class='form-control' value='' type='password' name='senha'/>
            </div>
            <div class='form-group'>
                <label class='label-negrito'>Usuário:</label>
                <input class='form-control' value='<?=$usuario?>' name='usuario'/>
            </div>
            <div class='form-group'>
                <label class='label-negrito'>Telefone:</label>
                <input class='form-control' value='<?=$telefone?>' name='telefone'/>
            </div>
           
            <div class='form-group'>
                <input class='btn btn-default' type='submit' value='Enviar'/>
            </div>
            
        </form>
    </div>
    <div class='col-md-6 colorGray'>
        <center><i class="fa fa-user fa-5x" aria-hidden="true"></i></center>
    </div>



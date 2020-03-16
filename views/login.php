<div class="container">
    <?php if(isset($_GET['error']) && !empty($_GET['error'])){ ?>
        <div class='alert alert-danger'>
                        <p>Usuário ou senha Incorreto.</p>
        </div>
    <?php }?>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Tela de Login</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method='POST' action='<?=BASE_URL?>login/logon' >
                <input type="text" class="form-control"name='email' placeholder="Email" required autofocus>
                <input type="password" class="form-control"  name='senha'placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Logar </button>
                </form>
            </div>
            <a href="<?=BASE_URL?>home/addUsuario" class="text-center new-account">Cadastrar Usuário </a>
        </div>
    </div>
</div>
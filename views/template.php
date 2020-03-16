<html>
    <head>
        <title>Cadastro de Usuário</title>

        <!--CSS-->
        <link rel='stylesheet' href='<?= BASE_URL?>assets/css/bootstrap.min.css'/>
        <link rel='stylesheet' href='<?= BASE_URL?>assets/css/style.css'/>

        <!--JS-->
        <script src="https://kit.fontawesome.com/1bad4c87bf.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <a href='<?=BASE_URL?>' class='navbar-brand'>Cadastro de Usuário</a>
                </div>
                <ul class='nav navbar-nav navbar-right'> 
                    <?php if(isset($_SESSION['login'])){ ?>
                        <li><a ><i class="fa fa-user" aria-hidden="true"></i> <?=$_SESSION['login']?></a></li>
                        <li><a href='<?= BASE_URL?>login/logoff' >Sair</a></li>
                    <?php }else{ ?>
                        <li><a href="<?= BASE_URL?>login">Login</a></li>
                    <?php } ?>
                       
                </ul>
            </div>
        </nav>
        <?php $this->loadViewInTemplate($viewName,$viewData);?>
        <!--JS-->
        <script src='<?= BASE_URL?>assets/js/jquery-3.4.1.min.js'></script>
        <script src='<?= BASE_URL?>assets/js/bootstrap.min.js'></script>
        <script src='<?= BASE_URL?>assets/js/script.js'></script>
    </body>
</html>
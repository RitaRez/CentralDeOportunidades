<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/coordenador.css">
        <script src="../script/nav.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Open+Sans+Condensed:300" rel="stylesheet">
        <title>Central de Oportunidades - Convidar Coordenador</title>
    </head>
    <body>
        <!-- NavBar -->
        <?php include "../components/nav.inc" ?>
        <div id="main">
            <!-- Search bar -->
            <nav id="searchBar" class="py-3 container-fluid">
                <div class="row search">
                    <button class="ml-4" id="navOpener" onclick="openNav()"><i class="col-1 fas fa-2x fa-bars"></i></button>
                    <h1 id="title" class="col-11" ></h1>
                </div>
            </nav>
            <div id="mainCard" class="card offset-1 offset-sm-1 offset-md-2 offset-lg-3 offset-xl-3 col-10 col-sm-10 col-md-8 col-lg-6 col-xl-6 align-self-center" >

                <div class="card-body">
                    <p id="subtitle" >Convidar Coordenadores</p>
                    <h3 class="card-title text-center">Digite o nome e e-mail do novo coordenador!</h3>
                </div>

                <form class="mt-4" action="" method="post">
                    <ul class="list-group justify-content-center">

                        <li class="row option list-group-item list-group-item-light">
                            <div class="button input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nome:</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nome" name="login" aria-label="Nome" aria-describedby="basic-addon1">
                            </div>
                        </li>
                        <li class="row option list-group-item list-group-item-light">
                            <div class="button input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">E-mail</span>
                                </div>
                                <input type="text" class="form-control" placeholder="E-mail" name="password" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                        </li>
                        <li class="option align-self-center mb-4 lForm list-group-item list-group-item-light"> <button class="col-12 button px-4"  type="submit" value="Entrar">Enviar   <i class="pl-3 fas fa-paper-plane"></i></button></li>
                </form>
            </div>

    </body>
</html>

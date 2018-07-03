<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/vagas.css">
        <script src="script/nav.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <!-- NavBar -->
        <?php include "../components/nav.inc" ?>

        <!-- Search bar -->
        <nav id="searchBar" class="py-3 container-fluid">
            <div class="row">
                <button class="ml-4" id="navOpener" onclick="openNav()"><i class="fas fa-2x fa-bars"></i></button>
                <div class="offset-0 col-8 offset-xs-1 offset-sm-1 offset-md-2 offset-lg-2 col-xs-6 col-sm-7 col-md-8 col-lg-8 input-group">
                  <h1>Candidatos Pendentes:</h1>
            </div>
        </nav>

        <!-- Candidatos Pendentes -->

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>


    </body>
</html>

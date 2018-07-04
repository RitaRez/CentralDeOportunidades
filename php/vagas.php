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
        <div id="main">
            <!-- Search bar -->
            <nav id="searchBar" class="py-3 container-fluid">
                <div class="row">
                    <button class="ml-4" id="navOpener" onclick="openNav()"><i class="fas fa-2x fa-bars"></i></button>
                    <div class="offset-0 col-8 offset-xs-1 offset-sm-1 offset-md-2 offset-lg-2 col-xs-6 col-sm-7 col-md-8 col-lg-8 input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
                      </div>
                      <input placeholder="Procure uma vaga" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </nav>



            <!-- Cards Gallery -->
            <div id="gallery" class="mx-3 mt-3 cards">
                <div class="container-fluid">
                    <div class="row pt-4">
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card1.inc" ?>
                        </div>
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card2.inc" ?>
                        </div>
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card3.inc" ?>
                        </div>
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card1.inc" ?>
                        </div>
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card1.inc" ?>
                        </div>
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card3.inc" ?>
                        </div>
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card1.inc" ?>
                        </div>
                        <div class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <?php include "../components/card2.inc" ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>

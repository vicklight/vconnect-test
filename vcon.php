<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Vconnect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".mynav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">
                            <img src="img/vimg.jpg" alt="vconnect" height="42" width="42">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse mynav">
                        <ul class="nav navbar-nav">
                            <li><a href="vcon.php">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                        <form class="navbar-form" role="search">
                            <div class="input-group add-on">
                                <input class="form-control" placeholder="What are you looking for..." name="srch-term" id="srch-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
            </nav>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/sd-cards-590x295.jpg" alt="vconnect1" height="100%" width="100%">
                    </div>

                    <div class="item">
                        <img src="img/memorycardcompraisonfeat.jpg" alt="vconnect2" height="100%" width="100%">
                    </div>

                    <div class="item">
                        <img src="img/maxresdefault.jpg" alt="vconnect3" height="100%" width="100%">
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="container listcon">
            <div class="row deals">
                <div class="col-xs-9">
                    <h4>DEALS OF THE DAY</h4>
                </div>
                <div class="col-xs-3">
                    <h4>13:30:40</h4>
                </div>
            </div>
                <div class="row">
                    <div class="col-xs-4 list">
                        <img src="img/pots.jpg" alt="pots" height="100px" width="100%">
                        <h5 style="text-align: center">Non-stick pots</h5>
                        <p style="text-align: center"><del>#2000</del> #500</p>
                    </div>
                    <div class="col-xs-4 list">
                        <img src="img/Energizer-MAX-9V-Alkaline-paylessdeal.jpg" alt="duracell" height="100px" width="100%">
                        <h5 style="text-align: center"> Batteries</h5>
                        <p style="text-align: center"><del>#3000</del> #2500</p>
                    </div>
                    <div class="col-xs-4 list">
                        <img src="img/gas.jpg" alt="gas" height="100px" width="100%">
                        <h5 style="text-align: center">Cooking gas</h5>
                        <p style="text-align: center"><del>#6000</del> #4000</p>
                    </div>
                </div>
            </div>
            <footer>
                <img src="img/hqdefault.jpg" alt="footer image" height="100%" width="100%">
            </footer>







</body>
</html>
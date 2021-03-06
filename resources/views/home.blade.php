<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Go Green</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="silver">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-xs-3">
                    <div class="logo">
                        <img src="../images/gogreenlogo.png" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-9 col-xs-5">
                     <h3 class="gree">Go Green </h3>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="logo1" style="float: right;">
                        <div class="dropdown">
                            <div class="btn dropdown-toggle" type="button" data-toggle="dropdown"  >
                                <img class="img-responsive profile" src="../images/malehead.png">
                            </div>
                            <ul class="dropdown-menu" >
                                <li><a href="profiledetail.html">View my profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navcol">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                    <span class="nav-label">Categories</span> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="test" tabindex="-1" href="#">ကုန်ကြမ်းအမျိုးစားများ
                                        </a>

                                    </li>

                                    <li>
                                        <a class="test" tabindex="-1" href="#">ကုန်ချောအမျိုးစားများ
                                        </a>

                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/home">HOME</a></li>
                            <li><a href="/home/news">NEWS AND KNOWLEDGE</a></li>
                            <li><a href="/home/tuotorial">TUTORIALS</a></li>
                            <li><a href="/home/about">ABOUT US</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="carousel-caption">
                        <div class="col-sm-6 col-xs-12">
                          <h3 class="welcome">REDUCE</h3>
                         <h2 class="ww">RECYCLE</h2>
                         <h3 class="ww">REUSE</h3>
                        <h3 class="ww">& REPRODUCE</h3>
                       </div>
                    </div>
                    <div class="sli">
                        <div class="col-sm-6 col-xs-12">
                            <img src="../images/silde1.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="carousel-caption">
                        <div class="col-sm-6 col-xs-12">
                            <h3 class="welcome">REDUCE</h3>
                            <h2 class="ww">RECYCLE</h2>
                            <h3 class="ww">REUSE</h3>
                            <h3 class="ww">& REPRODUCE</h3>
                        </div>
                    </div>
                    <div class="sli">
                        <div class="col-sm-6 col-xs-12">
                            <img src="../images/silde2.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="item hh">
                    <div class="carousel-caption">
                        <div class="col-sm-6 col-xs-12">
                            <h3 class="welcome">REDUCE</h3>
                            <h2 class="ww">RECYCLE</h2>
                            <h3 class="ww">REUSE</h3>
                            <h3 class="ww">& REPRODUCE</h3>
                        </div>
                    </div>
                    <div class="sli">
                        <div class="col-sm-6 col-xs-12">
                            <img src="../images/silde3.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="rg">
        <h3 class="all">All Categories &nbsp<i class="icon-double-angle-right"></i></h3>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/news2.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Recycling Fancy Plant</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">2000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/handmade4.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Recycling Bags</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">8000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/handmade5.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Desk</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">20000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/handmade2.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Recycling Fancy Plant</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">2000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/handmade3.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Product Name</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">8000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/handmade7e.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Cup</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">20000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/news2.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Recycling Fancy Plant</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">2000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/handmade4.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Recycling Bags</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">8000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="res">
                        <img src="../images/handmade5.jpg" class="img-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pp">Desk</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ppa">20000 Ks</p>
                            </div>
                            <div class="col-md-6">
                                <a class="detail-btn" href="productdetail.html">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xs-6">
                    <div class="back">
                        <a href="#"><h3 ><i class="icon-double-angle-left" ></i>&nbsp;Back </h3></a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                    <div class="next">
                        <a href="#"><h3 >Next &nbsp;<i class="icon-double-angle-right"></i></h3></a>
                    </div>
                </div>
            </div>
        </div>


        <a class="detail-btn" href="sell">sell</a><br><br>


    </div>
</body>

<footer>
    <div class="foot">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="a">
                        <h4>Information</h4>
                        <p>Delivery Information<br>
                            How to buy/sell<br>
                            Privacy Policy<br>
                            Terms & Conditions<p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="a">
                        <h4>Customer Care</h4>
                        <p>Help Center<br>
                        Track your order<br>
                        Returns and refund<br>
                        Cooperate and Bulk<p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="a">
                        <h4>Contact us</h4>
                        <p>Building 14,Room 605,<br>
                          MICT Park,Yangon.<p>
                        <p>09-448-4444-11</p>
                        <p>info@netscriper.com</p>
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="a">
                        <h4>Follow us</h4>
                        <i class="icon-facebook f"></i>
                        <i class="icon-twitter t"></i>
                        <i class="icon-youtube y"></i>
                    </div>
                </div>
            </div>
            <p class="s1">Copyright @ GoGreen.All right reserved .Website Designed by &nbsp;
                <a href="https://www.netscriper.com/" target="_Blank"  class="s1" >Netscriper</a>
            </p>
        </div>
    </div>
</footer>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/owl.carousel.js"></script>
        <script src="../js/myjs.js"></script>
</html>

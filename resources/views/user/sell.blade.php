<!DOCTYPE html>
<html>
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
                                <li><a href="#">Logout</a></li>
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
                            <li><a href="home.html">HOME</a></li>
                            <li><a href="news.html">NEWS AND KNOWLEDGE</a></li>
                            <li><a href="tutorial.html">TUTORIALS</a></li>
                            <li><a href="about.html">ABOUT US</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class=" slide3">
					<img src="../images/silde3.jpg" alt="" class="img-responsive">
				</div>
			</div>

			<div class="jm">
				<div class="col-md-6 col-md-6 col-xs-12">
					 <form method="POST" action="/sell_post_inserts"  enctype="multipart/form-data">
          @csrf
				  		<p class="sell">New Sell Post</p>
				  		<br>

						<div class="row">
							<div class="col-sm-2 col-md-2 col-xs-2">
							</div>
							<div class="col-sm-8 col-md-8 col-xs-8">
								<center>
									<div class="image-upload">
										<label for="file-input">
										    <img src="../images/photo (1).png" style="pointer-events: none"/>
										</label>
										<input id="file-input" type="file" name="user_image"/>
									</div>
								</center>
							</div>
							<div class="col-sm-2 col-md-2 col-xs-2">
							</div>
						</div>


						<div class="form-group">
				      		<label for="pname" class="pn">Product Name*</label>
				      		<input type="text" class="form-control" id="pname" placeholder="" name="product_name">
				    	</div>


				  		<div class="form-group">
				  			<label for="punit"><b>Price per unit*</b></label>
						    <input type="text" class="form-control" id="punit" placeholder="" name="price">
				    	</div>


						<div class="form-group">
				  			<div class="row">
			    				<div class="col-sm-6">
				      				<label for="qua">Quantity*</label>
				      				<input type="text" class="form-control" id="qua" placeholder="" name="quantity">
				    			</div>
				     			<div class="col-sm-6">
				 					<label for="sel1">Catagory*</label>
				 					<select class="browser-default custom-select form-control" name="type">
				  						{{-- <option selected>Please Select one</option> --}}
				  						<option value="1">ကုန်ကြမ်းအမျိုးစားများ</option>
				  						<option value="2">ကုန်ချောအမျိုးစားများ</option>
				 					</select>
				 				</div>
						   </div>
				    	</div>


				  		<div class="form-group">
				  			<label for="pdetail">Product Details*</label>
				  			<textarea rows="4" cols="57" name="description" class="form-control " id="one"></textarea>
						</div>


				  		<div class="checkbox">
				      		<label>
				      			<input type="checkbox"  name="remember" >Only products that made from reuseable material
				      		</label>
				    	</div>


				  		<div class="row">
				    		{{-- <div class="col-sm-6 col-md-6 col-xs-6">
				      			<button type="submit" class="btn btn-default">CANCEL</button>
				      		</div> --}}

				     		<div class="col-sm-6 col-md-6 col-xs-6">
				      			<button type="submit" class="btn btn-default">CONFIRM</button>
				    		</div>
				    	</div>
					</form>
				</div>
			</div>
		</div>
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

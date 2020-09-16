<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GoGreen</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tt">
                    <img src="../images/Screenshot (59).png" alt="" class="img-responsive">
                </div>
                <div class="m">
                    <img src="../images/buy.png" alt="" class="img-responsive">
                </div>
            </div>
        <div class="login-form">
            <div class="col-md-6">
               <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <h2 class="jb">Login To an Account</h2><br>
                    <div class="form-group">
                        <input type="email" style="font-family:Arial, FontAwesome"  class="form-control" id="email"  placeholder="&#xf003 &nbsp; Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" style="font-family:Arial, FontAwesome" class="form-control" id="pwd"   placeholder="&#xf023 &nbsp; Password" name="password">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-default">Login</button>
                    </center>
                    <p class="jb">Don't have an account? <a href="register" target="_Blank"  class="big" >Sign up</a></p>
                </form>
            </div>
        </div>
    </div>


</body>

<footer>

</footer>
      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/owl.carousel.js"></script>
      <script src="../js/myjs.js"></script>
</html>

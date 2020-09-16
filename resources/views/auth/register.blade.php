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
        <div class="register-form">
            <div class="col-md-6">
               <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <h2 class="jb">Create an Account</h2>
                    <br>

                    <div class="form-group">
                        <input type="username" style="font-family:Arial, FontAwesome" class="form-control" id="username"  placeholder=" &#xf007 &nbsp;  User Name " name="name">
                    </div>

                    <div class="form-group">
                        <input type="email" style="font-family:Arial, FontAwesome"  class="form-control" id="email"  placeholder="&#xf003 &nbsp; Email" name="email">
                    </div>

                    <div class="form-group">
                        <input type="password" style="font-family:Arial, FontAwesome" class="form-control" id="pwd"   placeholder="&#xf023 &nbsp; Password" name="password">
                    </div>

                    <div class="form-group">
                        <input type="conpassword" style="font-family:Arial, FontAwesome" class="form-control" id="conpwd"   placeholder="&#xf023 &nbsp; Confirm Password" name="password_confirmation">
                    </div>

                    <center>
                        <button type="submit" class="btn btn-default">Create</button>
                    </center>
                    <p class="jb">Already have an account? <a href="" target="_Blank"  class="big" >Sign in</a></p>
                </form>
</body>

      <script src="../js/jquery.min.js"></script>

      <script src="../js/bootstrap.min.js"></script>

       <script src="../js/owl.carousel.js"></script>

       <script src="../js/myjs.js"></script>

</html>

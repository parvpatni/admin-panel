<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Registration</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .select_style {
    background: #FFF;
    overflow: hidden;
    display: inline-block;
    color: #525252;
    font-weight: 300;
    -webkit-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
    -moz-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
    border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
    -webkit-box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
    -moz-box-shadow: 0 0 5px rgba(123,123,123,.2);
    box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
    border: solid 1px #DADADA;
    font-family: "helvetica neue",arial;
    position: relative;
    cursor: pointer;
    padding-right:20px;
    background-color: #eaeaec;
}
.select_style span {
    position: absolute;
    right: 10px;
    width: 8px;
    height: 8px;
    background: url(http://projects.authenticstyle.co.uk/niceselect/arrow.png) no-repeat;
    top: 50%;
    margin-top: -4px;
}
.select_style select {
    -webkit-appearance: none;
    appearance:none;
    width:120%;
    background:none;
    background:transparent;
    border:none;
    outline:none;
    cursor:pointer;
    padding:7px 10px;
}
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
   
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="js/jquery.validate.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>


  <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script type='text/javascript' src='ajax.js'></script>
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="#" method="get" name="register">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Registration</h1>
            <img src="images/login-logo.png" alt=""/>
        </div>


        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" autofocus="" placeholder="Full Name" id="name" name="name" class="form-control">
            <input type="text" autofocus="" placeholder="Address" id="address" name="adress" class="form-control">
            <!-- <input type="text" autofocus="" placeholder="City/Town" class="form-control"> -->
            <div class="radios">
                <label for="gender" class="label_radio col-lg-6 col-sm-6">
                    <input type="radio" checked="" value="1" id="gender" name="gender"> Male
                </label>
                <label for="gender" class="label_radio col-lg-6 col-sm-6">
                    <input type="radio" value="0" id="gender" name="gender"> Female
                </label>
            </div>


            <div class='select_style'> 
            <?php
            include('dbConfig.php');
            //Get all country data
            $query = $db->query("SELECT * FROM countries");
            //Count total number of rows
            $rowCount = $query->num_rows;
            ?>
            <select name="country" id="country">
                <option value="">Select Country</option>
                <?php
                if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                        echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
                    }
                }else{
                    echo '<option value="">Country not available</option>';
                }
            ?>
            </select>
            <select name="state" id="state">
                <option value="">Select country first</option>
            </select>

            <select name="city" id="city">
                <option value="">Select state first</option>
            </select>
            </div>



            <p> Enter your account details below</p>
            <input type="text" autofocus="" placeholder="Email" id="email" name="email" class="form-control">
            <input type="password" placeholder="Password" id="password" name="password" class="form-control">
            <input type="password" placeholder="Re-type Password" id="repassword" name="repassword" class="form-control">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition" name="terms" id="terms"> I agree to the Terms of Service and Privacy Policy
            </label>
            <button type="submit" class="btn btn-lg btn-login btn-block">
                <i class="fa fa-check"></i>
            </button>
            <div class="error-messages" style="text-align: center;"></div>
            <div class="registration">
                Already Registered.
                <a href="userlogin.php" class="">
                    Login
                </a>
            </div>

        </div>

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<script src="register1.js"></script>
<!-- <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script> -->

</body>
</html>

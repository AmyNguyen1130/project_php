<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}
form.search input[type = text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.search button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #e6ad33;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.search button:hover {
  background: #eab745;
}

form.search::after {
  content: "";
  clear: both;
}

.headback{
    background : #ab5618;
}

.text{
    color:white;
    font-size: 16px;
}

</style>
</head>
<body>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 headback">
            <nav class="navbar navbar-default headback" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header text">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="../Image/logo.png" alt="kính Mắt Chính Hảng" width = "25%" heigth = "8%"></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse text" >
                    <form class="search" action = "/action_page.php" style= "margin: auto; margin-bottom:5%; max-width:35%;">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </form>
                    <ul class="nav navbar-nav navbar-left text">
                        <li><a href="#" class="glyphicon glyphicon-earphone " style= "margin-left:15px ;padding :0px;">01638156586</a></li>
                        <li><a href="#" class="glyphicon glyphicon-shopping-cart" style= "margin-left:15px ;padding :0px;"></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            
        </div>
        <!-- header -->
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
        
        </div>
        
    </div>

    
</body>
</html>
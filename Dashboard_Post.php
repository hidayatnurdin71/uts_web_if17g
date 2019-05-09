<?php
    require_once("config.php");
    if(isset($_POST['simpan'])){
    	$Judul = trim($_POST['Judul']);
    	$Isi = trim($_POST['Isi']);

    	$sql = mysql_query("INSERT INTO tbl_post(Judul,Isi) VALUES ('$Judul','$Isi')", $koneksi);

    		if(mysql_num_rows($sql) != 0) {
                header("location: dashboard_post.php");
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beautiful Bootstrap Navbar with Menu Icons</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background: #eeeeee;
		font-family: 'Varela Round', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		color: #fff;
		background: #20b2aa;
		padding: 5px 16px;
		border-radius: 0;
		border: none;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.navbar img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #efe5ff;
		padding-left: 0;
		padding-right: 50px;
		font-size: 24px;		
	}
	.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
		color: #fff;
	}
	.navbar .navbar-brand i {
		font-size: 25px;
		margin-right: 5px;
	}
	.search-box {
        position: relative;
    }	
    .search-box input {
        padding-right: 35px;
		min-height: 38px;
		border: none;
		background: #faf7fd;
        border-radius: 3px !important;
    }
	.search-box input:focus {		
		background: #fff;
		box-shadow: none;
	}
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 10px 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .nav-item span {
		position: relative;
		top: 3px;
	}
	.navbar .nav > li a {
		color: #efe5ff;
		padding: 8px 15px;
		font-size: 14px;		
	}
	.navbar .nav > li a:hover, .navbar .nav > li a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.3);
	}
	.navbar .nav > li > a > i {
		display: block;
		text-align: center;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
    .navbar .dropdown-item .material-icons {
        font-size: 21px;
        line-height: 16px;
        vertical-align: middle;
        margin-top: -2px;
    }
	.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
		color: #fff;
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777 !important;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus {
		color: #333 !important;
		background: transparent !important;
	}
	.navbar .nav .active a, .navbar .nav .active a:hover, .navbar .nav .active a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.2);
		background: transparent !important;
	}
	.navbar .nav .user-action {
		padding: 9px 15px;
	}
	.navbar .navbar-toggle {
		border-color: #fff;
	}
	.navbar .navbar-toggle .icon-bar {
		background: #fff;
	}
	.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
		background: transparent;
	}
	.navbar .navbar-nav .open .dropdown-menu {
		background: #faf7fd;
		border-radius: 1px;
		border-color: #faf7fd;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .divider {
		background-color: #e9ecef !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 350px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.navbar .nav > li > a > i {
			display: inline-block;			
			text-align: left;
			min-width: 30px;
			position: relative;
			top: 4px;
		}
		.navbar .navbar-collapse {
			border: none;
			box-shadow: none;
			padding: 0;
		}
		.navbar .navbar-form {
			border: none;			
			display: block;
			margin: 10px 0;
			padding: 0;
		}
		.navbar .navbar-nav {
			margin: 8px 0;
		}
		.navbar .navbar-toggle {
			margin-right: 0;
		}
		.input-group {
			width: 100%;
		}
		.padding{
			background: red;
			height: 200px;
			width: 300px;
			padding: 20px;
		}
	}
</style>
</head>

<body>
 </nav>
<div class="container-fluid"></div> 
<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#"><i class="img "></i>TEST DASHBOARD POST</a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="../index.php" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a></li>
			<li class="nav-item"><a href="../.php" class="nav-link"><span>Input Post</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"> <span>Edit Post</span></a></li>
            <li class="nav-item"><a href="../" class="nav-link"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
			<li class="nav-item dropdown">
				</ul>
			</li>
		</ul>
	</nav>

	<div align="center">
		<h2>Tempat Posting Berbagai Hal</h2>
	</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    	 <p  align = "center">Judul<br>
      		<input type="text" name="judul">  
    	</p>  
    	<p align = "center">Isi Postingan<br>  
    		<textarea name="deskripsi" style="width:450px; height:80px"></textarea>    
    	</p>  
    	<p align="center"<br>   
    <br>  
   			<input type="submit" width="120" height="24" name="simpan" value="POSTING" >  
   		</p>  
</div>
 </form>  

</body>
</html>
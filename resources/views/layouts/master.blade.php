<!doctype html>
<html lang="en">

<head>
	<title>Program Event</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
	<link rel="css" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>

<body>
<style>
	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
 
	.jam-digital {
		overflow: hidden;
		width: 330px;
		margin: 20px auto;
		border: 5px solid #efefef;
		float: center;
	}
	.kotak{
	
		text-align: center;
		margin-top: 50px;
 		margin-bottom: 50px;
		
		margin-left: 400px;
		width: 200px;
		height: 200px;
		border-radius: 100%;
	}
	.center{
		text-align: center;
		margin-bottom: 100px;

	}
	.label {
  color: white;
  padding: 8px;
  font-family: Arial;
}
.bulat {
	width: 200px;
	height: 200px;
	background: #dac52c;
	border-radius: 100%;
	text-align: center;	
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  padding: 5px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  font-size: 20px;
  
}
body{
    background-color: #f5f5f5;
    font-family: 'Roboto Condensed', sans-serif;
}
.main-section{
    margin-top:20px;
}
.add-sens{
    position: absolute;
    top:0px;
    right:50px;
}
.img-section{
    overflow: hidden;
}
.img-section img{
    overflow: hidden;
    width:100%;
}
.img-section img:hover{
    opacity:0.6;
    transition: 0.5s;
    cursor: pointer;
}
.sectin-title h1{
    font-weight:700;
    font-size:23px;
    color:#285A63;
}
.section-detail p{
    color:#756d6d;
    letter-spacing: 1px;
}
.fa-star,.fa-star-half-alt{
    color:#FEC00B;
}
.fa-star-half-alt{
    margin-right: 10px;
}
.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */ 
.other {background-color: #e7e7e7; color: black;} /* Gray */ 
	
</style>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <div class="panel">
                        <div class="panel-body">
                    @yield('content')
                        </div>
                    </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2022 <a href="https://www.themeineed.com" target="_blank">Sandi</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>

</html>

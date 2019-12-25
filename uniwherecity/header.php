<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Uniwherecity</title>
	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


	<!-- CheckBox Plugin -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

	<!-- Fancy Time-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,900&display=swap" rel="stylesheet">

	<!-- Main Reset Css-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"/>

	<link rel="icon" href="images/logo.png" type="image/x-icon" />
</head>
<body>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav>
						<a class="logo" href="">
							<img src="images/logo.png">
							Uni<br>
							Where<br>
							City
						</a>
						<ul>
							<li><a href="#">Anasayfa</a></li>
							<li><a href="#">Üniversite</a></li>
							<li><a href="#">Şehir</a></li>
							<li><a href="#">Favoriler</a></li>
							<li><a href="#">Üye Ol / Giriş Yap</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<div id="indexlistArea">
		<div v-if="isLoading">Yükleniyor</div>
		<div v-if="!isLoading">Yüklendi</div>
		<h1>{{ message }}</h1>

		<div v-if="isLoggedIn">{{ mesaj }}  {{ user }}</div>
		<div v-if="!isLoggedIn">Another</div>
	</div>

	<script>
		var indexList = new Vue({
			el: '#indexlistArea',	
			data: {
				isLoading: true,
				message: 'Vue Started',
				isLoggedIn : true,
				mesaj: "Vue'ye hoş geldin",
				user: "canmurat"
			},
			created(){
				console.log('/////');
				fetch('.data/json')
				.then((res) => {return res.json() })
				.then((res) => {console.log(res) })
			}
		})

	</script>
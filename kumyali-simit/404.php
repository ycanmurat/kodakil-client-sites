<?include("header.php");?>
<div class="pagenotfound">
	<a href="index.php">Anasayfa</a>
</div>
<style>
	div.pagenotfound {
		position: relative;
		height: 750px;
		background-image: url('images/404.jpg');
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		margin-bottom: -40px;
	}

	div.pagenotfound:before {
		content: '404 Sayfa Bulunamadı';
		color: white;
		position: absolute;
		right: 0;
		left: 0;
		bottom: 0;
		top: 0;
		background-color: #072b3ab0;
		z-index: 1;
		text-align: center;
		font-size: 4rem;
		padding-top: 55px;
		font-family: 'Libre Baskerville';
		font-weight: bolder;
		padding-top: 18%;
	}

	div.pagenotfound a {
		z-index: 2;
		position: absolute;
		right: 0;
		left: 0;
		text-align: center;
		top: 200px;
		border: 2px solid white;
		display: inline-block;
		width: 150px;
		margin: 0 auto;
		padding: 15px 20px;
		color: white;
		font-weight: 600;
		border-radius: 5px;
		transition: all ease .6s;
	}

	div.pagenotfound a:hover {
		background-color: white;
		color: #072b3a;
		transition: all ease .5s;
		margin-bottom: 2px;
		top: 190px;
	}
</style>
<?include("footer.php");?>


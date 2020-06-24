<!DOCTYPE html>
<html>
<head lang="ru">
	<title>PremierLeague</title>
	<link rel="stylesheet" type="text/css" href="styles/home_style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
</head>
<body style="zoom: 67%">
	<div id="topheader">
        <div id="pagename"><strong><a href="/">PREMIER LEAGUE</a></strong><br>
            <span class='top_links'><a href="/gallery">ГАЛЕРЕЯ&emsp;</a></span>
            <span class='top_links'><a href="/video">Видео&emsp;</a></span>
            <span class='top_links'><a href="/stats">Статистика</a></span>
        </div>
	</div>

	<div style="height: 110px; background-color: rgba(0,0,0,0);"></div>
	<div id="bottomheader">
		<a href="https://www.manutd.com/" target="_blank"><img class="logo_clubs" src="img/logos/mu.png"></a>
		<a href="https://www.tottenhamhotspur.com/" target="_blank"><img class="logo_clubs" src="img/logos/tottenham.png"></a>
		<a href="https://www.arsenal.com/" target="_blank"><img class="logo_clubs" src="img/logos/arsenal.png"></a>
		<a href="https://www.mancity.com/" target="_blank"><img class="logo_clubs" src="img/logos/mc.png"></a>
		<a href="https://www.liverpoolfc.com/" target="_blank"><img class="logo_clubs" src="img/logos/liverpool.png"></a>
		<a href="https://www.chelseafc.com/" target="_blank"><img class="logo_clubs" src="img/logos/chelsea.png"></a>
		<a href="https://www.chelseafc.com/" target="_blank"><img class="logo_clubs" src="img/logos/Wolverhampton.png"></a>
		<a href="https://www.evertonfc.com/" target="_blank"><img class="logo_clubs" src="img/logos/everton.png"></a>
		<a href="https://www.lcfc.com/" target="_blank"><img class="logo_clubs" src="img/logos/leister.png"></a>
		<a href="https://www.avfc.co.uk/" target="_blank"><img class="logo_clubs" src="img/logos/aston villa.png"></a>
        <a href="https://www.whufc.com/" target="_blank"><img class="logo_clubs" src="img/logos/west ham.png"></a>
		<a href="https://www.watfordfc.com/" target="_blank"><img class="logo_clubs" src="img/logos/watford.png"></a>
		<a href="https://www.afcb.co.uk/" target="_blank"><img class="logo_clubs" src="img/logos/bournemouth.png"></a>
		<a href="https://www.brightonandhovealbion.com/" target="_blank"><img class="logo_clubs" src="img/logos/Brighton.png"></a>
		<a href="https://www.burnleyfootballclub.com/" target="_blank"><img class="logo_clubs" src="img/logos/Burnley.png"></a>
		<a href="https://www.cpfc.co.uk/" target="_blank"><img class="logo_clubs" src="img/logos/Crystal_Palace.png"></a>
		<a href="https://www.nufc.co.uk/" target="_blank"><img class="logo_clubs" src="img/logos/newcastle.png"></a>
		<a href="https://www.canaries.co.uk/" target="_blank"><img class="logo_clubs" src="img/logos/Norwich.png"></a>
		<a href="https://www.sufc.co.uk/" target="_blank"><img class="logo_clubs" src="img/logos/Sheffield.png"></a>
		<a href="https://www.southamptonfc.com/" target="_blank"><img class="logo_clubs" src="img/logos/Southampton.png"></a>
	</div>
    <form method="get"  action="/search">
        <input type="search" name="search_field" placeholder="Поиск по сайту" />
        <input type="submit" value="Найти" />
    </form>
	@yield('content')
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Evenement</title>
<link rel="stylesheet" href="<?=asset_url()?>css/style.css" type="text/css">
<link rel="stylesheet" href="<?=asset_url()?>css/calendar.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>
<div class="contenu">
	<header>
		<nav>
			<ul>
				<li class="menu_carte_li" id="li_gain">
					<a href="<?= site_url('roulette') ?>" title="vos gains"
					   class="a_menu_principal">Accueil</a></li>
				<li class="menu_carte_li" id="li_evenement">
					<a href="<?= site_url('event') ?>" title="Evenements"
					   class="a_menu_principal">Nos
						évènements</a>
				</li>
				<li class="menu_carte_li" id="li_machine">
					<a href="<?= site_url('gambling') ?>"
					   title="machine a sous"
					   class="a_menu_principal">
						Machine à sous
					</a>
				</li>
				<li class="menu_carte_li" id="li_localisation">
					<a href="<?= $logout_url ?>"
					   title="nous trouver"
					   class="a_menu_principal">Déconnexion</a>
				</li>
			</ul>
		</nav>
    	</header>
        
	<div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script src="<?=asset_url()?>js/calendar.js"></script>

</div>
</body>
</html>

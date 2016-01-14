<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="<?= asset_url() ?>css/style.css" type="text/css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css">
    <link rel="stylesheet" href="<?= asset_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= asset_url() ?>css/bootstrap-responsive.css">
    <link rel="stylesheet" href="<?= asset_url() ?>css/demo.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?= asset_url() ?>js/gambling.js"></script>
    <script src="<?= asset_url() ?>js/demo.js"></script>
    <title>machine à perroquet</title>
</head>
<body>
<div class="contenu">
    <header>
        <nav class="menu_principal">
            <ul id="menu_carte">
                <li class="menu_carte_li" id="li_gain"><a href="<?= site_url('profit') ?>" title="vos gains"
                                                          class="a_menu_principal">Vos gains</a></li>
                <li class="menu_carte_li" id="li_evenement"><a href="#" title="Evenements" class="a_menu_principal">Nos
                        évènements</a></li>
                <li class="menu_carte_li" id="li_machine"><a href="<?= site_url('gambling') ?>" title="machine a sous"
                                                             class="a_menu_principal">Machine à sous</a></li>
                <li class="menu_carte_li" id="li_localisation"><a href="<?= site_url('localisation') ?>"
                                                                  title="nous trouver"
                                                                  class="a_menu_principal">Nous trouver</a></li>
            </ul>
        </nav>
    </header>
    <section class="test-perroc">
        <p class="demo_label">Paramètre de la machine à Perroquet </p>
        <div class="speed_value param_label">
            <span class="param_name">vitesse :</span> <span class="speed_param"></span>
        </div>
        <div id="speed"></div>

        <div class="duration_value param_label">
            <span class="param_name">durée :</span> <span class="duration_param"></span> sec
        </div>
        <div id="duration"></div>
    </section>
    <div class="row">
        <div class="span4">
            <div class="roulette_container">
                <div class="roulette" style="display:none;">
                    <img src="<?= asset_url() ?>img/perroquet-dame.png"/>
                    <img src="<?= asset_url() ?>img/perroquet-localisation.png"/>
                    <img src="<?= asset_url() ?>img/perroquet-roi.png"/>
                    <img src="<?= asset_url() ?>img/perroquet-valet.png"/>
                    <img src="<?= asset_url() ?>img/perroquet-viking.png"/>
                    <img src="<?= asset_url() ?>img/perroquet-intelo.png"/>
                    <img src="<?= asset_url() ?>img/perroquet-blingbling.png">
                    <img src="<?= asset_url() ?>img/marin.png"/>
                </div>
            </div>

            <div class="btn_container">
                <p>
                    <button class="btn btn-large btn-primary start submit"> C'EST PARTI</button>
                    <button class="stop btn-large btn btn-warning submit"> STOP</button>
                </p>
            </div>

        </div>
    </div>

    <div class="right_container">


        <div class="stop_image_number_value param_label">
            <p class="demo_label">Valeur des Pérroquets </p>
        </div>
						<span class="img-perroquets">
							<img class="img-perroquets" data-value="-1"
                                 src="<?= asset_url() ?>img/perroquet-localisation.png"/>10 points
							<img class="img-perroquets" data-value="-1" src="<?= asset_url() ?>img/perroquet-roi.png"/>20 points
							<img class="img-perroquets" data-value="-1" src="<?= asset_url() ?>img/perroquet-valet.png"
                                 title="random"/>30 points
                         <img class="img-perroquets" data-value="-1" src="<?= asset_url() ?>img/perroquet-dame.png"/>40 points
							<img class="img-perroquets" data-value="-1"
                                 src="<?= asset_url() ?>img/perroquet-localisation.png"/>50 points
							<img class="img-perroquets" data-value="-1"
                                 src="<?= asset_url() ?>img/perroquet-viking.png"/>60 points
							<img class="img-perroquets" data-value="-1"
                                 src="<?= asset_url() ?>img/perroquet-intelo.png"/>70 points
							<img class="img-perroquets" data-value="-1"
                                 src="<?= asset_url() ?>img/perroquet-blingbling.png">80 points
							<img class="img-perroquets" data-value="-1" src="<?= asset_url() ?>img/marin.png"
                                 title="random"/>90 points
						</span>
    </div>
    <div class="right_container code_container">

    </div>
</div>
</div>
</div>

</body>
</html>
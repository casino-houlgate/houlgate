<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Localisation</title>
    <link rel="stylesheet" href="<?= asset_url() ?>css/style.css" type="text/css">
</head>

<body>
<div class="contenu">
    <header>
        <nav class="menu_principal">
            <ul id="menu_carte">
                <li class="menu_carte_li" id="li_gain"><a href="<?= site_url('profit') ?>" title="vos gains"
                                                          class="a_menu_principal">Vos gains</a></li>
                <li class="menu_carte_li" id="li_evenement"><a href="<?= site_url('event') ?>" title="Evenements"
                                                               class="a_menu_principal">Nos évènements</a></li>
                <li class="menu_carte_li" id="li_machine"><a href="<?= site_url('gambling') ?>" title="machine a sous"
                                                             class="a_menu_principal">Machine à sous</a></li>
                <li class="menu_carte_li" id="li_localisation"><a href="<?= site_url('localisation') ?>"
                                                                  title="nous trouver" class="a_menu_principal">Nous
                        trouver</a></li>
            </ul>
        </nav>
    </header>
    <div id="emplacement_principal">

        <div id="menu_secondaire">
            <ul id="sous_menu">
                <li class="menu_secondaire_li"><a href="http://www.casino-houlgate.fr/casino/presentation.php"
                                                  target="_blank" title="casino">casino</a></li>
                <li class="menu_secondaire_li"><a href="http://www.casino-houlgate.fr/restaurant/menu.php"
                                                  target="_blank" title="restaurant">restaurant</a></li>
                <li class="sous_menu_partage_li"><a href="#" title="">Réservez</a></li>
                <li class="sous_menu_partage_li"><a href="#" title="">jouez</a></li>
                <li class="sous_menu_partage_li"><a href="#" title="">Partagez</a></li>
                <li class="sous_menu_partage_li"><a href="#" title="">Mes Amis</a></li>
            </ul>
        </div>

        <div id="contenu_page">
            <div id="text_contenu_page">
                <br/>
                <img src="<?=asset_url()?>img/img_localisation.jpg" height="150" width="400" alt="localisation casino"/>
                <p>
                    Le casino d'Hougate fait partie de la grande chaîne d'hôtel Vivkings. <br/>Situé prèt de la plage,
                    vous pouvez vous détendre et <br/>ensuite vous amusez autour des tables de notre casino.
                </p>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5203.074232946721!2d-0.07283559004057466!3d49.304111055299956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a7e97dcf690d7%3A0x152864ebb379551f!2sCasino+de+Houlgate!5e0!3m2!1sfr!2sfr!4v1431789815030"
                width="435" height="250" frameborder="0" style="border:0; margin-top:10px;"></iframe>
        </div>

    </div>

</div>
</body>
</html>

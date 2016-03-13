<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Localisation Casino</title>
    <link rel="stylesheet" href="<?= asset_url() ?>css/style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="contenu">
    <header>
        <nav class="menu_principal">
            <ul id="menu_carte">
                <li class="menu_carte_li" id="li_gain">
                    <a href="<?= site_url('roulette') ?>" title="vos gains"
                       class="a_menu_principal">
                        Accueil
                    </a>
                </li>
                <li class="menu_carte_li" id="li_evenement">
                    <a href="<?= site_url('event') ?>"
                       title="Evenements"
                       class="a_menu_principal">
                        Nos évènements
                    </a>
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
                       class="a_menu_principal">
                        Déconnexion
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="profil_principal">

        <div id="profil-niveau">
            <img src="<?= asset_url() ?>img/img-profil-parametre-perroquet-marin.jpg" alt="img profil parametre"
                 height="125"
                 width="140" id="img_profil" title="img profil parametre">
        </div>

        <div id="parametre-profil">
            <p>
                <strong>Pseudo : </strong> Joueur 1 <br/><br/>
                <strong>Niveau atteint : </strong> 6 - Perroquet Marin <br/><br/>
                <strong>Prochain cadeau : </strong> Ticket à gratter
            </p>
        </div>
    </div>

    <div id="cadeau-profil">
        <div id="liste-cadeau">
            <ul id="liste_cadeau_ul">
                <li class="cadeau_li"><img class="img_cadeau" src="<?= asset_url() ?>img//img_cadeau_gains.jpg"
                                           height="48" width="200"
                                           alt="cadeau gains" title="cadeau gains"/><span
                        class="text_cadeau">120 Points</span><a class="obtenir_cadeau" href="#" title="cadeaux casino">Obetenir</a>
                </li>
                <br/><br/><br/><br/>
                <li class="cadeau_li"><img class="img_cadeau" src="<?= asset_url() ?>img//img_cadeau_gains.jpg"
                                           height="48" width="200"
                                           alt="cadeau gains" title="cadeau gains"/><span
                        class="text_cadeau">120 Points</span><a class="obtenir_cadeau" href="#" title="cadeaux casino">Obetenir</a>
                </li>
                <br/><br/><br/><br/>
                <li class="cadeau_li"><img class="img_cadeau" src="<?= asset_url() ?>img//img_cadeau_gains.jpg"
                                           height="48" width="200"
                                           alt="cadeau gains" title="cadeau gains"/><span
                        class="text_cadeau">120 Points</span><a class="obtenir_cadeau" href="#" title="cadeaux casino">Obetenir</a>
                </li>
                <br/><br/><br/><br/>
                <li class="cadeau_li"><img class="img_cadeau" src="<?= asset_url() ?>img//img_cadeau_gains.jpg"
                                           height="48" width="200"
                                           alt="cadeau gains" title="cadeau gains"/><span
                        class="text_cadeau">120 Points</span><a class="obtenir_cadeau" href="#" title="cadeaux casino">Obetenir</a>
                </li>
                <br/><br/><br/><br/>
                <li class="cadeau_li"><img class="img_cadeau" src="<?= asset_url() ?>img//img_cadeau_gains.jpg"
                                           height="48" width="200"
                                           alt="cadeau gains" title="cadeau gains"/><span
                        class="text_cadeau">120 Points</span><a class="obtenir_cadeau" href="#" title="cadeaux casino">Obetenir</a>
                </li>
                <br/><br/><br/><br/>
                <li class="cadeau_li"><img class="img_cadeau" src="<?= asset_url() ?>img//img_cadeau_gains.jpg"
                                           height="48" width="200"
                                           alt="cadeau gains" title="cadeau gains"/><span
                        class="text_cadeau">120 Points</span><a class="obtenir_cadeau" href="#" title="cadeaux casino">Obetenir</a>
                </li>
            </ul>
        </div>
        <div id="menu_secondaire_gains">

            <ul id="sous_menu">
                <li class="menu_secondaire_li"><a href="localisation.php" title="localisez">localisez</a></li>
                <li class="menu_secondaire_li"><a href="http://www.casino-houlgate.fr/casino/presentation.php"
                                                  target="_blank" title="casino">casino</a></li>
                <li class="menu_secondaire_li"><a href="http://www.casino-houlgate.fr/restaurant/menu.php"
                                                  target="_blank" title="restaurant">restaurant</a></li>
                <li class="menu_secondaire_li"><a href="<?= site_url('roulette') ?>" title="Retour">Retour</a></li>
            </ul>
        </div>
    </div>


</div>
</body>
</html>
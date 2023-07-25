<?php
$var = "<span class='line-1'></span>
                    <span class='line-2'></span>
                    <span class='line-3'></span>
                    <span class='line-4'></span>"

?>


<div class="menu_background_plus" id="force">
    <div class="logo container">
        <img src="files/assets/images/SC_1903_Weimar.png" alt="" itemprop="image" width="250" height="250">
    </div>

    <div class="menu-close">
        <!--    <img src="files/assets/layout/x.png" data-mobile-menu="close" href="#">-->
            <img onclick="nonactive()" class="cross" data-mobile-menu="close" src="files/assets/images/cross.svg" alt="X" itemprop="image" width="" height="">

    </div>
    <div class="menu_bg blur">
        <img src="files/assets/images/Fußball Silhouette_3.svg" alt="" itemprop="image" width="250" height="250">
    </div>
    <div class="menu_bg">
        <img src="files/assets/images/Fußballfeld.svg" alt="" itemprop="image" width="250" height="250">
    </div>

    <div class="nav_punkte">
        </li>
        <ul>
            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::1}}">
                    <b>Startseite</b>
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::1}}#aktuelles">
                    &nbsp; Aktuelles
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::1}}#mannschaft">
                    &nbsp; Mannschaften
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::1}}#kontakt">
                    &nbsp; Kontakt
                    <?= $var; ?>
                </a>
            </li>

            <li>
                <p>&nbsp; </p>
            </li>
            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::27}}">
                    <b>Darts</b>
                    <?= $var; ?>
                </a>
            </li>
            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::32}}">
                    <b>Infektionsschutz</b>
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href={{link_url::29}}>
                    <b>Mein Verein</b>
                    <?= $var; ?>
                </a>
            </li>
            

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::29}}#vor">
                    &nbsp; Vorstand
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::29}}#mit">
                    &nbsp; Mitglied werden
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::29}}#sat">
                    &nbsp; Satzung
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::29}}#schi">
                    &nbsp; Unsere Schiedsrichter
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::29}}#gesch">
                    &nbsp; Geschichte
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="{{link_url::29}}#spo">
                    &nbsp; Sponsoren
                    <?= $var; ?>
                </a>
            </li>

            <li class="nav_punkte_einzeln btn-cont">
                <a  class="btn" href="https://sc1903weimar.wosz-fan-shop.de/">
                    <b>Fanshop</b>
                    <?= $var; ?>
                </a>
            </li>
        </ul>

        <div class="logo-mobile-nav bottom">
        </div>

    </div>
</div>

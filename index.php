<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Pierre LAURENT • Mon CV</title>
        <link rel="stylesheet" type="text/css" href="cv.css"/>
        <link rel="stylesheet" type="text/css" href="animate.min.css"/>
        <link id="icon" rel="icon" href="faviconB.ico" />
        
    </head>

    <body>
        <div class="animate__animated animate__slideInDown fond_bleu"> 
            <div  id="particles-js"></div>
            <header id="titre_header">
                Mes dév! Web en SNIR
            </header>
                <nav>
                    <ul id="UneLigneUl">
                        <?php
                            if(isset($_GET['profil'])){
                                echo '<li class="gride_li"><a id="nav_cv" class="def6" href="index.php">Mon CV</a></li>';
                            }
                            else {
                                echo '<li class="gride_li"><a id="nav_cv" class="def6">Mon CV</a></li>';
                            }
                        ?>
                            <li class="gride_li"><a href="https://lieutenant-amd.ovh/r%C3%A9alisations.html" target="_blank" class="def6">Mon site web</a></li>
                            <li class="gride_li"><a href="https://github.com/PierreLAURENT94" target="_blank" class="def6">Mon GitHub</a></li>
                            <?php
                                foreach($_COOKIE as $nom => $contenu){
                                    $$nom = $contenu;
                                }
                                if(isset($pseudo)){
                                        echo '<li class="gride_li"><a id="nav_inscription" class="def6" href="rest.php?profil">Profil</a></li><li class="gride_li"><a id="nav_connexion" class="def6" href="rest.php?deconnexion">Déconnexion</a></li>';
                                }
                                else{
                                    echo '<li class="gride_li"><a id="nav_inscription" class="def6">Inscription</a></li><li class="gride_li"><a id="nav_connexion" class="def6">Connexion</a></li>';
                                }
                            ?>
                            <li class="gride_li"><a id="nav_mini-jeu" class="def6">Mini jeu</a></li>
                    </ul>
                </nav>
        </div>
        <aside class="animate__animated animate__slideInRight">
            <h3>Début du stage dans:</h3>
            <div id="stage_jours" class="stage">264J</div>
            <div id="stage_heures" class="stage">1H</div>
            <div id="stage_minutes" class="stage">41M</div>
            <div id="stage_secondes" class="stage">38S</div>
            <h3>Mes liens:</h3>
            <ul>
                <li><a href="https://www.w3schools.com/" target="_blank">w3schools</a></li>
                <li><a href="https://www.b4x.com/android/forum/" target="_blank">B4X</a></li>
            </ul>
        </aside>
        <section class="animate__animated animate__zoomIn">
        <?php
            if(isset($_GET['profil'])){
                echo '
                <form action="rest.php" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom_utilisateur" value="' . $_COOKIE["nom"] . '" required/>
                    <br/>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom_utilisateur" value="' . $_COOKIE["prenom"] . '" required/>
                    <br/>
                    <label for="mail">Addresse mail :</label>
                    <input type="email" id="mail" name="mail_utilisateur" value="' . $_COOKIE["email"] . '" required/>
                    <br/>
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" id="pseudo" name="pseudo_utilisateur" value="' . $_COOKIE["pseudo"] . '" required/>
                    <br/><br/>
                    <input type="submit" value="Mettre à jour" name="miseajour"/>
                </form>';
            }
            else{
        ?>
            <div id="mon_cv">
                <div id="p1">
                    <div class="infos">
                        <span class="anim">
                            <div id="lecteur_video">
                                <video width="100%" poster="photo.png" class="animate__animated animate__flipInY animate__delay-1s" id="photo">
                                    <source src="cv_video_fr.mp4" type="video/mp4" id="videosrc"/>
                                    De grâce, quel "navigateur" utilisiez-vous pour qu'il ne soit pas capable de gérer la vidéo !?
                                </video>
                                <img src="play.png" class="input_control" id="playpause"/>
                                <img src="stop.png" class="input_control" id="stop"/>
                                <img src="fr.png" class="input_control" id="fr"/>
                                <img src="en.png" class="input_control" id="en"/>
                            </div>
                        </span>
                        <h2>
                        Pierre LAURENT
                        </h2>
                            <!--
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 24 24" width="32" id="adresse_ico" class="animate__animated animate__rubberBand animate__delay-1s"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 24 24" width="32" class="animate__animated animate__rubberBand animate__delay-1s"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 15.46l-5.27-.61-2.52 2.52c-2.83-1.44-5.15-3.75-6.59-6.59l2.53-2.53L8.54 3H3.03C2.45 13.18 10.82 21.55 21 20.97v-5.51z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 24 24" width="32" id="mail_ico" class="animate__animated animate__rubberBand animate__delay-1s"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
                            <br />
                            <span id="adresse">117 Prom. Hermann Régnier(93460)</span>
                            07 77 83 56 58
                            <span id="mail">pierre.laurent@lieutenant-amd.ovh</span>
                        </p>
                        -->
                        <div class="principal-respon">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 24 24" width="32" class="animate__animated animate__rubberBand animate__delay-1s"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                <br />
                                <a href="https://www.google.com/maps/place/117+Prom.+Hermann+R%C3%A9gnier,+93460+Gournay-sur-Marne/@48.8592551,2.5649397,17z/data=!3m1!4b1!4m5!3m4!1s0x47e611e7ab593085:0x833c70fe81b46c74!8m2!3d48.8592551!4d2.5671284" target="_bank" class="a_add">117 Prom. Hermann Régnier(93460)</a>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 24 24" width="32" class="animate__animated animate__rubberBand animate__delay-1s"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 15.46l-5.27-.61-2.52 2.52c-2.83-1.44-5.15-3.75-6.59-6.59l2.53-2.53L8.54 3H3.03C2.45 13.18 10.82 21.55 21 20.97v-5.51z"/></svg>
                                <br />
                                <a href="tel:+33777835658" class="a_add">07 77 83 56 58</a>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 24 24" width="32" class="animate__animated animate__rubberBand animate__delay-1s"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
                                <br />
                                <a href="mailto:pierre.laurent@lieutenant-amd.ovh" class="a_add">pierre.laurent@lieutenant-amd.ovh</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div id="p2">
                <p id="Stage">
                    Je <b>recherche</b> actuellement <b>un stage</b> non rémunéré dans le domaine du <b>développement informatique</b> de <b>6 semaines</b> (du 24/05/2021 au 02/07/2021) dans le cadre de mon <b>BTS SN IR</b>.
                </p>
                </div>
                <hr />
                <div id="p3">
                    <h3>
                        Formations:
                    </h3>
                    <table>
                        <tr>
                            <th>Année</th>
                            <th>Diplôme</th> 
                            <th>Établissement</th>
                        </tr>
                        <tr>
                            <td class="DuréeDate">2020/2022</td>
                            <td>
                                <img src="BTS.png" id="img_bts" class="animate__animated animate__rotateIn animate__delay-1s">
                                <b>BTS</b> SN IR(Systèmes Numériques Option <b>Informatique et Réseaux</b>) • En cours d'obtention
                                <ul>
                                    <li>Programmation WEB(HTML5, CSS3, JS, PHP, SQL...)</li>
                                    <li>Programmation Logiciel(C++, UML, SQL...)</li>
                                    <li>Électronique(Physique appliquée)</li>
                                    <li>Réseaux Informatique(...)</li>
                                </ul>
                            </td>
                            <td class="Lieu_table">
                                <img src="LLA.png" class="img_table" />
                                <br />
                                Lycée Louis ARMAND(94)
                            </td>
                        </tr>
                        <tr>
                            <td class="DuréeDate">2017/2020</td>
                            <td>
                                <b>BAC</b> SN RISC(Systèmes Numériques Option <b>Réseaux Informatiques et Systèmes Communicants</b>) • Mention Très Bien(17,96/20, major de section)
                                <ul>
                                    <li>Réseaux Informatique(Routage, VLAN, NAT/PAT, ACL...)</li>
                                    <li>Électronique(Électronique/Électronique numérique)</li>
                                </ul>
                            </td>
                            <td class="Lieu_table">
                                <img src="LLA.png" class="img_table" />
                                <br />
                                Lycée Louis ARMAND(94)
                            </td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h3>
                    Expériences professionnelles:
                </h3>
                <table>
                    <tr>
                        <th>Durée</th>
                        <th>Mission</th> 
                        <th>Entreprise</th>
                    </tr>
                    <tr>
                        <td class="DuréeDate"><u>CDD 1mois</u> • Aôut 2020</td>
                        <td>
                            Missions similaires à celles du stage et masterisation de 500 portables.
                        </td>
                        <td class="Lieu_table">
                            <img src="DGDDI.png" class="img_table" />
                            <br />
                            Direction Générale des Douanes et Droits Indirects(Montreuil 93558)
                        </td>
                    </tr>
                    <tr>
                        <td class="DuréeDate"><u>Stage de 8 semaines</u> • Novembre 2019 > Janvier 2020</td>
                        <td>
                            <b>Stage de terminale:</b>
                            Maintenance informatique, Programmation(PowerShell, B4J) et masterisation.
                        </td>
                        <td class="Lieu_table">
                            <img src="DGDDI.png" class="img_table" />
                            <br />
                            Direction Générale des Douanes et Droits Indirects(Montreuil 93558)
                        </td>
                    </tr>
                    <tr>
                        <td class="DuréeDate"><u>Stage de 8 semaines & 6semaines</u> • Janvier 2019 > Avril 2020 & Mai 2018 > Juin 2018</td>
                        <td>
                            <b>Stage de première et seconde:</b>
                            Développement logiciel, Maintenance informatique.
                        </td>
                        <td class="Lieu_table">
                            <img src="EFS.png" class="img_table" />
                            <br />
                            Euro Finance Systems(94)
                        </td>
                    </tr>
                </table>
                <hr />
                <div id="p4">
                    <h3>
                        Compétences en développement:
                    </h3>
                    <table>
                        <tr>
                            <th>Language</th>
                            <th>Durée de la formation</th> 
                            <th>Compétences acquises</th>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="HTML-CSS.png" class="img_dev" />
                                <br />
                                <b>HTML5/CSS3</b>
                            </td>
                            <td rowspan="4" class="DuréeDate">
                            <div class="WEB">3<br />M<br />O<br />I<br />S</div>
                            </td>
                            <td>
                                <ul>
                                    <li>Balises, Sélecteurs, Flex Box</li>
                                    <li>Utilisation de librairie(mini.css, animate.css, ...)</li>
                                    <li>...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="JS.png" class="img_dev" />
                                <br />
                                <b>JavaScript</b>
                            </td>
                            <td>
                                <ul>
                                    <li>Vérification de formulaire</li>
                                    <li>Utilisation de librairie(Jquery...)</li>
                                    <li>...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="PHP.png" class="img_dev" />
                                <br />
                                <b>PHP</b>
                            </td>
                            <td>
                                <ul>
                                    <li>Instalation de serveur Web(Apache, MySQL, PHP) sous Linux</li>
                                    <li>...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="MySQL.png" class="img_dev" />
                                <br />
                                <b>SQL</b>
                            </td>
                            <td>
                                <ul>
                                    <li>Commandes SQL</li>
                                    <li>...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="C++.png" class="img_dev" />
                                <br />
                                <b>C++</b>
                            </td>
                            <td class="DuréeDate">
                            3 mois
                            </td>
                            <td>
                                <ul>
                                    <li>Les types de données et les fonctions</li>
                                    <li>Les classes et les objets</li>
                                    <li>Communication réseaux</li>
                                    <li>...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="B4J.png" class="img_dev" />
                                <br />
                                <b>B4J</b>(Basic for Java)
                            </td>
                            <td class="DuréeDate">
                                Formation en autodidacte (~2018 → maintenant)
                            </td>
                            <td>
                                <ul>
                                    <li>Application avec interface graphique utilisateur</li>
                                    <li>Application serveur dont serveur Web(pages dynamiques)</li>
                                    <li>...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <b id="MP">Maîtrise partielle</b>: <b>B4A</b>(Basic for Android), <b>GDScript</b>(Godot Engine), <b>PowerShell</b>, <b>VB.Net</b>...
                            </td>
                        </tr>
                    </table>
                </div>
                <hr />
                <div id="p5">
                    <h3>
                        Compétences transversales:
                    </h3>
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Durée de la formation</th>
                            <th>Compétences acquises</th>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="git.png" class="img_dev" />
                                <br />
                                <b>Git</b>
                            </td>
                            <td class="DuréeDate">
                                Utilisation régulière
                            </td>
                            <td>
                                <ul>
                                    <li>Git Bash</li>
                                    <li>GitHub</li>
                                    <li>...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="CISCO.jpg" class="img_dev" />
                                <br />
                                <b>Équipements réseaux CISCO</b>
                            </td>
                            <td class="DuréeDate">
                            2 ans(Première & Terminale de Bac SN RISC) & 3 semaines(BTS SN IR)
                            </td>
                            <td>
                                <ul>
                                    <li>Adressage IP(dont découpe en sous réseaux)</li>
                                    <li>VLAN</li>
                                    <li>Routage</li>
                                    <li>NAT/PAT</li>
                                    <li>ACL</li>
                                    <li>VOIP</li>
                                    <li>Linux</li>
                                    <li>GNS3</li>
                                    <li>...(Serveur DHCP, Wireshark, sertir RJ45, ...)</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="Inkscape.png" class="img_dev" />
                                <br />
                                <b>Inkscape</b>
                            </td>
                            <td class="DuréeDate">
                                Formation en autodidacte (~2019 → maintenant)
                            </td>
                            <td>
                                <ul>
                                    <li>Dessin vectoriel</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="Language">
                                <img src="FreeCAD.png" class="img_dev" />
                                <br />
                                <b>FreeCAD</b>
                            </td>
                            <td class="DuréeDate">
                                Formation en autodidacte (~2017 → maintenant)
                            </td>
                            <td>
                                <ul>
                                    <li>Modélisation paramétrique d'objet 3D</li>
                                    <li>Paramétrage du slicer(Cura) et impression 3D(CTC A8)</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h3>
                    Langues parlées:
                </h3>
                <ol>
                    <li>Français</li>
                    <li>Anglais(B1)</li>
                </ol>
                <hr />
                <h3>
                    Loisirs:
                </h3>
                <ul id="UneLigneUlLoisir">
                    <li>Informatique</li>
					<li>JV</li>
					<li>Électronique</li>
                    <li>Modélisation & Impression 3D</li>
                </ul>
            </div>
            <div id="inscription">
                <h1>Formulaire d'inscription</h1>
                <form action="rest.php" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom_utilisateur" required/>
                    <br/>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom_utilisateur" required/>
                    <br/>
                    <label for="mail">Addresse mail :</label>
                    <input type="email" id="mail" name="mail_utilisateur" required/>
                    <br/>
                    <label for="dateDeNaissance">Date de naissance :</label>
                    <input type="date" id="dateDeNaissance" name="dateDeNaissance_utilisateur" required/>
                    <br/>
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" id="pseudo" name="pseudo_utilisateur" required/>
                    <br/>
                    <label for="mdp1">Mot de passe (<span id="mdp_longueur" class="rouge">8 caractères</span> avec au moins : <span id="mdp_majuscule" class="rouge">1 majuscule</span>, <span id="mdp_minuscule" class="rouge">1 minuscule</span>, <span id="mdp_chiffre" class="rouge">1 chiffre</span> et <span id="mdp_special" class="rouge">1 caractère spécial</span>.) :</label>
                    <input type="password" id="mdp1" name="mdp1_utilisateur" required/>
                    <br/>
                    <label for="mdp2">Ressaisir le mot de passe :</label>
                    <input type="password" id="mdp2" name="mdp2_utilisateur" required/>
                    <br/><br/>
                    <input type="submit" value="M'inscrire" name="validFormIns"/>
                </form>
            </div>
            <div id="connexion">
                <h1>Formulaire de connextion</h1>
                <form action="rest.php" method="POST">
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" id="pseudo" name="pseudo_utilisateur"/>
                    <br/>
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" id="mdp" name="mdp_utilisateur"/>
                    <br/><br/>
                    <input type="submit" value="Valider" name="validFormConex"/>
                </form>
            </div>
            <div id="mini-jeu">
                <div id="jeu_score">SCORE: 0</div>
                <div id="jeu_record">RECORD DU NAVIGATEUR: 0</div>
                <progress id="tempsbar" max="30" value="30"></progress>
                <div>
                    <div class="jeu_cible" id="1">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                    <div class="jeu_cible" id="2">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                    <div class="jeu_cible" id="3">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="jeu_cible" id="4">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                    <div class="jeu_cible" id="5">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                    <div class="jeu_cible" id="6">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="jeu_cible" id="7">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                    <div class="jeu_cible" id="8">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                    <div class="jeu_cible" id="9">
                        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        id="svg8"
                        version="1.1"
                        viewBox="0 0 128 128"
                        height="64px"
                        width="64px">
                    <defs
                        id="defs2" />
                    <metadata
                        id="metadata5">
                    </metadata>
                    <g
                        id="layer1">
                        <g
                            transform="matrix(2.3001912,0,0,2.2988822,-135.96459,-174.98872)"
                            id="g845">
                        <circle
                            style="fill:var(--couleur1);fill-opacity:1;stroke:var(--cible);stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path833"
                            cx="86.934532"
                            cy="103.94345"
                            r="25.324406" />
                        <circle
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:8.54165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="path835"
                            cx="86.934532"
                            cy="103.94345"
                            r="7.7485118" />
                        <rect
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
                            id="rect837"
                            width="6.4255953"
                            height="48.380955"
                            x="100.73065"
                            y="-111.12501"
                            transform="rotate(90)" />
                        <rect
                            transform="scale(-1)"
                            y="-128.13393"
                            x="-90.147331"
                            height="48.380955"
                            width="6.4255953"
                            id="rect839"
                            style="fill:var(--cible);fill-opacity:1;stroke:none;stroke-width:5.18562;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke" />
                        </g>
                    </g>
                        </svg>
                    </div>
                </div>
            </div>
        <?php 
        } 
        ?>
        </section>
        <footer id="p_footer" class="fond_bleu animate__animated animate__slideInUp">
            <div id="theme_bleu" class="theme_couleur bleu"></div><div id="theme_orange" class="theme_couleur orange"></div><div id="theme_noir" class="theme_couleur noir"></div><img src="jawa.png" id="theme_jawa"/>Pierre LAURENT • Septembre 2020<span id="allerenhaut"><a href="#titre_header">^^^</a></span>
        </footer>
        <audio controls loop id="jawa_audio">
            <source src="jawa.mp3">
        </audio>
        <script src="particles.min.js"></script>
        <script src="mesFonctions.js"></script>
        <script src="video.js"></script>
        <?php
            foreach($_GET as $nom => $contenu){
                $$nom = $contenu;
            }
            if(isset($erreur)){
                if($erreur == "PseudoConnexion"){
                    echo "<script>alert('Mauvais mot de passe et/ou mauvais utilisateur');</script>";
                }
                else if($erreur == "PseudoInscription"){
                    echo "<script>alert('Utilisateur déja utilisé');</script>";
                }
            }
        ?>
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>REST</title>
    </head>
    <body>
        <?php 
            foreach($_POST as $nom => $contenu){
                $$nom = $contenu;
            }
            $mysqli = new mysqli("localhost", "plaurent", "snirlla", "MW04_drone1");
            if(isset($_POST['validFormConex'])){
                $res = $mysqli->query("SELECT pseudo FROM utilisateur WHERE pseudo='$pseudo_utilisateur' AND mdp='$mdp_utilisateur'");
                if($res->num_rows > 0){
                    echo "Bon mdp pour: " . $pseudo_utilisateur;  
                    setcookie("pseudo", $pseudo_utilisateur);
                    header("Location:index.php");
                }
                else{
                    echo "Mauvais mdp pour: " . $pseudo_utilisateur;
                    header("Location:index.php?erreur=PseudoConnexion");
                }
            }
            elseif(isset($_POST['validFormIns'])){
                $res = $mysqli->query("SELECT idutilisateur FROM utilisateur WHERE pseudo='$pseudo_utilisateur'");
                if($res->num_rows == 0){
                    $res = $mysqli->query("INSERT INTO utilisateur (idutilisateur, nom, prenom, email, naissance, pseudo, mdp) VALUES (NULL, '$nom_utilisateur', '$prenom_utilisateur', '$mail_utilisateur', '$dateDeNaissance_utilisateur', '$pseudo_utilisateur', '$mdp1_utilisateur')");
                    //echo "** $mysqli->error **<br/>";
                    echo "Inscription effectuée: " . $pseudo_utilisateur;
                    header("Location:index.php");
                }
                else{
                    echo "Inscription non effectuée: " . $pseudo_utilisateur;
                    header("Location:index.php?erreur=PseudoInscription");
                }
            }
            elseif(isset($_GET['deconnexion'])){
                setcookie("pseudo", "", time()-3600);
                header("Location:index.php");
            }
            elseif(isset($_GET['profil'])){
                $res = $mysqli->query("SELECT nom,prenom,email FROM utilisateur WHERE pseudo='" . $_COOKIE["pseudo"] . "'");
                $rep = $res->fetch_assoc();
                setcookie("nom", $rep["nom"]);
                setcookie("prenom", $rep["prenom"]);
                setcookie("email", $rep["email"]);
                header("Location:index.php?profil");
            }
            else if(isset($miseajour)){
                $res = $mysqli->query("SELECT idutilisateur FROM utilisateur WHERE pseudo='$pseudo_utilisateur'");
                $ancien_pseudo = $_COOKIE["pseudo"];
                if($res->num_rows == 0 || $ancien_pseudo==$pseudo_utilisateur){
                    $res = $mysqli->query("UPDATE utilisateur SET nom='$nom_utilisateur', prenom='$prenom_utilisateur', email='$mail_utilisateur', pseudo='$pseudo_utilisateur' WHERE utilisateur.pseudo='$ancien_pseudo'");
                    echo "UPDATE utilisateur SET nom='$nom_utilisateur', prenom='$prenom_utilisateur', email='$mail_utilisateur', pseudo='$pseudo_utilisateur' WHERE utilisateur.pseudo='$ancien_pseudo'";
                    echo "** $mysqli->error **<br/>";
                    echo "Modification effectuée: " . $pseudo_utilisateur;
                    setcookie("nom", $nom_utilisateur);
                    setcookie("prenom", $prenom_utilisateur);
                    setcookie("email", $mail_utilisateur);
                    setcookie("pseudo", $pseudo_utilisateur);
                    header("Location:index.php");
                }
                else{
                    echo "Modification non effectuée: " . $pseudo_utilisateur;
                    header("Location:index.php?erreur=PseudoInscription");
                }
            }
            $mysqli->close();
        ?>
    </body>
</html>

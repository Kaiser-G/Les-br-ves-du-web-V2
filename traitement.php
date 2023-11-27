<?php
if ($_SERVER["REQUEST_METHODE"]=="POST"){
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["name"]);
    $prenom = htmlspecialchars($_POST["last-name"]);
    $societe = htmlspecialchars($_POST["societe"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $tel = htmlspecialchars($_POST["tel"]);
    $adresse = htmlspecialchars($_POST["ad"]);
    $siteWeb = htmlspecialchars($_POST["site"]);
    $dateContact = htmlspecialchars($_POST["contact"]);
    $message = htmlspecialchars($_POST["message"]);

    // Connexion à la base de données ou autre traitement nécessaire
    $servername = "localhost";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "votre_base_de_donnees";

    $conn = new mysqli($servername, $username, $password, $dbname);
   // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }
    
    // Préparer et exécuter la requête SQL d'insertion
    $sql = "INSERT INTO votre_table (nom, email) VALUES ('$nom', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Données insérées avec succès dans la base de données.";
    } else {
        echo "Erreur lors de l'insertion des données : " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
    
}

 /* Dans cet exemple, vous devrez remplacer les valeurs de $servername, $username, $password, $dbname par les informations 
    de connexion appropriées à votre base de données, 
    et remplacer votre_table par le nom de la table dans 
    laquelle vous souhaitez stocker les données.
    */


?>


Les informations telles que servername, username, password, et dbname sont spécifiques à la configuration de votre base de données MySQL. Ces informations doivent être fournies pour permettre à votre application PHP de se connecter à la base de données. Voici où vous pouvez trouver ces informations :
servername (ou host) : C'est généralement l'adresse du serveur de base de données. Si votre base de données est hébergée sur le même serveur que votre site web, vous pouvez utiliser "localhost". Sinon, vous devrez obtenir cette information de votre hébergeur ou administrateur de base de données.
username : Il s'agit du nom d'utilisateur qui a les droits nécessaires pour se connecter à la base de données. C'est souvent créé lors de la configuration de la base de données. Vous devez obtenir ces informations de votre hébergeur ou administrateur de base de données.
password : Il s'agit du mot de passe associé au nom d'utilisateur. Encore une fois, cela est généralement défini lors de la configuration de la base de données. Assurez-vous de garder ce mot de passe en sécurité.
dbname : C'est le nom de la base de données à laquelle vous souhaitez vous connecter. Vous devez créer cette base de données à l'avance dans votre système de gestion de base de données (comme phpMyAdmin). Obtenez cette information de votre hébergeur ou administrateur de base de données.
Si vous utilisez un service d'hébergement web, ces informations sont généralement fournies dans le panneau de contrôle de votre hébergement. Si vous gérez votre propre serveur, vous pouvez les trouver dans le fichier de configuration de votre serveur de base de données.
Par exemple, si vous utilisez phpMyAdmin pour gérer votre base de données, vous pouvez trouver ces informations dans l'interface phpMyAdmin sous l'onglet "Accueil" ou "Serveur". Si vous utilisez un hébergeur web, consultez leur documentation ou leur support client pour obtenir ces informations.


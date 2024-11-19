<?php
@session_start();
    //Appelle du fichier db.php
    require_once("db.php");


    //Permet de recuperer la liste des faqs dans la bd
    function getAllFaq()
    {
        $requete = "SELECT * FROM faqs WHERE etat = 1";
        try {
            return getConnexion()->query($requete); //exécution de la requette
        } catch (Exception $error) {
            die("Erreur lors de la recuperation de la liste des faqs : " . $error->getMessage());
        }
    }

    //Permet de recuperer la liste des faqs supprimées
    function getCorbeilleFaq()
    {
        $requete = "SELECT * FROM faqs WHERE etat = 0";
        try {
            return getConnexion()->query($requete); //exécution de la requette
        } catch (Exception $error) {
            die("Erreur lors de la recuperation des faqs supprimées : " . $error->getMessage());
        }
    }


    //Permet d'ajouter une faqs dans la BD
    function addFaq($nom, $description)
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=ucab_amical', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $date_Actuelle = date("Y-m-d");
            $id_user_connecte = $_SESSION['id_user'];
            $requete = $pdo->prepare("INSERT INTO faqs (nom, description, etat, created_at, created_by)
            VALUES (:nom, :description, DEFAULT, :created_at, :created_by)");
            $requete->bindParam(':nom', $nom);
            $requete->bindParam(':description', $description);
            $requete->bindParam(':created_at', $date_Actuelle);
            $requete->bindParam(':created_by', $id_user_connecte);
            
            if ($requete->execute()) {
            return 1;
            } else {
            return 0;
            }
            } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de la faq : " . $e->getMessage();
            return 0;
            }
    }
   
    //Permet de modifier une faqs dans la BD
    function editFaq($id_faq, $nom, $description)
    {
        $date_actuelle = date('Y-m-d');
        $id_user_connecte = $_SESSION['id_user'];

        $requete = "UPDATE faqs  SET nom='$nom',
        description='$description', updated_at='$date_actuelle', updated_by= $id_user_connecte WHERE id_faq='$id_faq'" ;
        try {
            return getConnexion()->exec($requete); //exécution de la requette
        } catch (Exception $error) {
            die("Erreur d'ajout de la faqs : " . $error->getMessage());
        }
    }



    //Permet d'activer une faqs dans la BD
    function activerFaq($id_faq)
    {
        $date_actuelle = date('Y-m-d');
        $id_user_connecte = $_SESSION['id_user'];

        $requete = "UPDATE faqs  SET etat= 1, updated_at='$date_actuelle',
        updated_by=$id_user_connecte WHERE id_faq='$id_faq'" ;
        try {
            return getConnexion()->exec($requete); //exécution de la requette
        } catch (Exception $error) {
            die("Erreur d'activation de la faqs : " . $error->getMessage());
        }
    }

    //Permet désactiver une faqs dans la BD
    function desactiverFaq($id_faq)
    {
        $date_actuelle = date('Y-m-d');
        $id_user_connecte = $_SESSION['id_user'];

        $requete = "UPDATE faqs  SET etat=0, updated_at='$date_actuelle',
        updated_by= $id_user_connecte WHERE id_faq='$id_faq'" ;
        try {
            return getConnexion()->exec($requete); //exécution de la requette
        } catch (Exception $error) {
            die("Erreur de suppression de la faqs : " . $error->getMessage());
        }
    }

     //Permet activer une faqs dans la BD
     function getByIdFaq($id_faq)
     {
         $requete = "SELECT * from faqs  WHERE id_faq='$id_faq' LIMIT 1" ;
         try {
             return getConnexion()->query($requete); //exécution de la requette
         } catch (Exception $error) {
             die("Erreur de recuperation de la faqs : " . $error->getMessage());
         }
     }


?>
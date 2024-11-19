<?php 
 require_once("../model/faqDB.php");

// Ajout Faq
if (isset($_POST['frmAddFaq'])) {
    
    // Récupération des informations
    $nom = $_POST["nom"];
    $description = $_POST["description"];
   

    $reponseBD = addFaq($nom, $description);

    if ($reponseBD == 1) {
        header("location:listeFaq");
        exit();
    } else {
        echo"Erreur d'ajout de faq"; die;
        exit();
    }
}

 // edit Faq
 if(isset($_POST["frmEditFaq"])) {
    
    // Récupération des informations
    $nom = $_POST["nom"];
    $description = $_POST["description"];


    $reponseBD = editFaq($_POST['id_faq'],$nom, $description);

    if ($reponseBD == 1) {
        header("Location:listeFaq");
        exit();
    } else {
        echo "Erreur d'ajout de la faq";
        exit();
    }
}


// Suppression Faq
if (isset($_GET["suppressions"])) {
    $reponseBD = desactiverFaq($_GET["id_faq"]);

    if ($reponseBD == 1) {
        header("location:listeFaq");
        exit();
    } else {
        echo "Erreur de suppression de la faq";
        exit();
    }
}

 // Restauration Faq
if (isset($_GET["restaurer"])) {
    $reponseBD = activerFaq($_GET["idfaq"]);

    if ($reponseBD == 1) {
        header("location: corbeilleFaq");
        exit();
    } else {
        echo "Erreur de restauration de Faq";
        exit();
    }
}
    // permet de voire la page de modification de la Faq
   if (isset($_GET["editions"])) {

        header("location:editFaq?id_faq=".$_GET['id_faq']);
        exit();
   }
  

?>
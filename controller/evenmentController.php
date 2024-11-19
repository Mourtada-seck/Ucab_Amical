<?php
require_once("../model/evenmentDB.php");

//Ajout user
if (isset($_POST['frmAddEvenment'])) {
    
    //Recuperation des informations.
    // extract($_POST);
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $nomPhoto = $_FILES['photo']['name'];
    
    
    //Uploading de l'image
    $file_tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name, "../public/images/$nomPhoto");

    $reponseBD = addEvenment($nom, $description, $nomPhoto);

    if ($reponseBD == 1) {
        header("Location:listeEvenment");
    }
    else
    {
        echo "Erreur d'ajout de l'evennement"; die;
    }
    
}
//edit User
if (isset($_POST['frmEditEvenment'])) {
    
    //Recuperation des informations.
    // extract($_POST);
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $nomPhoto = $_FILES['photo']['name'];
    
    //Uploading de l'image
    if ($nomPhoto != "") {
        $file_tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($file_tmp_name, "../public/images/$nomPhoto");
    }
    else
    {
        $nomPhoto = getByIdEvenment($_POST['idEvenment'])->fetch()['photo'];
    }
    $reponseBD = addEvenment($nom, $description, $nomPhoto);

    if ($reponseBD == 1) {
        header("Location:listeEvenment");
    }
    else
    {
        echo "Erreur de modification de l'evennement"; die;
    }
}

//permet de supprimer un utilisateur
if (isset($_GET['suppression'])) {
    
    $reponseBD =  desactiverEvenment($_GET['id_evenment']);

    if ($reponseBD == 1) {
        header("Location:listeEvenment");
    }
    else
    {
        echo "Erreur de suppression de l'evennement"; die;
    }

}
//permet de restaurer un user
if (isset($_GET["restaurer"])) {
    
    $reponseBD = activerEvenment($_GET["id_evenment"]);

    if ($reponseBD == 1) {
        header("Location:corbeilleEvenment");
    }
    else
    {
        echo "Erreur de restauration de l'evennement"; die;
    }

}
//permet de voir la page de modification
if (isset($_GET["edition"])) {

    header("location:editEvenment?idEvenment=" .$_GET['idEvenment']);
    
}
?>
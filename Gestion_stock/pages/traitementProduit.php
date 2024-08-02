<?php 
require_once('connexion/connexion.php');

if(isset($_POST['valider']))
{
    extract($_POST);

    $req = "INSERT INTO produits values(null,'$libelle',$prix,$qte_stock,'$description')";
    $exe = mysqli_query($link,$req);

    if($exe)
    {
        echo "Le produit a été ajouté avec succès !";
    }else{
        echo "Echec d'opération !";
    }
}
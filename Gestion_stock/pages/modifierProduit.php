<?php 
include("connexion/connexion.php");

$id = $_GET['modif'];

$req = "SELECT * FROM produits WHERE id = $id";
$resultat = mysqli_query($link,$req);

$produit = mysqli_fetch_array($resultat);

if(isset($_POST['valider']))
{
    extract($_POST);

    $req ="UPDATE produits set libelle = '$libelle', prix_unitaire = $prix, qte_stock = $qte_stock, description = '$description' WHERE id = $id";
    if(mysqli_query($link,$req))
    {
        Header('location:?page=1');
    }else{
        echo "ECHEC";
    }
}
?>
<form action="" method="POST">
    <pre>
        <label>Libellé :</label>
        <input type="text" name="libelle" value="<?= $produit['libelle'] ?>">
        
        <label>Prix unitaire :</label>
        <input type="number" name="prix" value="<?= $produit['prix_unitaire'] ?>">

        <label>Quantité en stock : </label>
        <input type="number" name="qte_stock" value="<?= $produit['qte_stock'] ?>">

        <label>Description :</label>
        <textarea cols="20" rows="8" name="description"><?= $produit['description'] ?></textarea>

        <input type="submit" name="valider" value="Modifier">
    </pre>
</form>
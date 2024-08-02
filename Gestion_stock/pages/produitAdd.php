<?php 
require_once("traitementProduit.php");
?>
<form action="" method="POST">
    <pre>
        <label>Libellé :</label>
        <input type="text" name="libelle">
        
        <label>Prix unitaire :</label>
        <input type="number" name="prix">

        <label>Quantité en stock : </label>
        <input type="number" name="qte_stock">

        <label>Description :</label>
        <textarea cols="20" rows="8" name="description"></textarea>

        <input type="submit" name="valider" value="Ajouter">
    </pre>
</form>
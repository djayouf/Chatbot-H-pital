<?php 
include('connexion/connexion.php');

$req = "SELECT * FROM produits";
$resultat = mysqli_query($link,$req);
?>
 <table border="1">
    <tr>
        <th>ID</th>
        <th>Libelle</th>
        <th>Prix unitaire</th>
        <th>Quantité en stock</th>
        <th>Description</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    <body>
<?php 
while($val = mysqli_fetch_array($resultat))
{
 ?>
    <tr>
        <td><?= $val['id'] ?></td>
        <td><?= $val['libelle'] ?></td>
        <td><?= $val['prix_unitaire'] ?></td>
        <td><?= $val['qte_stock'] ?></td>
        <td><?= $val['description'] ?></td>
        <td><button><a href="?modif=<?= $val['id'] ?>">Modifier</a></button></td>
        <td><button><a href="?supprimer=<?= $val['id'] ?>">Supprimer</a></button></td>
    </tr>
 <?php   
}
echo "</body></table>";
<html>
    <head>
        <title>Appli de gestion de stock</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="?page=3">Accueil</a></li>
                <li><a href="?page=1">Liste de produit</a></li>
                <li><a href="?page=2">Nouveau produit</a></li>
            </ul>
        </nav>
        
        <?php 
        if(isset($_GET['page']))
        {
            switch($_GET['page'])
            {
                case 1:
                    include('pages/produitList.php');
                    break;
                case 2:
                    include('pages/produitAdd.php');
                    break;
                case 3:
                    include('pages/accueil.php');
                    break;
            }

            // if($_GET['page'] == 1)
            // {
            //     include('pages/produitList.php');
            // }
            // elseif($_GET['page'] == 2)
            // {
            //     include('pages/produitAdd.php');
            // }elseif($_GET['page'] == 3)
            // {
            //     include('pages/accueil.php');
            // }
        }elseif(isset($_GET['supprimer']))
        {
            include('connexion/connexion.php');

            $id = $_GET['supprimer'];

            $req = "DELETE FROM produits WHERE id = $id ";
            if(mysqli_query($link,$req))
            {
                Header('location:?page=1');
            }else{
                echo "Echec";
            }
        }elseif(isset($_GET['modif']))
        {
            include('pages/modifierProduit.php');
        }
        else{
            include("pages/accueil.php");
        }
        ?>

        <style>
            ul > li{
                display: inline-block;
                margin-left: 25px;
            }
        </style>
    </body>
</html>
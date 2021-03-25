<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div class="row" id="produits">
<h1>Liste des produits</h1>
<div class="col-12">    
<a href="<?php echo site_url("scriptajout/ajouter"); ?>" class="btn btn-primary mb-3"> Ajouter un produit</a>
<?php 


echo "<table>";
echo"<tr style='border:2px solid black; background-color: teal'>";
        
echo"<td style='border:2px solid black; color: white'>PHOTO</td>";
echo "<td style='border:2px solid black; color: white'>ID</td>";
echo "<td style='border:2px solid black; color: white'>LIBELLE</td>";
echo"<td style='border:2px solid black; color: white'>DESCRIPTION</td>";

echo"<td style='border:2px solid black; color: white'>PRIX HT</td>";
echo"<td style='border:2px solid black; color: white'>Quantité</td>";
echo"<td style='border:2px solid black; color: white'>Quantité alert</td>";
echo"<td style='border:2px solid black; color: white'>Id sous-categorie</td>";

echo"</tr>";
foreach ($liste_produits as $row) 
{
    echo"<tr>";
    echo "<td style='border:2px solid black;'><img src=".$row->pro_photo."></td>";
    echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_id."</td>";
    echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_name."</td>";
    echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_description."</td>";
    echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_prix_ht."</td>";
    echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_qtite."</td>";   
    echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_qtit_ale."</td>";  
     echo"<td style='border:2px solid black;text-align:center;'>".$row->sous_cat_id."</td>";    

     echo"</tr>";
    
    }
    echo "</table>"; 
?>
</div>
</div>
</body>
</html>
<form action="http://localhost/mvcfilrouge/index.php/scriptmodif/modif" method="post"> 


<?php echo form_open(); ?>

<input type="hidden" name="pro_id" value="<?php echo set_value('pro_id',$produit->pro_id); ?>"> 

<div class="form-group">
   <label for="pro_libelle">Libellé</label>
   <input type="text" name="pro_name" id="pro_name" class="form-control" value="<?php echo $produit->pro_name; ?>">
   
</div> 

<div class="form-group">
   <label for="pro_ref">Description</label>
   <input type="text" name="pro_description" id="pro_description" class="form-control" value="<?php echo $produit->pro_description; ?>">
  
</div> 

<div class="form-group">
   <label for="pro_ref">Prix HT</label>
   <input type="text" name="pro_prix_ht" id="pro_prix_ht" class="form-control" value="<?php echo $produit->pro_prix_ht; ?>">
</div> 

<div class="form-group">
   <label for="pro_ref">Quantité</label>
   <input type="text" name="pro_qtite" id="pro_qtite" class="form-control" value="<?php echo $produit->pro_qtite; ?>">
</div> 

<div class="form-group">
   <label for="pro_ref">Quantité Alert</label>
   <input type="text" name="pro_qtit_ale" id="pro_qtit_ale" class="form-control" value="<?php echo $produit->pro_qtit_ale; ?>">
</div> 

<div class="form-group">
   <label for="pro_ref">Modifier votre photo avec le chemin exemple : ("http://localhost/mvcfilrouge/assets/images/guitare1.png)</label>
   <input type="text" name="pro_photo" id="pro_photo" class="form-control" value="<?php echo $produit->pro_photo; ?>">
</div> 

<a href="<?php echo site_url("scriptmodif/modif"); ?>" class="btn btn-dark mt-3"> Modifier</a>
</form>    
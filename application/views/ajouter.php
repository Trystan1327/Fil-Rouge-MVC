<?php echo form_open(); ?>
<div class="containerform">
<div class="form-group">
   <label for="pro_libelle">Quel est le nom de votre produit ?</label>
   <input type="text" name="pro_name" id="pro_name" class="form-control">
</div> 

<div class="form-group">
   <label for="pro_ref">Donner une déscription à votre produit</label>
   <input type="text" name="pro_description" id="pro_description" class="form-control">
</div> 

<div class="form-group">
   <label for="pro_ref"> Quel est le prix HT</label>
   <input type="text" name="pro_prix_ht" id="pro_prix_ht" class="form-control">
</div> 

<div class="form-group">
   <label for="pro_ref">Quel quantité souhaitez vous ajouter ?</label>
   <input type="text" name="pro_qtite" id="pro_qtite" class="form-control">
</div> 

<div class="form-group">
   <label for="pro_ref">A partir de quel quantité souhaiter vous réaprovisionner vôtre stock  ?</label>
   <input type="text" name="pro_qtit_ale" id="pro_qtit_ale" class="form-control">
</div> 

<div class="form-group">
   <label for="pro_ref">Ajouter le chemin de votre image ! exemple :("http://localhost/mvcfilrouge/assets/images/guitare1.png)</label>
   <input type="file" name="pro_photo" id="pro_photo" class="form-control">
</div> 

<button type="submit" class="btn btn-dark mt-3">Ajouter</button>    
</form>
</div>

<div class="center">






<?php echo form_open(); ?>

<h5>Nom</h5>
<input type="text" name="u_nom" value="<?php echo set_value('u_nom'); ?>"size="50" />
<?php echo form_error('u_nom','<div class="alert alert-danger">','</div>'); ?>

<h5>Prenom</h5>
<input type="text" name="u_prenom" value="<?php echo set_value('u_prenom'); ?>" size="50" />
<?php echo form_error('u_prenom','<div class="alert alert-danger">','</div>'); ?>

<h5>Mot de passe</h5>
<input type="text" name="u_mdp" value="<?php echo set_value(htmlspecialchars('u_mdp')); ?>" size="50" />
<?php echo form_error('u_mdp','<div class="alert alert-danger">','</div>'); ?>

<h5>Confirmation mot de passe</h5>
<input type="text" name="u_conf_mdp" value="<?php echo set_value(htmlspecialchars('u_conf_mdp')); ?>" size="50" />
<?php echo form_error('u_conf_mdp','<div class="alert alert-danger">','</div>'); ?>

<h5>Email</h5>
<input type="text" name="u_email" value="<?php echo set_value('u_email'); ?>" size="50" />
<?php echo form_error('u_email','<div class="alert alert-danger">','</div>'); ?>

<div><input type="submit" value="Valider"  /></div>

</form>

</div>
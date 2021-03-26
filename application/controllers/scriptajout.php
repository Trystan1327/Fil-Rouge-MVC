<?php
// application/controllers/Controle_home.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Scriptajout extends CI_Controller 
{

    public function ajouter()
    {

        $this->load->view('header');
        // Chargement des assistants 'form' et 'url'
   $this->load->helper('form', 'url'); 

   // Chargement de la librairie 'database'
   $this->load->database(); 

   // Chargement de la librairie form_validation
   $this->load->library('form_validation'); 

   if ($this->input->post()) 
   { // 2ème appel de la page: traitement du formulaire

        $data = $this->input->post();
        
        // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
        $this->form_validation->set_rules("pro_name", "nom", "required", array("required" => "Le %s doit être obligatoire."));

        if ($this->form_validation->run() == FALSE)
        { // Echec de la validation, on réaffiche la vue formulaire 

              $this->load->view('ajouter');
        }
        else
        { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base

            $this->db->insert('produits', $data);

            redirect("scriptliste/liste");
        }       
    } 
    else 
    { // 1er appel de la page: affichage du formulaire
           $this->load->view('ajouter');
    }
        $this->load->view('footer');
    }
}
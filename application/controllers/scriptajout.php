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

       if ($this->input->post()) 
       { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();

            $this->db->insert('produits', $data);

            redirect("produits/liste");
       } 
       else 
       { // 1er appel de la page: affichage du formulaire
           $this->load->view('ajouter');
       }
        $this->load->view('footer');
    }
}
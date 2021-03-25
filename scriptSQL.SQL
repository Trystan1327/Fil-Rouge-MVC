
DROP DATABASE mvcvillagegreen;

CREATE DATABASE mvcvillagegreen;

CREATE TABLE fournisseur(
   fou_id INT,
   fou_nom VARCHAR(50),
   fou_prenom VARCHAR(50),
   fou_rue VARCHAR(50),
   fou_cp VARCHAR(5),
   fou_ville VARCHAR(50),
   fou_tel VARCHAR(10),
   PRIMARY KEY(fou_id)
);

CREATE TABLE sous_cat(
   sous_cat_id INT,
   sous_cat_nom VARCHAR(50),
   sous_cat_desc VARCHAR(50),
   PRIMARY KEY(sous_cat_id)
);

CREATE TABLE categorie(
   cat_id INT,
   cat_nom VARCHAR(50),
   cat_desc VARCHAR(255),
   PRIMARY KEY(cat_id)
);

CREATE TABLE commerciaux(
   commerciaux_id INT,
   commerciaux_nom VARCHAR(50),
   commerciaux_prenom VARCHAR(50),
   commerciaux_type VARCHAR(50),
   PRIMARY KEY(commerciaux_id)
);

CREATE TABLE client(
   cli_id INT,
   cli_adresse VARCHAR(50),
   cli_codepostal VARCHAR(50),
   cli_ville VARCHAR(50),
   cli_password VARCHAR(50),
   cli_mail VARCHAR(50),
   cli_type VARCHAR(50),
   cli_nom VARCHAR(50),
   cli_adresse_facturation VARCHAR(50),
   cli_ref VARCHAR(50),
   cli_adresse_livraison VARCHAR(50),
   cli_coef DECIMAL(15,2),
   cli_prenom VARCHAR(50),
   commerciaux_id INT NOT NULL,
   PRIMARY KEY(cli_id),
   FOREIGN KEY(commerciaux_id) REFERENCES commerciaux(commerciaux_id)
);

CREATE TABLE commande(
   cmde_id INT,
   cmde_date DATE,
   cmde_date_payements DATE,
   cmde_prix_ttc DECIMAL(15,2),
   cmde_adress_livraison VARCHAR(50),
   cmde_adress_facturation VARCHAR(50),
   cmde_type_payements DECIMAL(15,2),
   cli_id INT NOT NULL,
   PRIMARY KEY(cmde_id),
   FOREIGN KEY(cli_id) REFERENCES client(cli_id)
);

CREATE TABLE produits(
   pro_id INT,
   pro_name VARCHAR(255),
   pro_description VARCHAR(255),
   pro_prix_ht DECIMAL(15,2),
   pro_qtite INT,
   pro_qtit_ale INT,
   pro_photo VARCHAR(255),
   sous_cat_id INT NOT NULL,
   PRIMARY KEY(pro_id),
   FOREIGN KEY(sous_cat_id) REFERENCES sous_cat(sous_cat_id)
);

CREATE TABLE Livraison(
   livraison_id INT,
   livraison_qte INT,
   livraison_total_commande DECIMAL(15,2),
   cmde_id INT NOT NULL,
   PRIMARY KEY(livraison_id),
   FOREIGN KEY(cmde_id) REFERENCES commande(cmde_id)
);

CREATE TABLE fourni(
   pro_id INT,
   fou_id INT,
   prix_achat VARCHAR(50),
   qtite INT,
   date_com DATE,
   date_livr DATE,
   PRIMARY KEY(pro_id, fou_id),
   FOREIGN KEY(pro_id) REFERENCES produits(pro_id),
   FOREIGN KEY(fou_id) REFERENCES fournisseur(fou_id)
);

CREATE TABLE composer(
   pro_id INT,
   cmde_id INT,
   PRIMARY KEY(pro_id, cmde_id),
   FOREIGN KEY(pro_id) REFERENCES produits(pro_id),
   FOREIGN KEY(cmde_id) REFERENCES commande(cmde_id)
);

CREATE TABLE contient(
   pro_id INT,
   livraison_id INT,
   PRIMARY KEY(pro_id, livraison_id),
   FOREIGN KEY(pro_id) REFERENCES produits(pro_id),
   FOREIGN KEY(livraison_id) REFERENCES Livraison(livraison_id)
);

CREATE TABLE cataloguer(
   sous_cat_id INT,
   cat_id INT,
   PRIMARY KEY(sous_cat_id, cat_id),
   FOREIGN KEY(sous_cat_id) REFERENCES sous_cat(sous_cat_id),
   FOREIGN KEY(cat_id) REFERENCES categorie(cat_id)
);

<?php
	
	$w_routes = array(
	    # Accueil
		['GET', '/', 'Default#home', 'default_home'],
	    ['GET', '/accueil.html', 'Default#home', 'default_accueil'],
	    
	    # Route pour Afficher les Articles d'une Catégorie
	    ['GET', '/categorie/[:categorie]', 'Default#categorie', 'default_categorie'],
	    
	    # Route pour Afficher un Article
	    ['GET', '/[:categorie]/[i:id]-[:slug].html', 'Default#article', 'default_article'],
	);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
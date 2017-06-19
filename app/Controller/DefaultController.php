<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par d�faut
	 */
	public function home()
	{
	    # Connexion � la BDD
	    DbFactory::start();
	    
	    # R�cup�ration des Articles en SPOTLIGHT
	    $spotlights = \ORM::for_table('view_articles')
	                       ->where('SPOTLIGHTARTICLE',1)
	                       ->find_result_set();
	    
	    # R�cup�rations des Articles de la Page d'Accueil
	    $articles = \ORM::for_table('view_articles')->find_result_set();
	    
	    # Transmission � la Vue
		$this->show('default/home', ['spotlights' => $spotlights, 'articles' => $articles]);
	}
	
	/**
	 * Permet d'afficher les articles d'une cat�gorie
	 * @param String $categorie
	 */
	public function categorie($categorie) {
	    
	    # Connexion � la BDD
	    DbFactory::start();
	    
	    # R�cup�rations des Articles de la Cat�gorie
	    $articles = \ORM::for_table('view_articles')
	                   ->where('LIBELLECATEGORIE', ucfirst($categorie))
	                   ->find_result_set();
	    
	    # Transmission � la Vue
	    $this->show('default/categorie', ['articles' => $articles, 'categorie' => $categorie]);
	    
	}
	
	/**
	 * Permet d'afficher un Article
	 * @param String $categorie
	 * @param Entier $id
	 * @param String $slug
	 */
	public function article($categorie, $id, $slug) {
	    # Connexion � la BDD
	    DbFactory::start();
	    
	    # R�cup�ration de l'Article
	    $article = \ORM::for_table('view_articles')->find_one($id);
	    
	    # Transmission � la Vue
	    $this->show('default/article', ['article' => $article]);
	}

}




















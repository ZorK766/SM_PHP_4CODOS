<?php

Class Pagination
{
    //tableau d'articles
    private $articles;
    
    private $article_manager;
    private $pages_articles;
    private $nb_pages;
    private $derniere_page;
    
    public function __construct(Article $articles) {
        $this->article_manager = new ArticleManager();
        $this->articles = $articles;
    }
    
    //renvoie le nombre d'articles sur la dernière page
    private  function compter_pages()
    {
        $i2 = 0;
        for($i = 0 ; $i < count($this->articles)  ; $i++)
        {
            if($i2 >= 6)
            {
                $this->nb_pages++;
                $i2 = 0;
            }
            $i2++;
        }
        $this->derniere_page = i; 
       return $i2;
    }
    
    private function ajouter_articles_dans_pages()
    {
        for($i = 0 ; $i < $this->nb_pages ; $i++)
        {
            $articles_page[i] = $this->articles[$i];
            $articles_page[i] = $this->articles[$i+1];
            $articles_page[i] = $this->articles[$i+2];
            $articles_page[i] = $this->articles[$i+3];
            $articles_page[i] = $this->articles[$i+4];
            $articles_page[i] = $this->articles[$i+5];
        }
        
    }
    
    private function afficher_articles_page($numero_page)
    {
        //recupere les aticles d'une page
        $articles_page = $page_articles[$numero_page]->get_articles();
        
        echo '<div id="conteneur_page_articles">';
        foreach($articles_page as $aricle)
        {
            $article_manager->afficherArticle($article);
        }
        echo '</div>';
    }
}

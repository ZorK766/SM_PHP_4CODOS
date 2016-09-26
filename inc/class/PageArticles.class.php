<?php

class PageArticles
{
    private $articles;
    
    function __construct(Article $articles) {
        $this->articles = $articles;
    }
    
    public function get_articles()
    {
        return $articles;
    }
            
}
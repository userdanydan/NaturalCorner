<?php

require_once __DIR__ . '/../../model/Article.class.php';
require_once __DIR__ . '/../../model/Rayon.class.php';

require_once __DIR__ . '/../../exceptions/ArticleException.class.php';
/**
 * Test class for Article.
 * Generated by PHPUnit on 2016-02-22 at 22:48:34.
 */
class TestArticle extends PHPUnit_Framework_TestCase
{
    /**
     * 
     * @var Rayon
     */
    protected $rayon;
    /**
     * @var Article
     */
    protected $article;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
       // $this->rayon = new Rayon("porte 1");
        //$this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->article=null;
    }
    /**
     * @covers Article::getId
     * @todo Implement testGetId().
     */
    public function testGetId()
    {
        
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $this->assertEquals($this->article->getId(), 0, "devrait afficher 0");
         
    }
    /**
     * @covers Article::setId
     * @todo Implement testSetId().
     */
    public function testSetId()
    {
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $this->article->setId(1000);
        $this->assertEquals($this->article->getId(), 1000, "devrait aficher 1000");
         
         
        try{
            $this->article->setId(-1);
        }catch(ArticleException $ue){
            return;
        }
        $this>fail( "aurait dû lancer une exception.");
    
    }
    /**
     * @covers Article::getDenomination
     * @todo Implement testGetDenomination().
     */
    public function testGetDenomination()
    {
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $this->assertEquals("poire", $this->article->getDenomination(), "Devrait afficher poire");
    }
    
    /**
     * @covers Article::setDenomination
     * @todo Implement testSetDenomination().
     */
    public function testSetDenomination()
    {
        // tests du setter
        // test de l'exception
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        try{
            $this->article->setDenomination("NouvellePoire");
        }catch(ArticleException $ue){
    
            $this->fail( "n'aurait pas dû lancer une exception."." ->".$ue);
        }
         
        $this->assertEquals($this->article->getDenomination(), "NouvellePoire", "devrait afficher NouvellePoire");
         
    }
    /**
     * @covers Article::getPrixUnitaire
     * @todo Implement testGetPrixUnitaire().
     */
    public function testGetPrixUnitaire()
    {
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $this->assertEquals(150, $this->article->getPrixUnitaire(), "Devrait afficher 150");
    }
    
    /**
     * @covers Article::setPrixUnitaire
     * @todo Implement testSetPrixUnitaire().
     */
    public function testSetPrixUnitaire()
    {
        // tests du setter
        // test de l'exception
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        try{
            $this->article->setPrixUnitaire(200);
        }catch(ArticleException $ue){
    
            $this->fail( "n'aurait pas dû lancer une exception."." ->".$ue);
        }
         
        $this->assertEquals(200, $this->article->getPrixUnitaire(), "Devrait afficher 200");
         
    }
    /**
     * @covers Article::getCommentaire
     * @todo Implement testGetCommentaire().
     */
    public function testGetCommentaire()
    {
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $this->assertEquals("Poire bio de Wallonie", $this->article->getCommentaire(), "Devrait afficher Poire bio de Wallonie");
    }
    
    /**
     * @covers Article::setCommentaire
     * @todo Implement testSetCommentaire().
     */
    public function testSetCommentaire()
    {
        // tests du setter
        // test de l'exception
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        try{
            $this->article->setCommentaire("Poire bio de Flandre");
        }catch(ArticleException $ue){
    
            $this->fail( "n'aurait pas dû lancer une exception."." ->".$ue);
        }
         
        $this->assertEquals("Poire bio de Flandre", $this->article->getCommentaire(), "Devrait afficher Poire bio de Flandre");
         
    }
    /**
     * @covers Article::isEnVente
     * @todo Implement testIsEnVente().
     */
    public function testIsEnVente()
    {
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $this->assertEquals(1, $this->article->isEnVente(), "Devrait afficher 1");
    }
    
    /**
     * @covers Article::setEnVente
     * @todo Implement testSetEnVente().
     */
    public function testSetEnVente()
    {
        // tests du setter
        // test de l'exception
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        try{
            $this->article->setEnVente(0);
        }catch(ArticleException $ue){
    
            $this->fail( "n'aurait pas dû lancer une exception."." ->".$ue);
        }
         
        $this->assertEquals(0, $this->article->isEnVente(), "Devrait afficher 0");
         
    }
    /**
     * @covers Article::isEnPromo
     * @todo Implement testIsEnPromo().
     */
    public function testIsEnPromo()
    {
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $this->assertEquals(1, $this->article->isEnPromo(), "Devrait afficher 1");
    }
    
    /**
     * @covers Article::setEnPromo
     * @todo Implement testSetEnPromo().
     */
    public function testSetEnPromo()
    {
        // tests du setter
        // test de l'exception
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        try{
            $this->article->setEnPromo(0);
        }catch(ArticleException $ue){
    
            $this->fail( "n'aurait pas dû lancer une exception."." ->".$ue);
        }
         
        $this->assertEquals( 0, $this->article->isEnPromo(), "Devrait afficher false");
         
    }
    /**
     * @covers Article::__toString()
     */
    public function testToString()
    {
        $this->rayon = new Rayon("porte 1");
        $this->article = new Article("poire", 150, "Poire bio de Wallonie", 1, 1, $this->rayon);
        $stringArticle = $this->article->__toString();
        $this->assertEquals(
                '{"id"="0","denomination"="poire","prixUnitaire"="150","commentaire"="Poire bio de Wallonie","enVente"="1","enPromo"="1"}'
                , $stringArticle);
    }
}
?>





















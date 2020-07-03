<?php
/**
 * ArticleTest class.
 *
 * @Project : udemy-phpunit
 * @File    : ArticleTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/03
 */

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\Article;

class ArticleTest extends TestCase
{
    /**
     * Article object.
     *
     * @var Article $article
     */
    private $article;

    public function setUp(): void
    {
        $this->article = new Article();
    }

    public function tearDown(): void
    {
        unset($this->article);
    }

    public function testSetTitle()
    {
        $this->assertInstanceOf(Article::class, $this->article->setTitle('A title'));
    }

    public function testGetTitleIsNotDefined()
    {
        $this->assertNull($this->article->getTitle());
    }

    public function testGetTitleIsDefined()
    {
        $this->article->setTitle('an article');

        $this->assertEquals('an article', $this->article->getTitle());
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->getTitle());
    }

    public function testSetSlug()
    {
        $this->article->setTitle('a_title');

        $this->assertInstanceOf(Article::class, $this->article->setSlug('an_amazing_title'));
    }

    public function testSlugHasWhitespaceReplacedBySingleUnderscore()
    {
        $this->article->setTitle("An    example    \n    article");

        $this->assertEquals('an_example_article', $this->article->getSlug());
    }

    public function testGetSlugIsNotDefined()
    {
        $this->assertNull($this->article->getSlug());
    }

    public function testGetSlugIsDefined()
    {
        $this->article->setTitle('a title');

        $this->assertEquals('a_title', $this->article->getSlug());
    }

    public function testSetContent()
    {
        $this->article->setContent('My new article about my job');

        $this->assertInstanceOf(Article::class, $this->article->setSlug('an_amazing_title'));
    }

    public function testGetContentIsNotDefined()
    {
        $this->assertNull($this->article->getContent());
    }

    public function testGetContentIsDefined()
    {
        $this->article->setContent('My new article about my job');

        $this->assertEquals('My new article about my job', $this->article->getContent());
    }

    public function testContruct()
    {
        $this->article = new Article('a title', 'My new article about my job');

        $this->assertInstanceOf(Article::class, $this->article);
        $this->assertEquals('a title', $this->article->getTitle());
        $this->assertEquals('a_title', $this->article->getSlug());
        $this->assertEquals('My new article about my job', $this->article->getContent());
    }
}

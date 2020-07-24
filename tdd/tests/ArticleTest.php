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

    public function testGetSlugIsNotDefined()
    {
        $this->assertNull($this->article->getSlug());
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

    public function testConstruct()
    {
        $this->article = new Article('a title', 'My new article about my job');

        $this->assertInstanceOf(Article::class, $this->article);
        $this->assertEquals('a title', $this->article->getTitle());
        $this->assertEquals('a_title', $this->article->getSlug());
        $this->assertEquals('My new article about my job', $this->article->getContent());
    }

    public function titleProvider()
    {
        return [
            'Title has whitespaces replaces by single underscore' =>
                ["An    example    \n    article", 'an_example_article'],
            'Title does not start or end with an underscore' =>
                [' An example article ', 'an_example_article'],
            'Title does not have non word characters' =>
                ['Read! This! Now!', 'read_this_now'],
            'Title has spaces replaced by underscores' =>
                ['a title', 'a_title'],
        ];
    }

    /**
     * @param string $title - Article's title
     * @param string $slug - Expected article's slug
     *
     * @dataProvider titleProvider
     */
    public function testSlug(string $title, string $slug)
    {
        $this->article->setTitle($title);
        $this->assertEquals($slug, $this->article->getSlug());
    }

}

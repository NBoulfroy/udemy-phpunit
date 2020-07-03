<?php
/**
 * Article class.
 *
 * @Project : udemy-phpunit
 * @File    : Article.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/03
 */

namespace Tdd;

class Article
{
    /**
     * Article title
     *
     * @var string|null $title
     */
    private $title;

    /**
     * Article slug
     *
     * @var string|null $slug
     */
    private $slug;

    /**
     * Article content
     *
     * @var string|null
     */
    private $content;

    /**
     * Article constructor.
     *
     * @param string|null $title Article title
     * @param string|null $content Article content
     */
    public function __construct(string $title = null, string $content = null)
    {
        $this->title = $title;
        $this->slug = (null !== $title) ? str_replace(' ', '_', $this->title) : null;
        $this->content = $content;
    }

    /**
     * Define article title
     *
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        // Generate article's slug from article's title
        $this->slug = str_replace(' ', '_', $title);

        return $this;
    }

    /**
     * Return article title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Define custom article slug
     *
     * @param string|null $slug Article's slug
     *
     * @return $this
     */
    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get article slug
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * Define article content
     *
     * @param string|null $content Article content
     *
     * @return $this
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get article content
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
}
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
        $this->slug = (null !== $title) ? preg_replace('/\s+/', '_', strtolower($this->title)) : null;
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

        // All letters passes in lower case.
        $slug = strtolower($title);

        // Replaces white spaces to "_".
        $slug = preg_replace('/\s+/', '_', $slug);

        // Replaces non letters in string to ''.
        $slug = preg_replace('/[^\w]/', '', $slug);

        // Deletes "_" at the beginning and at the end.
        $this->slug = trim($slug, '_');

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
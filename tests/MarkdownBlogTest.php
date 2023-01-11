<?php declare(strict_types=1);

namespace paveld\markdownblog\tests;

use PHPUnit\Framework\TestCase;
use paveld\markdownblog\MarkdownBlog;

final class MarkdownBlogTest extends TestCase {

    public function testMarkdownBlogClass(): void
    {
        $this->expectOutputString("hello from paveld\markdownblog\MarkdownBlog", new MarkdownBlog());
    }
}

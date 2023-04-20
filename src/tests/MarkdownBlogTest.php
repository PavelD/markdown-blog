<?php declare(strict_types=1);

namespace paveld\markdownblog\tests;

use PHPUnit\Framework\TestCase;
use paveld\markdownblog\MarkdownBlog;

final class MarkdownBlogTest extends TestCase {

    public function testMarkdownBlogDisplay(): void
    {
        $testUri = "uri";
        $this->expectOutputString("hello from paveld\markdownblog\MarkdownBlog::display with \$uri " . $testUri, MarkdownBlog::display($testUri));
    }
}

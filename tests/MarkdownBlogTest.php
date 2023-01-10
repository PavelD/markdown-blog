<?php

namespace paveld\markdownblog\tests;

use PHPUnit\Framework\TestCase;

declare(strict_types=1);

final class MarkdownBlogTest extends TestCase {
    $this->expectOutputString("hello from MarkdownBlog", new MarkdownBlog());
}

<?php
/**
 * Markdown extension converting markdown text to media wiki syntax to be able to parse it
 * with MediaWiki Parser.php
 *
 * @copyright Copyright (c) 2023 Pavel Dobes
 * @license https://github.com/PavelD/markdown-blog/blob/main/LICENSE
 * @link https://github.com/PavelD/markdown-blog#readme
 */

namespace paveld\markdownblog;

class MarkdownBlog {

    function __construct() {
        echo "hello from " + __CLASS__;
    }
}

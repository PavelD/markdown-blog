<?php
/**
 * Blog based on the markdown source files.
 *
 * @copyright Copyright (c) 2023 Pavel Dobes
 * @license https://github.com/PavelD/markdown-blog/blob/main/LICENSE
 * @link https://github.com/PavelD/markdown-blog#readme
 */

namespace paveld\markdownblog;

class MarkdownBlog {

    function __construct() {
        // change current working directory to /
        chdir(dirname(__FILE__) . "/..");
    }

    static function display(string $uri) {
        echo "hello from " . __CLASS__ . "::" . __METHOD__ . " with \$uri " . $uri;
    }
}

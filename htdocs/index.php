<?php
/**
 * Blog based on the markdown source files.
 *
 * @copyright Copyright (c) 2023 Pavel Dobes
 * @license https://github.com/PavelD/markdown-blog/blob/main/LICENSE
 * @link https://github.com/PavelD/markdown-blog#readme
 */

require_once('../vendor/autoload.php');

use paveld\markdownblog\MarkdownBlog;

$uri = $_SERVER['REQUEST_URI'];

MarkdownBlog::display($uri);

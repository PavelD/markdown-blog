<?php

chdir(dirname(__FILE__) . "/..");

require_once('./vendor/autoload.php');

use paveld\markdownblog\MarkdownBlog;

$uri = $_SERVER['REQUEST_URI'];

MarkdownBlog::display($uri);

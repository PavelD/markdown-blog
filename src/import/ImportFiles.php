<?php
/**
 * Blog based on the markdown source files.
 *
 * @copyright Copyright (c) 2023 Pavel Dobes
 * @license https://github.com/PavelD/markdown-blog/blob/main/LICENSE
 * @link https://github.com/PavelD/markdown-blog#readme
 */

namespace paveld\markdownblog\import;

class ImportFiles {

    function __construct() {
        self::parseMdFolder();
        self::parseDataFolder();
    }

    static function parseMdFolder() {
        echo "hello from " . __CLASS__ . "::" . __METHOD__ ;
    }

    static function parseDataFolder() {
        echo "hello from " . __CLASS__ . "::" . __METHOD__ ;
    }
}
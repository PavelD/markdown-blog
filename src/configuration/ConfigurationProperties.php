<?php
/**
 * Blog based on the markdown source files.
 *
 * @copyright Copyright (c) 2023 Pavel Dobes
 * @license https://github.com/PavelD/markdown-blog/blob/main/LICENSE
 * @link https://github.com/PavelD/markdown-blog#readme
 */

namespace paveld\markdownblog\configuration;

use hpeccatte\PropertiesParser\Parser;
use Exception;

class ConfigurationProperties {

    private static ?ConfigurationProperties $instance = null;
    private ?array $configurationValues = null;
    
    public static function getInstance(): ConfigurationProperties {
        if (self::$instance === null) {
            ConfigurationProperties $instance = new self();
            $instance->parseConfiguration();
            self::$instance = $instance;
        }
        return self::$instance;
    }

    private function __construct() {
    }

    private function __clone() {
    }

    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }

    private function parseConfiguration() {
        $content = file_get_contents("./conf/configuration.properties");
        $parser = new Parser();
        $this->configurationValues = $parser->parse($content);
    }
}

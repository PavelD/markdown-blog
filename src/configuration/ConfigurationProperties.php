<?php declare(strict_types=1);
/**
 * Blog based on the markdown source files.
 *
 * @copyright Copyright (c) 2023 Pavel Dobes
 * @license https://github.com/PavelD/markdown-blog/blob/main/LICENSE
 * @link https://github.com/PavelD/markdown-blog#readme
 */

namespace paveld\markdownblog\configuration;

use Exception;
use hpeccatte\PropertiesParser\Parser;
use hpeccatte\PropertiesParser\PropertyWithValueExtractor;

/**
 * Configuraiton object; singelton of parseed configuraiton from property file
 */
class ConfigurationProperties {

    private static ?ConfigurationProperties $instance = null;
    private string $propertiesFile = "./conf/configuration.properties";
    private array $configurationValues = array();
    
    public static function getInstance(): ConfigurationProperties {
        if (self::$instance === null) {
            $instance = new self();
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

    private function parseConfiguration(): void {
        $content = file_get_contents($this->propertiesFile);
        $parser = new Parser(null, new PropertyWithValueExtractor());
        $this->configurationValues = $parser->parse($content);
    }

    /**
     * Get configuration value for given key
     * @param string $key konfiguraton key
     * @param string $default default value when configuration is missing
     * @return string value for given key
     */
    public function getValue(string $key, string $default = ""): string {
        return array_key_exists($key, $this->configurationValues) ? $this->configurationValues[$key] : $default;
    }
}

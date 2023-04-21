<?php declare(strict_types=1);

namespace paveld\markdownblog\tests;

use PHPUnit\Framework\TestCase;
use paveld\markdownblog\configuration\ConfigurationProperties;

final class ConfigurationPropertiesTest extends TestCase {

    public function testGetInstance(): void
    {
        $i = ConfigurationProperties::getInstance();
        $this->assertInstanceOf('paveld\markdownblog\configuration\ConfigurationProperties', $i);
    }

    public function testGetValue(): void
    {
        $i = ConfigurationProperties::getInstance();
        $defaultValue = "default_value";
        foreach($this->getKeys() as $key) {
            $this->assertNotEquals($i->getValue($key, $defaultValue), $defaultValue);
        }
    }

    private function getKeys(): array
    {
        // keys from prioerties file
        return array(
            'md.folder',
            'md.media.folder',
            'md.media.external_url',
            'adodb.driver',
            'adodb.dsn',
        );
    }
}

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
}

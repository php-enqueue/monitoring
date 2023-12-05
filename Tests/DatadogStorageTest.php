<?php

declare(strict_types=1);

use Enqueue\Monitoring\DatadogStorage;
use PHPUnit\Framework\TestCase;

class DatadogStorageTest extends TestCase
{
    public function testCanAddTagsCorrect(): void
    {
        $additionalTags = ['environment' => 'staging'];

        $storage = new DatadogStorage();
        $storage->setAdditionalTags($additionalTags);

        $storageTags = $storage->getAdditionalTags();
        $this->assertEquals($additionalTags, $storageTags);
    }
}

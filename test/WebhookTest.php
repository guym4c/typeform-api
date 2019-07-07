<?php
/** @noinspection PhpUnhandledExceptionInspection */

use Guym4c\TypeformAPI\Typeform;
use PHPUnit\Framework\TestCase;

final class WebhookTest extends TestCase {

    const TEST_JSON_RELATIVE_FILE_PATH = '/../payload.json';

    /**
     * @test
     */
    public function parseTest(): void {

        $webhook = Typeform::parseWebhookJson(
            file_get_contents(__DIR__ . self::TEST_JSON_RELATIVE_FILE_PATH));
        $this->assertNotNull($webhook);
    }

}
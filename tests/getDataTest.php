<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RegoTest extends TestCase
{
    public function testDataFetchedWithUID(): void
    {
        $database = new Database();
        $db = $database->getConnection();
        $rego = new Rego($db, '1');
        $result = $rego->read();
        $num = $result->rowCount();
        $this->assertGreaterThan(0, $num);
    }
}
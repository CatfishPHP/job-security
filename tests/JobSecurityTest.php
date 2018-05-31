<?php
namespace Tests;

use Catfish\JobSecurity\ImportantClass;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class JobSecurityTest extends TestCase
{
    /**
     * @test
     */
    public function jobSecurityDeletesImportantClass()
    {
        $reflector = new ReflectionClass(ImportantClass::class);
        $important = new ImportantClass();
        $important->reviewAt = '0 seconds';
        unset($important);
        self::assertFileNotExists($reflector->getFileName());
    }
}

/* End of file JobSecurityTest.php */

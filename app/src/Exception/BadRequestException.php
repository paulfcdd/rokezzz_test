<?php

declare(strict_types=1);

namespace App\Exception;

class BadRequestException extends \Exception
{
    public $code = 400;
}

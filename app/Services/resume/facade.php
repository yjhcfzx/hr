<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class ResumeFacade extends Facade{
    protected static function getFacadeAccessor() { return 'resumeService'; }
}
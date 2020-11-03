<?php


namespace redmedicine7\phpmvc\exception;


use Exception;

class NotFoundException extends Exception
{


    protected $message = 'Page Not Found';
    protected $code = '404';
}
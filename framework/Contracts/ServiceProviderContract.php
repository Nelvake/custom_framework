<?php


namespace App\Framework\Contracts;


interface ServiceProviderContract
{

    function register();
    function boot();

}

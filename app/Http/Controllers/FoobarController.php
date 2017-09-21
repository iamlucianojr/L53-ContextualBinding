<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 21-09-2017
 * Time: 13:41
 */

namespace App\Http\Controllers;


class FoobarController
{

    public function __construct(SomeI $someI)
    {
        dd($someI);
    }
}
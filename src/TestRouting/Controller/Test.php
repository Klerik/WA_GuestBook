<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 15:57
 * To change this template use File | Settings | File Templates.
 */

namespace TestRouting\Controller;

class Test extends \Core\Controller
{
    public function index_get()
    {
       echo '<h1>TestRouting index_get</h1>';
    }

    public function index_test_get()
    {
        echo '<h1>TestRouting index_test_get</h1>';
    }

    public function test_get()
    {
        echo '<h1>TestRouting test_get</h1>';
    }
}

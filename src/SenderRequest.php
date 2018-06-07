<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 06/06/2018
 * Time: 22:32
 */

namespace CodeBot;


class SenderRequest
{
    private $event;

    public function __construct()
    {
        $event = file_get_contents("php://input");
    }

}
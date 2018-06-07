<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 06/06/2018
 * Time: 22:29
 */

namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{
    /**
     * @expectedException \GuzzleHttp\Exception\RequestException
     */
    public function testMakeRequest()
    {
        $message = (new Text(1))->message('Oii');
        (new CallSendApi('23232'))->make($message);

    }
}
<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 8/1/15
 * Time: 12:27 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\Api\Hal\Http\Message;

use NilPortugues\Api\Hal\Http\Response\ErrorResponse;

class ErrorResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testResponse()
    {
        $response = new ErrorResponse('Internal Server Error', 400);

        $this->assertEquals(400, $response->getStatusCode());
        $this->assertEquals(['application/hal+json; charset=utf-8'], $response->getHeader('Content-type'));
    }
}

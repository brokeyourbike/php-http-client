<?php

/**
 * HTTP Client library
 *
 * @author    Ivan Stasiuk <brokeyourbike@gmail.com>
 * @author    Matt Bernier <dx@sendgrid.com>
 * @author    Elmer Thomas <dx@sendgrid.com>
 * @copyright 2018 SendGrid, 2020 Ivan Stasiuk
 * @license   https://opensource.org/licenses/MIT The MIT License
 * @version   GIT: <git_id>
 * @link      http://packagist.org/packages/brokeyourbike/php-http-client
 */
namespace BrokeYourBike\Exception;

use Throwable;

/**
 * Class InvalidHttpRequest
 *
 * Thrown when invalid payload was constructed, which could not reach the server.
 *
 * @package BrokeYourBike\Exceptions
 */
class InvalidRequest extends \Exception
{
    public function __construct(
        $message = "",
        $code = 0,
        Throwable $previous = null
    ) {
        $message = 'Could not send request to server. '.
            'CURL error '.$code.': '.$message;
        parent::__construct($message, $code, $previous);
    }

}

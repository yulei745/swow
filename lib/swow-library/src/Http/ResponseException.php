<?php
/**
 * This file is part of Swow
 *
 * @link    https://github.com/swow/swow
 * @contact twosee <twosee@php.net>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code
 */

declare(strict_types=1);

namespace Swow\Http;

use Throwable;

class ResponseException extends \Swow\Exception
{
    public function __construct(int $statusCode, string $reasonPhrase = '', ?Throwable $previous = null)
    {
        parent::__construct($reasonPhrase ?: Status::getReasonPhraseFor($statusCode), $statusCode, $previous);
    }
}

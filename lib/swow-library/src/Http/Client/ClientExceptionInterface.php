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

namespace Swow\Http\Client;

use Psr\Http\Message\RequestInterface;
use Throwable;

interface ClientExceptionInterface extends \Psr\Http\Client\ClientExceptionInterface
{
    public function __construct(RequestInterface $request, string $message = '', int $code = 0, ?Throwable $previous = null);
}

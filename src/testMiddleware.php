<?php

namespace TestMiddleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class testMiddleware
 * @package TestMiddleware
 */
class testMiddleware
{
    /**
     * @var string
     */
    private $msg;

    /**
     * testMiddleware constructor.
     * @param string $msg
     */
    public function __construct($msg = '')
    {
        $this->msg = $msg;
    }

    /**
     * Execute the middleware.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable $next
     *
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next)
    {
        return $next($this->msg, $response);
    }

}
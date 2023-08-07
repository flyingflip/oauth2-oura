<?php

namespace FlyingFlip\OAuth2\Client\Provider;

use Psr\Http\Message\ResponseInterface;

class OuraRateLimit
{
    private $retryAfter;
    private $limit;
    private $remaining;
    private $reset;

    /**
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        if ($response->getStatusCode() == 429) {
            
        }
    }

    /**
     * In the event the request is over the rate limit, Fitbit returns the number
     * of seconds until the rate limit is reset and the request should be retried.
     *
     * @return String Number of seconds until request should be retried.
     */
    public function getRetryAfter()
    {
        return $this->retryAfter;
    }

    /**
     * @return String The quota number of calls.
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return String The number of calls remaining before hitting the rate limit.
     */
    public function getRemaining()
    {
        return $this->remaining;
    }

    /**
     * @return String The number of seconds until the rate limit resets.
     */
    public function getReset()
    {
        return $this->reset;
    }
}

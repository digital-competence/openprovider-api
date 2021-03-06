<?php

namespace DigiComp\OpenproviderApi\Authentication;

class BearerAuthentication implements \Jane\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('Authorization', $this->{'apiKey'});
        return $request;
    }
    public function getScope(): string
    {
        return 'Bearer';
    }
}

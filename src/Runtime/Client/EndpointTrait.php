<?php

namespace DigiComp\OpenproviderApi\Runtime\Client;

use DigiComp\OpenproviderApi\ClientException;
use DigiComp\OpenproviderApi\Model\ErrorError;
use Jane\OpenApiRuntime\Client\Exception\InvalidFetchModeException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

//Note: This overlays the generated endpoint trait, to throw exceptions, whenever an API error is reported

trait EndpointTrait
{
    abstract protected function transformResponseBody(
        string $body,
        int $status,
        SerializerInterface $serializer,
        ?string $contentType = null
    );

    public function parseResponse(
        ResponseInterface $response,
        SerializerInterface $serializer,
        string $fetchMode = Client::FETCH_OBJECT
    ) {
        if ($fetchMode === Client::FETCH_OBJECT) {
            $contentType = $response->hasHeader('Content-Type') ? current($response->getHeader('Content-Type')) : null;
            $transformedResponse = $this->transformResponseBody(
                (string) $response->getBody(),
                $response->getStatusCode(),
                $serializer,
                $contentType
            );
            if ($transformedResponse instanceof ErrorError) {
                throw new ClientException(
                    $transformedResponse,
                    $transformedResponse->getDesc(),
                    $transformedResponse->getCode()
                );
            }
            return $transformedResponse;
        }
        if ($fetchMode === Client::FETCH_RESPONSE) {
            return $response;
        }
        throw new InvalidFetchModeException(sprintf('Fetch mode %s is not supported', $fetchMode));
    }
}

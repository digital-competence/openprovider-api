# A PHP Client for the Openprovider API

[Openprovider](https://openprovider.com) is a hosting provider, which offers a complete REST API.

This SDK has has been generated with [JanePHP](https://github.com/janephp/janephp) using the provided API [documentation](https://docs.openprovider.com/doc/all).

The generated client has been modified to throw exceptions in case of an error answer.

## Installation

You will need a PSR-18 compatible client implementation. We used [symfony/http-client](https://github.com/symfony/http-client).

Most probably your framework already has some client instantiated, you just can pass to the Openapi client.

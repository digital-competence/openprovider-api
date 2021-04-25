<?php

namespace DigiComp\OpenproviderApi\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;

class BoolQueryResolver implements CustomQueryResolver
{
    public function __invoke(Options $options, $value)
    {
        if ($value) {
            return 'true';
        }
        return 'false';
    }
}

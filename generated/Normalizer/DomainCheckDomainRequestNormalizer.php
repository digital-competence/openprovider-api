<?php

namespace DigiComp\OpenproviderApi\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use DigiComp\OpenproviderApi\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DomainCheckDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainCheckDomainRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainCheckDomainRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainCheckDomainRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'DigiComp\\OpenproviderApi\\Model\\DomainCheckAdditionalData', 'json', $context));
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('application_mode', $data) && $data['application_mode'] !== null) {
            $object->setApplicationMode($data['application_mode']);
        } elseif (\array_key_exists('application_mode', $data) && $data['application_mode'] === null) {
            $object->setApplicationMode(null);
        }
        if (\array_key_exists('domains', $data) && $data['domains'] !== null) {
            $values = array();
            foreach ($data['domains'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\DomainDomain', 'json', $context);
            }
            $object->setDomains($values);
        } elseif (\array_key_exists('domains', $data) && $data['domains'] === null) {
            $object->setDomains(null);
        }
        if (\array_key_exists('with_price', $data) && $data['with_price'] !== null) {
            $object->setWithPrice($data['with_price']);
        } elseif (\array_key_exists('with_price', $data) && $data['with_price'] === null) {
            $object->setWithPrice(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
        }
        if (null !== $object->getApplicationMode()) {
            $data['application_mode'] = $object->getApplicationMode();
        }
        if (null !== $object->getDomains()) {
            $values = array();
            foreach ($object->getDomains() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['domains'] = $values;
        }
        if (null !== $object->getWithPrice()) {
            $data['with_price'] = $object->getWithPrice();
        }
        return $data;
    }
}

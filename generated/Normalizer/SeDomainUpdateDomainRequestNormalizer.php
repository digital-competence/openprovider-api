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

class SeDomainUpdateDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SeDomainUpdateDomainRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SeDomainUpdateDomainRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SeDomainUpdateDomainRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aliases', $data) && $data['aliases'] !== null) {
            $object->setAliases($this->denormalizer->denormalize($data['aliases'], 'DigiComp\\OpenproviderApi\\Model\\SeDomainAliasUpdates', 'json', $context));
        } elseif (\array_key_exists('aliases', $data) && $data['aliases'] === null) {
            $object->setAliases(null);
        }
        if (\array_key_exists('bundle', $data) && $data['bundle'] !== null) {
            $object->setBundle($data['bundle']);
        } elseif (\array_key_exists('bundle', $data) && $data['bundle'] === null) {
            $object->setBundle(null);
        }
        if (\array_key_exists('destinations', $data) && $data['destinations'] !== null) {
            $values = array();
            foreach ($data['destinations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\SeDomainDestination', 'json', $context);
            }
            $object->setDestinations($values);
        } elseif (\array_key_exists('destinations', $data) && $data['destinations'] === null) {
            $object->setDestinations(null);
        }
        if (\array_key_exists('domain_name', $data) && $data['domain_name'] !== null) {
            $object->setDomainName($data['domain_name']);
        } elseif (\array_key_exists('domain_name', $data) && $data['domain_name'] === null) {
            $object->setDomainName(null);
        }
        if (\array_key_exists('products', $data) && $data['products'] !== null) {
            $object->setProducts($this->denormalizer->denormalize($data['products'], 'DigiComp\\OpenproviderApi\\Model\\SeDomainProducts', 'json', $context));
        } elseif (\array_key_exists('products', $data) && $data['products'] === null) {
            $object->setProducts(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAliases()) {
            $data['aliases'] = $this->normalizer->normalize($object->getAliases(), 'json', $context);
        }
        if (null !== $object->getBundle()) {
            $data['bundle'] = $object->getBundle();
        }
        if (null !== $object->getDestinations()) {
            $values = array();
            foreach ($object->getDestinations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['destinations'] = $values;
        }
        if (null !== $object->getDomainName()) {
            $data['domain_name'] = $object->getDomainName();
        }
        if (null !== $object->getProducts()) {
            $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
        }
        return $data;
    }
}

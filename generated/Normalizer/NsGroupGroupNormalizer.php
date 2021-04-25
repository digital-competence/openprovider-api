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

class NsGroupGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\NsGroupGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\NsGroupGroup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\NsGroupGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domain_count', $data) && $data['domain_count'] !== null) {
            $object->setDomainCount($data['domain_count']);
        } elseif (\array_key_exists('domain_count', $data) && $data['domain_count'] === null) {
            $object->setDomainCount(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('name_servers', $data) && $data['name_servers'] !== null) {
            $values = array();
            foreach ($data['name_servers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\NsGroupNameServersSet', 'json', $context);
            }
            $object->setNameServers($values);
        } elseif (\array_key_exists('name_servers', $data) && $data['name_servers'] === null) {
            $object->setNameServers(null);
        }
        if (\array_key_exists('ns_count', $data) && $data['ns_count'] !== null) {
            $object->setNsCount($data['ns_count']);
        } elseif (\array_key_exists('ns_count', $data) && $data['ns_count'] === null) {
            $object->setNsCount(null);
        }
        if (\array_key_exists('ns_group', $data) && $data['ns_group'] !== null) {
            $object->setNsGroup($data['ns_group']);
        } elseif (\array_key_exists('ns_group', $data) && $data['ns_group'] === null) {
            $object->setNsGroup(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDomainCount()) {
            $data['domain_count'] = $object->getDomainCount();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNameServers()) {
            $values = array();
            foreach ($object->getNameServers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['name_servers'] = $values;
        }
        if (null !== $object->getNsCount()) {
            $data['ns_count'] = $object->getNsCount();
        }
        if (null !== $object->getNsGroup()) {
            $data['ns_group'] = $object->getNsGroup();
        }
        return $data;
    }
}

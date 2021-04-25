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

class SeDomainRecordsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SeDomainRecords';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SeDomainRecords';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SeDomainRecords();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aliases', $data) && $data['aliases'] !== null) {
            $values = array();
            foreach ($data['aliases'] as $value) {
                $values[] = $value;
            }
            $object->setAliases($values);
        } elseif (\array_key_exists('aliases', $data) && $data['aliases'] === null) {
            $object->setAliases(null);
        }
        if (\array_key_exists('destinations', $data) && $data['destinations'] !== null) {
            $values_1 = array();
            foreach ($data['destinations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\SeDomainDestination', 'json', $context);
            }
            $object->setDestinations($values_1);
        } elseif (\array_key_exists('destinations', $data) && $data['destinations'] === null) {
            $object->setDestinations(null);
        }
        if (\array_key_exists('outgoing_user_ips', $data) && $data['outgoing_user_ips'] !== null) {
            $values_2 = array();
            foreach ($data['outgoing_user_ips'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setOutgoingUserIps($values_2);
        } elseif (\array_key_exists('outgoing_user_ips', $data) && $data['outgoing_user_ips'] === null) {
            $object->setOutgoingUserIps(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAliases()) {
            $values = array();
            foreach ($object->getAliases() as $value) {
                $values[] = $value;
            }
            $data['aliases'] = $values;
        }
        if (null !== $object->getDestinations()) {
            $values_1 = array();
            foreach ($object->getDestinations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['destinations'] = $values_1;
        }
        if (null !== $object->getOutgoingUserIps()) {
            $values_2 = array();
            foreach ($object->getOutgoingUserIps() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['outgoing_user_ips'] = $values_2;
        }
        return $data;
    }
}

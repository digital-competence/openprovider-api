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

class AdditionalDataGetAdditionalDataResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\AdditionalDataGetAdditionalDataResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\AdditionalDataGetAdditionalDataResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\AdditionalDataGetAdditionalDataResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values = array();
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\AdditionalDataSpecification', 'json', $context);
            }
            $object->setData($values);
        } elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('desc', $data) && $data['desc'] !== null) {
            $object->setDesc($data['desc']);
        } elseif (\array_key_exists('desc', $data) && $data['desc'] === null) {
            $object->setDesc(null);
        }
        if (\array_key_exists('maintenance', $data) && $data['maintenance'] !== null) {
            $object->setMaintenance($data['maintenance']);
        } elseif (\array_key_exists('maintenance', $data) && $data['maintenance'] === null) {
            $object->setMaintenance(null);
        }
        if (\array_key_exists('warnings', $data) && $data['warnings'] !== null) {
            $values_1 = array();
            foreach ($data['warnings'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\ErrorWarning', 'json', $context);
            }
            $object->setWarnings($values_1);
        } elseif (\array_key_exists('warnings', $data) && $data['warnings'] === null) {
            $object->setWarnings(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getData()) {
            $values = array();
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['data'] = $values;
        }
        if (null !== $object->getDesc()) {
            $data['desc'] = $object->getDesc();
        }
        if (null !== $object->getMaintenance()) {
            $data['maintenance'] = $object->getMaintenance();
        }
        if (null !== $object->getWarnings()) {
            $values_1 = array();
            foreach ($object->getWarnings() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['warnings'] = $values_1;
        }
        return $data;
    }
}

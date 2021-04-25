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

class EmailListEmailsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\EmailListEmailsResponseDataResults';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\EmailListEmailsResponseDataResults';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\EmailListEmailsResponseDataResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values = array();
            foreach ($data['fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\EmailFields', 'json', $context);
            }
            $object->setFields($values);
        } elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->setFields(null);
        }
        if (\array_key_exists('group', $data) && $data['group'] !== null) {
            $object->setGroup($data['group']);
        } elseif (\array_key_exists('group', $data) && $data['group'] === null) {
            $object->setGroup(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_default', $data) && $data['is_default'] !== null) {
            $object->setIsDefault($data['is_default']);
        } elseif (\array_key_exists('is_default', $data) && $data['is_default'] === null) {
            $object->setIsDefault(null);
        }
        if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
            $values_1 = array();
            foreach ($data['locale'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLocale($values_1);
        } elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
            $object->setLocale(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_2 = array();
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'DigiComp\\OpenproviderApi\\Model\\EmailTags', 'json', $context);
            }
            $object->setTags($values_2);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFields()) {
            $values = array();
            foreach ($object->getFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['fields'] = $values;
        }
        if (null !== $object->getGroup()) {
            $data['group'] = $object->getGroup();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getIsDefault()) {
            $data['is_default'] = $object->getIsDefault();
        }
        if (null !== $object->getLocale()) {
            $values_1 = array();
            foreach ($object->getLocale() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['locale'] = $values_1;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getTags()) {
            $values_2 = array();
            foreach ($object->getTags() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['tags'] = $values_2;
        }
        return $data;
    }
}

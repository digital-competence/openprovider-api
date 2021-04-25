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

class CsrCreateCsrRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CsrCreateCsrRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CsrCreateCsrRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CsrCreateCsrRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bits', $data) && $data['bits'] !== null) {
            $object->setBits($data['bits']);
        } elseif (\array_key_exists('bits', $data) && $data['bits'] === null) {
            $object->setBits(null);
        }
        if (\array_key_exists('common_name', $data) && $data['common_name'] !== null) {
            $object->setCommonName($data['common_name']);
        } elseif (\array_key_exists('common_name', $data) && $data['common_name'] === null) {
            $object->setCommonName(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
        } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('locality', $data) && $data['locality'] !== null) {
            $object->setLocality($data['locality']);
        } elseif (\array_key_exists('locality', $data) && $data['locality'] === null) {
            $object->setLocality(null);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($data['organization']);
        } elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] !== null) {
            $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
        } elseif (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] === null) {
            $object->setSignatureHashAlgorithm(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
        } elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('subject_alternative_name', $data) && $data['subject_alternative_name'] !== null) {
            $values = array();
            foreach ($data['subject_alternative_name'] as $value) {
                $values[] = $value;
            }
            $object->setSubjectAlternativeName($values);
        } elseif (\array_key_exists('subject_alternative_name', $data) && $data['subject_alternative_name'] === null) {
            $object->setSubjectAlternativeName(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
        } elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('with_config', $data) && $data['with_config'] !== null) {
            $object->setWithConfig($data['with_config']);
        } elseif (\array_key_exists('with_config', $data) && $data['with_config'] === null) {
            $object->setWithConfig(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBits()) {
            $data['bits'] = $object->getBits();
        }
        if (null !== $object->getCommonName()) {
            $data['common_name'] = $object->getCommonName();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getLocality()) {
            $data['locality'] = $object->getLocality();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getSignatureHashAlgorithm()) {
            $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getSubjectAlternativeName()) {
            $values = array();
            foreach ($object->getSubjectAlternativeName() as $value) {
                $values[] = $value;
            }
            $data['subject_alternative_name'] = $values;
        }
        if (null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        if (null !== $object->getWithConfig()) {
            $data['with_config'] = $object->getWithConfig();
        }
        return $data;
    }
}

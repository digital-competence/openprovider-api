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

class CsrDecodeCsrResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CsrDecodeCsrResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CsrDecodeCsrResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CsrDecodeCsrResponseData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domain_names_count', $data) && $data['domain_names_count'] !== null) {
            $object->setDomainNamesCount($data['domain_names_count']);
        } elseif (\array_key_exists('domain_names_count', $data) && $data['domain_names_count'] === null) {
            $object->setDomainNamesCount(null);
        }
        if (\array_key_exists('public_key', $data) && $data['public_key'] !== null) {
            $object->setPublicKey($this->denormalizer->denormalize($data['public_key'], 'DigiComp\\OpenproviderApi\\Model\\CsrCsrPublicKey', 'json', $context));
        } elseif (\array_key_exists('public_key', $data) && $data['public_key'] === null) {
            $object->setPublicKey(null);
        }
        if (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] !== null) {
            $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
        } elseif (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] === null) {
            $object->setSignatureHashAlgorithm(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($this->denormalizer->denormalize($data['subject'], 'DigiComp\\OpenproviderApi\\Model\\CsrCsrSubject', 'json', $context));
        } elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
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
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDomainNamesCount()) {
            $data['domain_names_count'] = $object->getDomainNamesCount();
        }
        if (null !== $object->getPublicKey()) {
            $data['public_key'] = $this->normalizer->normalize($object->getPublicKey(), 'json', $context);
        }
        if (null !== $object->getSignatureHashAlgorithm()) {
            $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
        }
        if (null !== $object->getSubject()) {
            $data['subject'] = $this->normalizer->normalize($object->getSubject(), 'json', $context);
        }
        if (null !== $object->getSubjectAlternativeName()) {
            $values = array();
            foreach ($object->getSubjectAlternativeName() as $value) {
                $values[] = $value;
            }
            $data['subject_alternative_name'] = $values;
        }
        return $data;
    }
}

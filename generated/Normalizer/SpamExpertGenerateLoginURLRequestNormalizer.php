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

class SpamExpertGenerateLoginURLRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SpamExpertGenerateLoginURLRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SpamExpertGenerateLoginURLRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SpamExpertGenerateLoginURLRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bundle', $data) && $data['bundle'] !== null) {
            $object->setBundle($data['bundle']);
        } elseif (\array_key_exists('bundle', $data) && $data['bundle'] === null) {
            $object->setBundle(null);
        }
        if (\array_key_exists('domain_or_email', $data) && $data['domain_or_email'] !== null) {
            $object->setDomainOrEmail($data['domain_or_email']);
        } elseif (\array_key_exists('domain_or_email', $data) && $data['domain_or_email'] === null) {
            $object->setDomainOrEmail(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBundle()) {
            $data['bundle'] = $object->getBundle();
        }
        if (null !== $object->getDomainOrEmail()) {
            $data['domain_or_email'] = $object->getDomainOrEmail();
        }
        return $data;
    }
}

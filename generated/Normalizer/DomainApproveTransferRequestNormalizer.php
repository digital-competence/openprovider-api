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

class DomainApproveTransferRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainApproveTransferRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainApproveTransferRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainApproveTransferRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('approve', $data) && $data['approve'] !== null) {
            $object->setApprove($data['approve']);
        } elseif (\array_key_exists('approve', $data) && $data['approve'] === null) {
            $object->setApprove(null);
        }
        if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
            $object->setAuthCode($data['auth_code']);
        } elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
            $object->setAuthCode(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($this->denormalizer->denormalize($data['domain'], 'DigiComp\\OpenproviderApi\\Model\\DomainDomain', 'json', $context));
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('registrar_tag', $data) && $data['registrar_tag'] !== null) {
            $object->setRegistrarTag($data['registrar_tag']);
        } elseif (\array_key_exists('registrar_tag', $data) && $data['registrar_tag'] === null) {
            $object->setRegistrarTag(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getApprove()) {
            $data['approve'] = $object->getApprove();
        }
        if (null !== $object->getAuthCode()) {
            $data['auth_code'] = $object->getAuthCode();
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getRegistrarTag()) {
            $data['registrar_tag'] = $object->getRegistrarTag();
        }
        return $data;
    }
}

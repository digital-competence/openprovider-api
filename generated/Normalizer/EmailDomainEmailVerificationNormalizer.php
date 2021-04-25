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

class EmailDomainEmailVerificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\EmailDomainEmailVerification';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\EmailDomainEmailVerification';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\EmailDomainEmailVerification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($data['domain']);
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        } elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('handle', $data) && $data['handle'] !== null) {
            $object->setHandle($data['handle']);
        } elseif (\array_key_exists('handle', $data) && $data['handle'] === null) {
            $object->setHandle(null);
        }
        if (\array_key_exists('is_suspended', $data) && $data['is_suspended'] !== null) {
            $object->setIsSuspended($data['is_suspended']);
        } elseif (\array_key_exists('is_suspended', $data) && $data['is_suspended'] === null) {
            $object->setIsSuspended(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if (null !== $object->getHandle()) {
            $data['handle'] = $object->getHandle();
        }
        if (null !== $object->getIsSuspended()) {
            $data['is_suspended'] = $object->getIsSuspended();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        return $data;
    }
}

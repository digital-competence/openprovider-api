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

class AuthcodeRgpStatusesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\AuthcodeRgpStatuses';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\AuthcodeRgpStatuses';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\AuthcodeRgpStatuses();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('add_period', $data) && $data['add_period'] !== null) {
            $object->setAddPeriod($data['add_period']);
        } elseif (\array_key_exists('add_period', $data) && $data['add_period'] === null) {
            $object->setAddPeriod(null);
        }
        if (\array_key_exists('auto_renew_period', $data) && $data['auto_renew_period'] !== null) {
            $object->setAutoRenewPeriod($data['auto_renew_period']);
        } elseif (\array_key_exists('auto_renew_period', $data) && $data['auto_renew_period'] === null) {
            $object->setAutoRenewPeriod(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddPeriod()) {
            $data['add_period'] = $object->getAddPeriod();
        }
        if (null !== $object->getAutoRenewPeriod()) {
            $data['auto_renew_period'] = $object->getAutoRenewPeriod();
        }
        return $data;
    }
}

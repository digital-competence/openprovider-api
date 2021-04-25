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

class AuthcodeResetAuthCodeResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\AuthcodeResetAuthCodeResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\AuthcodeResetAuthCodeResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\AuthcodeResetAuthCodeResponseData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
            $object->setAuthCode($data['auth_code']);
        } elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
            $object->setAuthCode(null);
        }
        if (\array_key_exists('auth_info', $data) && $data['auth_info'] !== null) {
            $object->setAuthInfo($this->denormalizer->denormalize($data['auth_info'], 'DigiComp\\OpenproviderApi\\Model\\AuthcodeAuthInfo', 'json', $context));
        } elseif (\array_key_exists('auth_info', $data) && $data['auth_info'] === null) {
            $object->setAuthInfo(null);
        }
        if (\array_key_exists('domain_roid', $data) && $data['domain_roid'] !== null) {
            $object->setDomainRoid($data['domain_roid']);
        } elseif (\array_key_exists('domain_roid', $data) && $data['domain_roid'] === null) {
            $object->setDomainRoid(null);
        }
        if (\array_key_exists('epp_statuses', $data) && $data['epp_statuses'] !== null) {
            $values = array();
            foreach ($data['epp_statuses'] as $value) {
                $values[] = $value;
            }
            $object->setEppStatuses($values);
        } elseif (\array_key_exists('epp_statuses', $data) && $data['epp_statuses'] === null) {
            $object->setEppStatuses(null);
        }
        if (\array_key_exists('rgp_statuses', $data) && $data['rgp_statuses'] !== null) {
            $object->setRgpStatuses($this->denormalizer->denormalize($data['rgp_statuses'], 'DigiComp\\OpenproviderApi\\Model\\AuthcodeRgpStatuses', 'json', $context));
        } elseif (\array_key_exists('rgp_statuses', $data) && $data['rgp_statuses'] === null) {
            $object->setRgpStatuses(null);
        }
        if (\array_key_exists('success', $data) && $data['success'] !== null) {
            $object->setSuccess($data['success']);
        } elseif (\array_key_exists('success', $data) && $data['success'] === null) {
            $object->setSuccess(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthCode()) {
            $data['auth_code'] = $object->getAuthCode();
        }
        if (null !== $object->getAuthInfo()) {
            $data['auth_info'] = $this->normalizer->normalize($object->getAuthInfo(), 'json', $context);
        }
        if (null !== $object->getDomainRoid()) {
            $data['domain_roid'] = $object->getDomainRoid();
        }
        if (null !== $object->getEppStatuses()) {
            $values = array();
            foreach ($object->getEppStatuses() as $value) {
                $values[] = $value;
            }
            $data['epp_statuses'] = $values;
        }
        if (null !== $object->getRgpStatuses()) {
            $data['rgp_statuses'] = $this->normalizer->normalize($object->getRgpStatuses(), 'json', $context);
        }
        if (null !== $object->getSuccess()) {
            $data['success'] = $object->getSuccess();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}

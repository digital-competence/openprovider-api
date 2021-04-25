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

class OrderReissueOrderRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\OrderReissueOrderRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\OrderReissueOrderRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\OrderReissueOrderRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('approver_email', $data) && $data['approver_email'] !== null) {
            $object->setApproverEmail($data['approver_email']);
        } elseif (\array_key_exists('approver_email', $data) && $data['approver_email'] === null) {
            $object->setApproverEmail(null);
        }
        if (\array_key_exists('csr', $data) && $data['csr'] !== null) {
            $object->setCsr($data['csr']);
        } elseif (\array_key_exists('csr', $data) && $data['csr'] === null) {
            $object->setCsr(null);
        }
        if (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] !== null) {
            $values = array();
            foreach ($data['domain_validation_methods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
            }
            $object->setDomainValidationMethods($values);
        } elseif (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] === null) {
            $object->setDomainValidationMethods(null);
        }
        if (\array_key_exists('enable_dns_automation', $data) && $data['enable_dns_automation'] !== null) {
            $object->setEnableDnsAutomation($data['enable_dns_automation']);
        } elseif (\array_key_exists('enable_dns_automation', $data) && $data['enable_dns_automation'] === null) {
            $object->setEnableDnsAutomation(null);
        }
        if (\array_key_exists('host_names', $data) && $data['host_names'] !== null) {
            $values_1 = array();
            foreach ($data['host_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setHostNames($values_1);
        } elseif (\array_key_exists('host_names', $data) && $data['host_names'] === null) {
            $object->setHostNames(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('organization_handle', $data) && $data['organization_handle'] !== null) {
            $object->setOrganizationHandle($data['organization_handle']);
        } elseif (\array_key_exists('organization_handle', $data) && $data['organization_handle'] === null) {
            $object->setOrganizationHandle(null);
        }
        if (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] !== null) {
            $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
        } elseif (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] === null) {
            $object->setSignatureHashAlgorithm(null);
        }
        if (\array_key_exists('software_id', $data) && $data['software_id'] !== null) {
            $object->setSoftwareId($data['software_id']);
        } elseif (\array_key_exists('software_id', $data) && $data['software_id'] === null) {
            $object->setSoftwareId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getApproverEmail()) {
            $data['approver_email'] = $object->getApproverEmail();
        }
        if (null !== $object->getCsr()) {
            $data['csr'] = $object->getCsr();
        }
        if (null !== $object->getDomainValidationMethods()) {
            $values = array();
            foreach ($object->getDomainValidationMethods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['domain_validation_methods'] = $values;
        }
        if (null !== $object->getEnableDnsAutomation()) {
            $data['enable_dns_automation'] = $object->getEnableDnsAutomation();
        }
        if (null !== $object->getHostNames()) {
            $values_1 = array();
            foreach ($object->getHostNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['host_names'] = $values_1;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getOrganizationHandle()) {
            $data['organization_handle'] = $object->getOrganizationHandle();
        }
        if (null !== $object->getSignatureHashAlgorithm()) {
            $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
        }
        if (null !== $object->getSoftwareId()) {
            $data['software_id'] = $object->getSoftwareId();
        }
        return $data;
    }
}

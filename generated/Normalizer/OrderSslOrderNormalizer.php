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

class OrderSslOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrder';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrder';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\OrderSslOrder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active_date', $data) && $data['active_date'] !== null) {
            $object->setActiveDate($data['active_date']);
        } elseif (\array_key_exists('active_date', $data) && $data['active_date'] === null) {
            $object->setActiveDate(null);
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $values = array();
            foreach ($data['additional_data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderAdditionalData', 'json', $context);
            }
            $object->setAdditionalData($values);
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('administrative_handle', $data) && $data['administrative_handle'] !== null) {
            $object->setAdministrativeHandle($data['administrative_handle']);
        } elseif (\array_key_exists('administrative_handle', $data) && $data['administrative_handle'] === null) {
            $object->setAdministrativeHandle(null);
        }
        if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
            $object->setAutorenew($data['autorenew']);
        } elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
            $object->setAutorenew(null);
        }
        if (\array_key_exists('billing_handle', $data) && $data['billing_handle'] !== null) {
            $object->setBillingHandle($data['billing_handle']);
        } elseif (\array_key_exists('billing_handle', $data) && $data['billing_handle'] === null) {
            $object->setBillingHandle(null);
        }
        if (\array_key_exists('brand_name', $data) && $data['brand_name'] !== null) {
            $object->setBrandName($data['brand_name']);
        } elseif (\array_key_exists('brand_name', $data) && $data['brand_name'] === null) {
            $object->setBrandName(null);
        }
        if (\array_key_exists('certificate', $data) && $data['certificate'] !== null) {
            $object->setCertificate($data['certificate']);
        } elseif (\array_key_exists('certificate', $data) && $data['certificate'] === null) {
            $object->setCertificate(null);
        }
        if (\array_key_exists('common_name', $data) && $data['common_name'] !== null) {
            $object->setCommonName($data['common_name']);
        } elseif (\array_key_exists('common_name', $data) && $data['common_name'] === null) {
            $object->setCommonName(null);
        }
        if (\array_key_exists('csr', $data) && $data['csr'] !== null) {
            $object->setCsr($data['csr']);
        } elseif (\array_key_exists('csr', $data) && $data['csr'] === null) {
            $object->setCsr(null);
        }
        if (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] !== null) {
            $values_1 = array();
            foreach ($data['domain_validation_methods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
            }
            $object->setDomainValidationMethods($values_1);
        } elseif (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] === null) {
            $object->setDomainValidationMethods(null);
        }
        if (\array_key_exists('domain_validation_statuses', $data) && $data['domain_validation_statuses'] !== null) {
            $object->setDomainValidationStatuses($this->denormalizer->denormalize($data['domain_validation_statuses'], 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderDomainValidationStatuses', 'json', $context));
        } elseif (\array_key_exists('domain_validation_statuses', $data) && $data['domain_validation_statuses'] === null) {
            $object->setDomainValidationStatuses(null);
        }
        if (\array_key_exists('email_approver', $data) && $data['email_approver'] !== null) {
            $object->setEmailApprover($data['email_approver']);
        } elseif (\array_key_exists('email_approver', $data) && $data['email_approver'] === null) {
            $object->setEmailApprover(null);
        }
        if (\array_key_exists('email_reissue', $data) && $data['email_reissue'] !== null) {
            $object->setEmailReissue($data['email_reissue']);
        } elseif (\array_key_exists('email_reissue', $data) && $data['email_reissue'] === null) {
            $object->setEmailReissue(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        } elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('features', $data) && $data['features'] !== null) {
            $object->setFeatures($data['features']);
        } elseif (\array_key_exists('features', $data) && $data['features'] === null) {
            $object->setFeatures(null);
        }
        if (\array_key_exists('host_names', $data) && $data['host_names'] !== null) {
            $values_2 = array();
            foreach ($data['host_names'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setHostNames($values_2);
        } elseif (\array_key_exists('host_names', $data) && $data['host_names'] === null) {
            $object->setHostNames(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('intermediate_certificate', $data) && $data['intermediate_certificate'] !== null) {
            $object->setIntermediateCertificate($data['intermediate_certificate']);
        } elseif (\array_key_exists('intermediate_certificate', $data) && $data['intermediate_certificate'] === null) {
            $object->setIntermediateCertificate(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderOptions', 'json', $context));
        } elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
            $object->setOrderDate($data['order_date']);
        } elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('organization_handle', $data) && $data['organization_handle'] !== null) {
            $object->setOrganizationHandle($data['organization_handle']);
        } elseif (\array_key_exists('organization_handle', $data) && $data['organization_handle'] === null) {
            $object->setOrganizationHandle(null);
        }
        if (\array_key_exists('period', $data) && $data['period'] !== null) {
            $object->setPeriod($data['period']);
        } elseif (\array_key_exists('period', $data) && $data['period'] === null) {
            $object->setPeriod(null);
        }
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
        } elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('product_name', $data) && $data['product_name'] !== null) {
            $object->setProductName($data['product_name']);
        } elseif (\array_key_exists('product_name', $data) && $data['product_name'] === null) {
            $object->setProductName(null);
        }
        if (\array_key_exists('root_certificate', $data) && $data['root_certificate'] !== null) {
            $object->setRootCertificate($data['root_certificate']);
        } elseif (\array_key_exists('root_certificate', $data) && $data['root_certificate'] === null) {
            $object->setRootCertificate(null);
        }
        if (\array_key_exists('software', $data) && $data['software'] !== null) {
            $object->setSoftware($data['software']);
        } elseif (\array_key_exists('software', $data) && $data['software'] === null) {
            $object->setSoftware(null);
        }
        if (\array_key_exists('sslinhva_order_id', $data) && $data['sslinhva_order_id'] !== null) {
            $object->setSslinhvaOrderId($data['sslinhva_order_id']);
        } elseif (\array_key_exists('sslinhva_order_id', $data) && $data['sslinhva_order_id'] === null) {
            $object->setSslinhvaOrderId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('technical_handle', $data) && $data['technical_handle'] !== null) {
            $object->setTechnicalHandle($data['technical_handle']);
        } elseif (\array_key_exists('technical_handle', $data) && $data['technical_handle'] === null) {
            $object->setTechnicalHandle(null);
        }
        if (\array_key_exists('validation_method', $data) && $data['validation_method'] !== null) {
            $object->setValidationMethod($data['validation_method']);
        } elseif (\array_key_exists('validation_method', $data) && $data['validation_method'] === null) {
            $object->setValidationMethod(null);
        }
        if (\array_key_exists('vendor_order_id', $data) && $data['vendor_order_id'] !== null) {
            $object->setVendorOrderId($data['vendor_order_id']);
        } elseif (\array_key_exists('vendor_order_id', $data) && $data['vendor_order_id'] === null) {
            $object->setVendorOrderId(null);
        }
        if (\array_key_exists('vendor_reference_id', $data) && $data['vendor_reference_id'] !== null) {
            $object->setVendorReferenceId($data['vendor_reference_id']);
        } elseif (\array_key_exists('vendor_reference_id', $data) && $data['vendor_reference_id'] === null) {
            $object->setVendorReferenceId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActiveDate()) {
            $data['active_date'] = $object->getActiveDate();
        }
        if (null !== $object->getAdditionalData()) {
            $values = array();
            foreach ($object->getAdditionalData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['additional_data'] = $values;
        }
        if (null !== $object->getAdministrativeHandle()) {
            $data['administrative_handle'] = $object->getAdministrativeHandle();
        }
        if (null !== $object->getAutorenew()) {
            $data['autorenew'] = $object->getAutorenew();
        }
        if (null !== $object->getBillingHandle()) {
            $data['billing_handle'] = $object->getBillingHandle();
        }
        if (null !== $object->getBrandName()) {
            $data['brand_name'] = $object->getBrandName();
        }
        if (null !== $object->getCertificate()) {
            $data['certificate'] = $object->getCertificate();
        }
        if (null !== $object->getCommonName()) {
            $data['common_name'] = $object->getCommonName();
        }
        if (null !== $object->getCsr()) {
            $data['csr'] = $object->getCsr();
        }
        if (null !== $object->getDomainValidationMethods()) {
            $values_1 = array();
            foreach ($object->getDomainValidationMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['domain_validation_methods'] = $values_1;
        }
        if (null !== $object->getDomainValidationStatuses()) {
            $data['domain_validation_statuses'] = $this->normalizer->normalize($object->getDomainValidationStatuses(), 'json', $context);
        }
        if (null !== $object->getEmailApprover()) {
            $data['email_approver'] = $object->getEmailApprover();
        }
        if (null !== $object->getEmailReissue()) {
            $data['email_reissue'] = $object->getEmailReissue();
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if (null !== $object->getFeatures()) {
            $data['features'] = $object->getFeatures();
        }
        if (null !== $object->getHostNames()) {
            $values_2 = array();
            foreach ($object->getHostNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['host_names'] = $values_2;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIntermediateCertificate()) {
            $data['intermediate_certificate'] = $object->getIntermediateCertificate();
        }
        if (null !== $object->getOptions()) {
            $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
        }
        if (null !== $object->getOrderDate()) {
            $data['order_date'] = $object->getOrderDate();
        }
        if (null !== $object->getOrganizationHandle()) {
            $data['organization_handle'] = $object->getOrganizationHandle();
        }
        if (null !== $object->getPeriod()) {
            $data['period'] = $object->getPeriod();
        }
        if (null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        if (null !== $object->getProductName()) {
            $data['product_name'] = $object->getProductName();
        }
        if (null !== $object->getRootCertificate()) {
            $data['root_certificate'] = $object->getRootCertificate();
        }
        if (null !== $object->getSoftware()) {
            $data['software'] = $object->getSoftware();
        }
        if (null !== $object->getSslinhvaOrderId()) {
            $data['sslinhva_order_id'] = $object->getSslinhvaOrderId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTechnicalHandle()) {
            $data['technical_handle'] = $object->getTechnicalHandle();
        }
        if (null !== $object->getValidationMethod()) {
            $data['validation_method'] = $object->getValidationMethod();
        }
        if (null !== $object->getVendorOrderId()) {
            $data['vendor_order_id'] = $object->getVendorOrderId();
        }
        if (null !== $object->getVendorReferenceId()) {
            $data['vendor_reference_id'] = $object->getVendorReferenceId();
        }
        return $data;
    }
}

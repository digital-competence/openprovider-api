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

class PaymentListPaymentsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\PaymentListPaymentsResponseDataResults';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\PaymentListPaymentsResponseDataResults';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\PaymentListPaymentsResponseDataResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], 'DigiComp\\OpenproviderApi\\Model\\PaymentPrices', 'json', $context));
        } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('confirmation_date', $data) && $data['confirmation_date'] !== null) {
            $object->setConfirmationDate($data['confirmation_date']);
        } elseif (\array_key_exists('confirmation_date', $data) && $data['confirmation_date'] === null) {
            $object->setConfirmationDate(null);
        }
        if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
            $object->setCreationDate($data['creation_date']);
        } elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
            $object->setCreationDate(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_processed', $data) && $data['is_processed'] !== null) {
            $object->setIsProcessed($data['is_processed']);
        } elseif (\array_key_exists('is_processed', $data) && $data['is_processed'] === null) {
            $object->setIsProcessed(null);
        }
        if (\array_key_exists('method', $data) && $data['method'] !== null) {
            $object->setMethod($data['method']);
        } elseif (\array_key_exists('method', $data) && $data['method'] === null) {
            $object->setMethod(null);
        }
        if (\array_key_exists('payment_date', $data) && $data['payment_date'] !== null) {
            $object->setPaymentDate($data['payment_date']);
        } elseif (\array_key_exists('payment_date', $data) && $data['payment_date'] === null) {
            $object->setPaymentDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
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
        if (null !== $object->getAmount()) {
            $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if (null !== $object->getConfirmationDate()) {
            $data['confirmation_date'] = $object->getConfirmationDate();
        }
        if (null !== $object->getCreationDate()) {
            $data['creation_date'] = $object->getCreationDate();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsProcessed()) {
            $data['is_processed'] = $object->getIsProcessed();
        }
        if (null !== $object->getMethod()) {
            $data['method'] = $object->getMethod();
        }
        if (null !== $object->getPaymentDate()) {
            $data['payment_date'] = $object->getPaymentDate();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}

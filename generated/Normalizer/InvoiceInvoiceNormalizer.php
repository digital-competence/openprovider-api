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

class InvoiceInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\InvoiceInvoice';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\InvoiceInvoice';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\InvoiceInvoice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], 'DigiComp\\OpenproviderApi\\Model\\InvoicePrices', 'json', $context));
        } elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('attachment_url', $data) && $data['attachment_url'] !== null) {
            $object->setAttachmentUrl($data['attachment_url']);
        } elseif (\array_key_exists('attachment_url', $data) && $data['attachment_url'] === null) {
            $object->setAttachmentUrl(null);
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
        if (\array_key_exists('invoice_number', $data) && $data['invoice_number'] !== null) {
            $object->setInvoiceNumber($data['invoice_number']);
        } elseif (\array_key_exists('invoice_number', $data) && $data['invoice_number'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('invoice_url', $data) && $data['invoice_url'] !== null) {
            $object->setInvoiceUrl($data['invoice_url']);
        } elseif (\array_key_exists('invoice_url', $data) && $data['invoice_url'] === null) {
            $object->setInvoiceUrl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAmount()) {
            $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if (null !== $object->getAttachmentUrl()) {
            $data['attachment_url'] = $object->getAttachmentUrl();
        }
        if (null !== $object->getCreationDate()) {
            $data['creation_date'] = $object->getCreationDate();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getInvoiceNumber()) {
            $data['invoice_number'] = $object->getInvoiceNumber();
        }
        if (null !== $object->getInvoiceUrl()) {
            $data['invoice_url'] = $object->getInvoiceUrl();
        }
        return $data;
    }
}

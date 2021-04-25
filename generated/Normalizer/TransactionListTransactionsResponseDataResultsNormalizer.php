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

class TransactionListTransactionsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\TransactionListTransactionsResponseDataResults';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\TransactionListTransactionsResponseDataResults';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\TransactionListTransactionsResponseDataResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $object->setAction($data['action']);
        } elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
        }
        if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
            $object->setCreationDate($data['creation_date']);
        } elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
            $object->setCreationDate(null);
        }
        if (\array_key_exists('discount', $data) && $data['discount'] !== null) {
            $object->setDiscount($data['discount']);
        } elseif (\array_key_exists('discount', $data) && $data['discount'] === null) {
            $object->setDiscount(null);
        }
        if (\array_key_exists('exchange_rate', $data) && $data['exchange_rate'] !== null) {
            $object->setExchangeRate($data['exchange_rate']);
        } elseif (\array_key_exists('exchange_rate', $data) && $data['exchange_rate'] === null) {
            $object->setExchangeRate(null);
        }
        if (\array_key_exists('object_type', $data) && $data['object_type'] !== null) {
            $object->setObjectType($data['object_type']);
        } elseif (\array_key_exists('object_type', $data) && $data['object_type'] === null) {
            $object->setObjectType(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], 'DigiComp\\OpenproviderApi\\Model\\TransactionPrices', 'json', $context));
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('reference_id', $data) && $data['reference_id'] !== null) {
            $object->setReferenceId($data['reference_id']);
        } elseif (\array_key_exists('reference_id', $data) && $data['reference_id'] === null) {
            $object->setReferenceId(null);
        }
        if (\array_key_exists('setup', $data) && $data['setup'] !== null) {
            $object->setSetup($this->denormalizer->denormalize($data['setup'], 'DigiComp\\OpenproviderApi\\Model\\TransactionPrices', 'json', $context));
        } elseif (\array_key_exists('setup', $data) && $data['setup'] === null) {
            $object->setSetup(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
        } elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($this->denormalizer->denormalize($data['total'], 'DigiComp\\OpenproviderApi\\Model\\TransactionPrices', 'json', $context));
        } elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
            $object->setVat($data['vat']);
        } elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
            $object->setVat(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }
        if (null !== $object->getCreationDate()) {
            $data['creation_date'] = $object->getCreationDate();
        }
        if (null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if (null !== $object->getExchangeRate()) {
            $data['exchange_rate'] = $object->getExchangeRate();
        }
        if (null !== $object->getObjectType()) {
            $data['object_type'] = $object->getObjectType();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
        }
        if (null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        if (null !== $object->getReferenceId()) {
            $data['reference_id'] = $object->getReferenceId();
        }
        if (null !== $object->getSetup()) {
            $data['setup'] = $this->normalizer->normalize($object->getSetup(), 'json', $context);
        }
        if (null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $this->normalizer->normalize($object->getTotal(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        return $data;
    }
}

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

class TldPromoDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\TldPromoDetails';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\TldPromoDetails';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\TldPromoDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('end_date', $data) && $data['end_date'] !== null) {
            $object->setEndDate($data['end_date']);
        } elseif (\array_key_exists('end_date', $data) && $data['end_date'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('non_promo_price', $data) && $data['non_promo_price'] !== null) {
            $object->setNonPromoPrice($this->denormalizer->denormalize($data['non_promo_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('non_promo_price', $data) && $data['non_promo_price'] === null) {
            $object->setNonPromoPrice(null);
        }
        if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
            $object->setStartDate($data['start_date']);
        } elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
            $object->setStartDate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate();
        }
        if (null !== $object->getNonPromoPrice()) {
            $data['non_promo_price'] = $this->normalizer->normalize($object->getNonPromoPrice(), 'json', $context);
        }
        if (null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        return $data;
    }
}

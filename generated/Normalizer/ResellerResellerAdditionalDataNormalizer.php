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

class ResellerResellerAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ResellerResellerAdditionalData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ResellerResellerAdditionalData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ResellerResellerAdditionalData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cif_nif_number', $data) && $data['cif_nif_number'] !== null) {
            $object->setCifNifNumber($data['cif_nif_number']);
        } elseif (\array_key_exists('cif_nif_number', $data) && $data['cif_nif_number'] === null) {
            $object->setCifNifNumber(null);
        }
        if (\array_key_exists('gstin', $data) && $data['gstin'] !== null) {
            $object->setGstin($data['gstin']);
        } elseif (\array_key_exists('gstin', $data) && $data['gstin'] === null) {
            $object->setGstin(null);
        }
        if (\array_key_exists('internal_reference', $data) && $data['internal_reference'] !== null) {
            $object->setInternalReference($data['internal_reference']);
        } elseif (\array_key_exists('internal_reference', $data) && $data['internal_reference'] === null) {
            $object->setInternalReference(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCifNifNumber()) {
            $data['cif_nif_number'] = $object->getCifNifNumber();
        }
        if (null !== $object->getGstin()) {
            $data['gstin'] = $object->getGstin();
        }
        if (null !== $object->getInternalReference()) {
            $data['internal_reference'] = $object->getInternalReference();
        }
        return $data;
    }
}

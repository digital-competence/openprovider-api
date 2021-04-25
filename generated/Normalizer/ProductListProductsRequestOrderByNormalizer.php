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

class ProductListProductsRequestOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ProductListProductsRequestOrderBy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ProductListProductsRequestOrderBy';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ProductListProductsRequestOrderBy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('brand_name', $data) && $data['brand_name'] !== null) {
            $object->setBrandName($data['brand_name']);
        } elseif (\array_key_exists('brand_name', $data) && $data['brand_name'] === null) {
            $object->setBrandName(null);
        }
        if (\array_key_exists('brand_seqno', $data) && $data['brand_seqno'] !== null) {
            $object->setBrandSeqno($data['brand_seqno']);
        } elseif (\array_key_exists('brand_seqno', $data) && $data['brand_seqno'] === null) {
            $object->setBrandSeqno(null);
        }
        if (\array_key_exists('category', $data) && $data['category'] !== null) {
            $object->setCategory($data['category']);
        } elseif (\array_key_exists('category', $data) && $data['category'] === null) {
            $object->setCategory(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('product_seqno', $data) && $data['product_seqno'] !== null) {
            $object->setProductSeqno($data['product_seqno']);
        } elseif (\array_key_exists('product_seqno', $data) && $data['product_seqno'] === null) {
            $object->setProductSeqno(null);
        }
        if (\array_key_exists('sub_category', $data) && $data['sub_category'] !== null) {
            $object->setSubCategory($data['sub_category']);
        } elseif (\array_key_exists('sub_category', $data) && $data['sub_category'] === null) {
            $object->setSubCategory(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBrandName()) {
            $data['brand_name'] = $object->getBrandName();
        }
        if (null !== $object->getBrandSeqno()) {
            $data['brand_seqno'] = $object->getBrandSeqno();
        }
        if (null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getProductSeqno()) {
            $data['product_seqno'] = $object->getProductSeqno();
        }
        if (null !== $object->getSubCategory()) {
            $data['sub_category'] = $object->getSubCategory();
        }
        return $data;
    }
}

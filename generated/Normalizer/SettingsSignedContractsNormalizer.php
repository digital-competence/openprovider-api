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

class SettingsSignedContractsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SettingsSignedContracts';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SettingsSignedContracts';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SettingsSignedContracts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contents', $data) && $data['contents'] !== null) {
            $object->setContents($data['contents']);
        } elseif (\array_key_exists('contents', $data) && $data['contents'] === null) {
            $object->setContents(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_signed', $data) && $data['is_signed'] !== null) {
            $object->setIsSigned($data['is_signed']);
        } elseif (\array_key_exists('is_signed', $data) && $data['is_signed'] === null) {
            $object->setIsSigned(null);
        }
        if (\array_key_exists('modification_date', $data) && $data['modification_date'] !== null) {
            $object->setModificationDate($data['modification_date']);
        } elseif (\array_key_exists('modification_date', $data) && $data['modification_date'] === null) {
            $object->setModificationDate(null);
        }
        if (\array_key_exists('sign_on_date', $data) && $data['sign_on_date'] !== null) {
            $object->setSignOnDate($data['sign_on_date']);
        } elseif (\array_key_exists('sign_on_date', $data) && $data['sign_on_date'] === null) {
            $object->setSignOnDate(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('version_id', $data) && $data['version_id'] !== null) {
            $object->setVersionId($data['version_id']);
        } elseif (\array_key_exists('version_id', $data) && $data['version_id'] === null) {
            $object->setVersionId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getContents()) {
            $data['contents'] = $object->getContents();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsSigned()) {
            $data['is_signed'] = $object->getIsSigned();
        }
        if (null !== $object->getModificationDate()) {
            $data['modification_date'] = $object->getModificationDate();
        }
        if (null !== $object->getSignOnDate()) {
            $data['sign_on_date'] = $object->getSignOnDate();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getVersionId()) {
            $data['version_id'] = $object->getVersionId();
        }
        return $data;
    }
}

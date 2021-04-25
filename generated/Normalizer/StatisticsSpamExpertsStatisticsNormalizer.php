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

class StatisticsSpamExpertsStatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\StatisticsSpamExpertsStatistics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\StatisticsSpamExpertsStatistics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\StatisticsSpamExpertsStatistics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('activated_at', $data) && $data['activated_at'] !== null) {
            $object->setActivatedAt($data['activated_at']);
        } elseif (\array_key_exists('activated_at', $data) && $data['activated_at'] === null) {
            $object->setActivatedAt(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('exists', $data) && $data['exists'] !== null) {
            $object->setExists($data['exists']);
        } elseif (\array_key_exists('exists', $data) && $data['exists'] === null) {
            $object->setExists(null);
        }
        if (\array_key_exists('expired_at', $data) && $data['expired_at'] !== null) {
            $object->setExpiredAt($data['expired_at']);
        } elseif (\array_key_exists('expired_at', $data) && $data['expired_at'] === null) {
            $object->setExpiredAt(null);
        }
        if (\array_key_exists('incoming_count', $data) && $data['incoming_count'] !== null) {
            $object->setIncomingCount($data['incoming_count']);
        } elseif (\array_key_exists('incoming_count', $data) && $data['incoming_count'] === null) {
            $object->setIncomingCount(null);
        }
        if (\array_key_exists('incoming_limit', $data) && $data['incoming_limit'] !== null) {
            $object->setIncomingLimit($data['incoming_limit']);
        } elseif (\array_key_exists('incoming_limit', $data) && $data['incoming_limit'] === null) {
            $object->setIncomingLimit(null);
        }
        if (\array_key_exists('outgoing_count', $data) && $data['outgoing_count'] !== null) {
            $object->setOutgoingCount($data['outgoing_count']);
        } elseif (\array_key_exists('outgoing_count', $data) && $data['outgoing_count'] === null) {
            $object->setOutgoingCount(null);
        }
        if (\array_key_exists('outgoing_limit', $data) && $data['outgoing_limit'] !== null) {
            $object->setOutgoingLimit($data['outgoing_limit']);
        } elseif (\array_key_exists('outgoing_limit', $data) && $data['outgoing_limit'] === null) {
            $object->setOutgoingLimit(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] !== null) {
            $object->setWithOutgoingFilter($data['with_outgoing_filter']);
        } elseif (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] === null) {
            $object->setWithOutgoingFilter(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActivatedAt()) {
            $data['activated_at'] = $object->getActivatedAt();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getExists()) {
            $data['exists'] = $object->getExists();
        }
        if (null !== $object->getExpiredAt()) {
            $data['expired_at'] = $object->getExpiredAt();
        }
        if (null !== $object->getIncomingCount()) {
            $data['incoming_count'] = $object->getIncomingCount();
        }
        if (null !== $object->getIncomingLimit()) {
            $data['incoming_limit'] = $object->getIncomingLimit();
        }
        if (null !== $object->getOutgoingCount()) {
            $data['outgoing_count'] = $object->getOutgoingCount();
        }
        if (null !== $object->getOutgoingLimit()) {
            $data['outgoing_limit'] = $object->getOutgoingLimit();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getWithOutgoingFilter()) {
            $data['with_outgoing_filter'] = $object->getWithOutgoingFilter();
        }
        return $data;
    }
}

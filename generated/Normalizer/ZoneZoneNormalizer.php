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

class ZoneZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ZoneZone';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ZoneZone';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ZoneZone();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
            $object->setCreationDate($data['creation_date']);
        } elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
            $object->setCreationDate(null);
        }
        if (\array_key_exists('dnskey', $data) && $data['dnskey'] !== null) {
            $object->setDnskey($data['dnskey']);
        } elseif (\array_key_exists('dnskey', $data) && $data['dnskey'] === null) {
            $object->setDnskey(null);
        }
        if (\array_key_exists('history', $data) && $data['history'] !== null) {
            $values = array();
            foreach ($data['history'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\HistoryZoneHistory', 'json', $context);
            }
            $object->setHistory($values);
        } elseif (\array_key_exists('history', $data) && $data['history'] === null) {
            $object->setHistory(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
            $object->setIp($data['ip']);
        } elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
            $object->setIp(null);
        }
        if (\array_key_exists('is_deleted', $data) && $data['is_deleted'] !== null) {
            $object->setIsDeleted($data['is_deleted']);
        } elseif (\array_key_exists('is_deleted', $data) && $data['is_deleted'] === null) {
            $object->setIsDeleted(null);
        }
        if (\array_key_exists('is_shadow', $data) && $data['is_shadow'] !== null) {
            $object->setIsShadow($data['is_shadow']);
        } elseif (\array_key_exists('is_shadow', $data) && $data['is_shadow'] === null) {
            $object->setIsShadow(null);
        }
        if (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] !== null) {
            $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
        } elseif (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] === null) {
            $object->setIsSpamexpertsEnabled(null);
        }
        if (\array_key_exists('modification_date', $data) && $data['modification_date'] !== null) {
            $object->setModificationDate($data['modification_date']);
        } elseif (\array_key_exists('modification_date', $data) && $data['modification_date'] === null) {
            $object->setModificationDate(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('records', $data) && $data['records'] !== null) {
            $values_1 = array();
            foreach ($data['records'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\RecordRecordInfo', 'json', $context);
            }
            $object->setRecords($values_1);
        } elseif (\array_key_exists('records', $data) && $data['records'] === null) {
            $object->setRecords(null);
        }
        if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
            $object->setResellerId($data['reseller_id']);
        } elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
            $object->setResellerId(null);
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
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getCreationDate()) {
            $data['creation_date'] = $object->getCreationDate();
        }
        if (null !== $object->getDnskey()) {
            $data['dnskey'] = $object->getDnskey();
        }
        if (null !== $object->getHistory()) {
            $values = array();
            foreach ($object->getHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['history'] = $values;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIp()) {
            $data['ip'] = $object->getIp();
        }
        if (null !== $object->getIsDeleted()) {
            $data['is_deleted'] = $object->getIsDeleted();
        }
        if (null !== $object->getIsShadow()) {
            $data['is_shadow'] = $object->getIsShadow();
        }
        if (null !== $object->getIsSpamexpertsEnabled()) {
            $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
        }
        if (null !== $object->getModificationDate()) {
            $data['modification_date'] = $object->getModificationDate();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getRecords()) {
            $values_1 = array();
            foreach ($object->getRecords() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['records'] = $values_1;
        }
        if (null !== $object->getResellerId()) {
            $data['reseller_id'] = $object->getResellerId();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}

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

class SettingsPaymentMethodLimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodLimit';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodLimit';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SettingsPaymentMethodLimit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AUD', $data) && $data['AUD'] !== null) {
            $object->setAUD($data['AUD']);
        } elseif (\array_key_exists('AUD', $data) && $data['AUD'] === null) {
            $object->setAUD(null);
        }
        if (\array_key_exists('BGN', $data) && $data['BGN'] !== null) {
            $object->setBGN($data['BGN']);
        } elseif (\array_key_exists('BGN', $data) && $data['BGN'] === null) {
            $object->setBGN(null);
        }
        if (\array_key_exists('BRL', $data) && $data['BRL'] !== null) {
            $object->setBRL($data['BRL']);
        } elseif (\array_key_exists('BRL', $data) && $data['BRL'] === null) {
            $object->setBRL(null);
        }
        if (\array_key_exists('CAD', $data) && $data['CAD'] !== null) {
            $object->setCAD($data['CAD']);
        } elseif (\array_key_exists('CAD', $data) && $data['CAD'] === null) {
            $object->setCAD(null);
        }
        if (\array_key_exists('CHF', $data) && $data['CHF'] !== null) {
            $object->setCHF($data['CHF']);
        } elseif (\array_key_exists('CHF', $data) && $data['CHF'] === null) {
            $object->setCHF(null);
        }
        if (\array_key_exists('CNY', $data) && $data['CNY'] !== null) {
            $object->setCNY($data['CNY']);
        } elseif (\array_key_exists('CNY', $data) && $data['CNY'] === null) {
            $object->setCNY(null);
        }
        if (\array_key_exists('CZK', $data) && $data['CZK'] !== null) {
            $object->setCZK($data['CZK']);
        } elseif (\array_key_exists('CZK', $data) && $data['CZK'] === null) {
            $object->setCZK(null);
        }
        if (\array_key_exists('DKK', $data) && $data['DKK'] !== null) {
            $object->setDKK($data['DKK']);
        } elseif (\array_key_exists('DKK', $data) && $data['DKK'] === null) {
            $object->setDKK(null);
        }
        if (\array_key_exists('EEK', $data) && $data['EEK'] !== null) {
            $object->setEEK($data['EEK']);
        } elseif (\array_key_exists('EEK', $data) && $data['EEK'] === null) {
            $object->setEEK(null);
        }
        if (\array_key_exists('EUR', $data) && $data['EUR'] !== null) {
            $object->setEUR($data['EUR']);
        } elseif (\array_key_exists('EUR', $data) && $data['EUR'] === null) {
            $object->setEUR(null);
        }
        if (\array_key_exists('GBP', $data) && $data['GBP'] !== null) {
            $object->setGBP($data['GBP']);
        } elseif (\array_key_exists('GBP', $data) && $data['GBP'] === null) {
            $object->setGBP(null);
        }
        if (\array_key_exists('GHS', $data) && $data['GHS'] !== null) {
            $object->setGHS($data['GHS']);
        } elseif (\array_key_exists('GHS', $data) && $data['GHS'] === null) {
            $object->setGHS(null);
        }
        if (\array_key_exists('HKD', $data) && $data['HKD'] !== null) {
            $object->setHKD($data['HKD']);
        } elseif (\array_key_exists('HKD', $data) && $data['HKD'] === null) {
            $object->setHKD(null);
        }
        if (\array_key_exists('HRK', $data) && $data['HRK'] !== null) {
            $object->setHRK($data['HRK']);
        } elseif (\array_key_exists('HRK', $data) && $data['HRK'] === null) {
            $object->setHRK(null);
        }
        if (\array_key_exists('HUF', $data) && $data['HUF'] !== null) {
            $object->setHUF($data['HUF']);
        } elseif (\array_key_exists('HUF', $data) && $data['HUF'] === null) {
            $object->setHUF(null);
        }
        if (\array_key_exists('IDR', $data) && $data['IDR'] !== null) {
            $object->setIDR($data['IDR']);
        } elseif (\array_key_exists('IDR', $data) && $data['IDR'] === null) {
            $object->setIDR(null);
        }
        if (\array_key_exists('ILS', $data) && $data['ILS'] !== null) {
            $object->setILS($data['ILS']);
        } elseif (\array_key_exists('ILS', $data) && $data['ILS'] === null) {
            $object->setILS(null);
        }
        if (\array_key_exists('INR', $data) && $data['INR'] !== null) {
            $object->setINR($data['INR']);
        } elseif (\array_key_exists('INR', $data) && $data['INR'] === null) {
            $object->setINR(null);
        }
        if (\array_key_exists('JPY', $data) && $data['JPY'] !== null) {
            $object->setJPY($data['JPY']);
        } elseif (\array_key_exists('JPY', $data) && $data['JPY'] === null) {
            $object->setJPY(null);
        }
        if (\array_key_exists('KRW', $data) && $data['KRW'] !== null) {
            $object->setKRW($data['KRW']);
        } elseif (\array_key_exists('KRW', $data) && $data['KRW'] === null) {
            $object->setKRW(null);
        }
        if (\array_key_exists('LKR', $data) && $data['LKR'] !== null) {
            $object->setLKR($data['LKR']);
        } elseif (\array_key_exists('LKR', $data) && $data['LKR'] === null) {
            $object->setLKR(null);
        }
        if (\array_key_exists('LTL', $data) && $data['LTL'] !== null) {
            $object->setLTL($data['LTL']);
        } elseif (\array_key_exists('LTL', $data) && $data['LTL'] === null) {
            $object->setLTL(null);
        }
        if (\array_key_exists('LVL', $data) && $data['LVL'] !== null) {
            $object->setLVL($data['LVL']);
        } elseif (\array_key_exists('LVL', $data) && $data['LVL'] === null) {
            $object->setLVL(null);
        }
        if (\array_key_exists('MXN', $data) && $data['MXN'] !== null) {
            $object->setMXN($data['MXN']);
        } elseif (\array_key_exists('MXN', $data) && $data['MXN'] === null) {
            $object->setMXN(null);
        }
        if (\array_key_exists('MYR', $data) && $data['MYR'] !== null) {
            $object->setMYR($data['MYR']);
        } elseif (\array_key_exists('MYR', $data) && $data['MYR'] === null) {
            $object->setMYR(null);
        }
        if (\array_key_exists('NOK', $data) && $data['NOK'] !== null) {
            $object->setNOK($data['NOK']);
        } elseif (\array_key_exists('NOK', $data) && $data['NOK'] === null) {
            $object->setNOK(null);
        }
        if (\array_key_exists('NZD', $data) && $data['NZD'] !== null) {
            $object->setNZD($data['NZD']);
        } elseif (\array_key_exists('NZD', $data) && $data['NZD'] === null) {
            $object->setNZD(null);
        }
        if (\array_key_exists('PHP', $data) && $data['PHP'] !== null) {
            $object->setPHP($data['PHP']);
        } elseif (\array_key_exists('PHP', $data) && $data['PHP'] === null) {
            $object->setPHP(null);
        }
        if (\array_key_exists('PLN', $data) && $data['PLN'] !== null) {
            $object->setPLN($data['PLN']);
        } elseif (\array_key_exists('PLN', $data) && $data['PLN'] === null) {
            $object->setPLN(null);
        }
        if (\array_key_exists('RON', $data) && $data['RON'] !== null) {
            $object->setRON($data['RON']);
        } elseif (\array_key_exists('RON', $data) && $data['RON'] === null) {
            $object->setRON(null);
        }
        if (\array_key_exists('RUB', $data) && $data['RUB'] !== null) {
            $object->setRUB($data['RUB']);
        } elseif (\array_key_exists('RUB', $data) && $data['RUB'] === null) {
            $object->setRUB(null);
        }
        if (\array_key_exists('SEK', $data) && $data['SEK'] !== null) {
            $object->setSEK($data['SEK']);
        } elseif (\array_key_exists('SEK', $data) && $data['SEK'] === null) {
            $object->setSEK(null);
        }
        if (\array_key_exists('SGD', $data) && $data['SGD'] !== null) {
            $object->setSGD($data['SGD']);
        } elseif (\array_key_exists('SGD', $data) && $data['SGD'] === null) {
            $object->setSGD(null);
        }
        if (\array_key_exists('THB', $data) && $data['THB'] !== null) {
            $object->setTHB($data['THB']);
        } elseif (\array_key_exists('THB', $data) && $data['THB'] === null) {
            $object->setTHB(null);
        }
        if (\array_key_exists('TRY', $data) && $data['TRY'] !== null) {
            $object->setTRY($data['TRY']);
        } elseif (\array_key_exists('TRY', $data) && $data['TRY'] === null) {
            $object->setTRY(null);
        }
        if (\array_key_exists('USD', $data) && $data['USD'] !== null) {
            $object->setUSD($data['USD']);
        } elseif (\array_key_exists('USD', $data) && $data['USD'] === null) {
            $object->setUSD(null);
        }
        if (\array_key_exists('ZAR', $data) && $data['ZAR'] !== null) {
            $object->setZAR($data['ZAR']);
        } elseif (\array_key_exists('ZAR', $data) && $data['ZAR'] === null) {
            $object->setZAR(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAUD()) {
            $data['AUD'] = $object->getAUD();
        }
        if (null !== $object->getBGN()) {
            $data['BGN'] = $object->getBGN();
        }
        if (null !== $object->getBRL()) {
            $data['BRL'] = $object->getBRL();
        }
        if (null !== $object->getCAD()) {
            $data['CAD'] = $object->getCAD();
        }
        if (null !== $object->getCHF()) {
            $data['CHF'] = $object->getCHF();
        }
        if (null !== $object->getCNY()) {
            $data['CNY'] = $object->getCNY();
        }
        if (null !== $object->getCZK()) {
            $data['CZK'] = $object->getCZK();
        }
        if (null !== $object->getDKK()) {
            $data['DKK'] = $object->getDKK();
        }
        if (null !== $object->getEEK()) {
            $data['EEK'] = $object->getEEK();
        }
        if (null !== $object->getEUR()) {
            $data['EUR'] = $object->getEUR();
        }
        if (null !== $object->getGBP()) {
            $data['GBP'] = $object->getGBP();
        }
        if (null !== $object->getGHS()) {
            $data['GHS'] = $object->getGHS();
        }
        if (null !== $object->getHKD()) {
            $data['HKD'] = $object->getHKD();
        }
        if (null !== $object->getHRK()) {
            $data['HRK'] = $object->getHRK();
        }
        if (null !== $object->getHUF()) {
            $data['HUF'] = $object->getHUF();
        }
        if (null !== $object->getIDR()) {
            $data['IDR'] = $object->getIDR();
        }
        if (null !== $object->getILS()) {
            $data['ILS'] = $object->getILS();
        }
        if (null !== $object->getINR()) {
            $data['INR'] = $object->getINR();
        }
        if (null !== $object->getJPY()) {
            $data['JPY'] = $object->getJPY();
        }
        if (null !== $object->getKRW()) {
            $data['KRW'] = $object->getKRW();
        }
        if (null !== $object->getLKR()) {
            $data['LKR'] = $object->getLKR();
        }
        if (null !== $object->getLTL()) {
            $data['LTL'] = $object->getLTL();
        }
        if (null !== $object->getLVL()) {
            $data['LVL'] = $object->getLVL();
        }
        if (null !== $object->getMXN()) {
            $data['MXN'] = $object->getMXN();
        }
        if (null !== $object->getMYR()) {
            $data['MYR'] = $object->getMYR();
        }
        if (null !== $object->getNOK()) {
            $data['NOK'] = $object->getNOK();
        }
        if (null !== $object->getNZD()) {
            $data['NZD'] = $object->getNZD();
        }
        if (null !== $object->getPHP()) {
            $data['PHP'] = $object->getPHP();
        }
        if (null !== $object->getPLN()) {
            $data['PLN'] = $object->getPLN();
        }
        if (null !== $object->getRON()) {
            $data['RON'] = $object->getRON();
        }
        if (null !== $object->getRUB()) {
            $data['RUB'] = $object->getRUB();
        }
        if (null !== $object->getSEK()) {
            $data['SEK'] = $object->getSEK();
        }
        if (null !== $object->getSGD()) {
            $data['SGD'] = $object->getSGD();
        }
        if (null !== $object->getTHB()) {
            $data['THB'] = $object->getTHB();
        }
        if (null !== $object->getTRY()) {
            $data['TRY'] = $object->getTRY();
        }
        if (null !== $object->getUSD()) {
            $data['USD'] = $object->getUSD();
        }
        if (null !== $object->getZAR()) {
            $data['ZAR'] = $object->getZAR();
        }
        return $data;
    }
}

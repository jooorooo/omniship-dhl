<?php

namespace Dhl\PickupDataTypesGlobal;

/**
 * Class representing ShipmentDetailsType
 *
 * 
 * XSD Type: ShipmentDetails
 */
class ShipmentDetailsType
{

    /**
     * Valid values are D or C. D =DHL C = credit Card
     *
     * @property string $accountType
     */
    private $accountType = null;

    /**
     * DHL Account Number Required only if Account Type is DHL
     *
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * Required if AccountType is Credit Card
     *
     * @property \Dhl\PickupDataTypesGlobal\ChargeCardType $chargeCard
     */
    private $chargeCard = null;

    /**
     * @property string $billToAccountNumber
     */
    private $billToAccountNumber = null;

    /**
     * @property string $aWBNumber
     */
    private $aWBNumber = null;

    /**
     * @property integer $numberOfPieces
     */
    private $numberOfPieces = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property string $globalProductCode
     */
    private $globalProductCode = null;

    /**
     * @property string $doorTo
     */
    private $doorTo = null;

    /**
     * If piece information is specified, DiemnsionUnit must be gievn
     *
     * @property string $dimensionUnit
     */
    private $dimensionUnit = null;

    /**
     * @property float $insuredAmount
     */
    private $insuredAmount = null;

    /**
     * @property string $insuredCurrencyCode
     */
    private $insuredCurrencyCode = null;

    /**
     * @property \Dhl\PickupDataTypesGlobal\PieceType $pieces
     */
    private $pieces = null;

    /**
     * @property string[] $specialService
     */
    private $specialService = array(
        
    );

    /**
     * Gets as accountType
     *
     * Valid values are D or C. D =DHL C = credit Card
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets a new accountType
     *
     * Valid values are D or C. D =DHL C = credit Card
     *
     * @param string $accountType
     * @return self
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * DHL Account Number Required only if Account Type is DHL
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * DHL Account Number Required only if Account Type is DHL
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as chargeCard
     *
     * Required if AccountType is Credit Card
     *
     * @return \Dhl\PickupDataTypesGlobal\ChargeCardType
     */
    public function getChargeCard()
    {
        return $this->chargeCard;
    }

    /**
     * Sets a new chargeCard
     *
     * Required if AccountType is Credit Card
     *
     * @param \Dhl\PickupDataTypesGlobal\ChargeCardType $chargeCard
     * @return self
     */
    public function setChargeCard(\Dhl\PickupDataTypesGlobal\ChargeCardType $chargeCard)
    {
        $this->chargeCard = $chargeCard;
        return $this;
    }

    /**
     * Gets as billToAccountNumber
     *
     * @return string
     */
    public function getBillToAccountNumber()
    {
        return $this->billToAccountNumber;
    }

    /**
     * Sets a new billToAccountNumber
     *
     * @param string $billToAccountNumber
     * @return self
     */
    public function setBillToAccountNumber($billToAccountNumber)
    {
        $this->billToAccountNumber = $billToAccountNumber;
        return $this;
    }

    /**
     * Gets as aWBNumber
     *
     * @return string
     */
    public function getAWBNumber()
    {
        return $this->aWBNumber;
    }

    /**
     * Sets a new aWBNumber
     *
     * @param string $aWBNumber
     * @return self
     */
    public function setAWBNumber($aWBNumber)
    {
        $this->aWBNumber = $aWBNumber;
        return $this;
    }

    /**
     * Gets as numberOfPieces
     *
     * @return integer
     */
    public function getNumberOfPieces()
    {
        return $this->numberOfPieces;
    }

    /**
     * Sets a new numberOfPieces
     *
     * @param integer $numberOfPieces
     * @return self
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param float $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as weightUnit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Sets a new weightUnit
     *
     * @param string $weightUnit
     * @return self
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * Gets as globalProductCode
     *
     * @return string
     */
    public function getGlobalProductCode()
    {
        return $this->globalProductCode;
    }

    /**
     * Sets a new globalProductCode
     *
     * @param string $globalProductCode
     * @return self
     */
    public function setGlobalProductCode($globalProductCode)
    {
        $this->globalProductCode = $globalProductCode;
        return $this;
    }

    /**
     * Gets as doorTo
     *
     * @return string
     */
    public function getDoorTo()
    {
        return $this->doorTo;
    }

    /**
     * Sets a new doorTo
     *
     * @param string $doorTo
     * @return self
     */
    public function setDoorTo($doorTo)
    {
        $this->doorTo = $doorTo;
        return $this;
    }

    /**
     * Gets as dimensionUnit
     *
     * If piece information is specified, DiemnsionUnit must be gievn
     *
     * @return string
     */
    public function getDimensionUnit()
    {
        return $this->dimensionUnit;
    }

    /**
     * Sets a new dimensionUnit
     *
     * If piece information is specified, DiemnsionUnit must be gievn
     *
     * @param string $dimensionUnit
     * @return self
     */
    public function setDimensionUnit($dimensionUnit)
    {
        $this->dimensionUnit = $dimensionUnit;
        return $this;
    }

    /**
     * Gets as insuredAmount
     *
     * @return float
     */
    public function getInsuredAmount()
    {
        return $this->insuredAmount;
    }

    /**
     * Sets a new insuredAmount
     *
     * @param float $insuredAmount
     * @return self
     */
    public function setInsuredAmount($insuredAmount)
    {
        $this->insuredAmount = $insuredAmount;
        return $this;
    }

    /**
     * Gets as insuredCurrencyCode
     *
     * @return string
     */
    public function getInsuredCurrencyCode()
    {
        return $this->insuredCurrencyCode;
    }

    /**
     * Sets a new insuredCurrencyCode
     *
     * @param string $insuredCurrencyCode
     * @return self
     */
    public function setInsuredCurrencyCode($insuredCurrencyCode)
    {
        $this->insuredCurrencyCode = $insuredCurrencyCode;
        return $this;
    }

    /**
     * Gets as pieces
     *
     * @return \Dhl\PickupDataTypesGlobal\PieceType
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param \Dhl\PickupDataTypesGlobal\PieceType $pieces
     * @return self
     */
    public function setPieces(\Dhl\PickupDataTypesGlobal\PieceType $pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * Adds as specialService
     *
     * @return self
     * @param string $specialService
     */
    public function addToSpecialService($specialService)
    {
        $this->specialService[] = $specialService;
        return $this;
    }

    /**
     * isset specialService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialService($index)
    {
        return isset($this->specialService[$index]);
    }

    /**
     * unset specialService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialService($index)
    {
        unset($this->specialService[$index]);
    }

    /**
     * Gets as specialService
     *
     * @return string[]
     */
    public function getSpecialService()
    {
        return $this->specialService;
    }

    /**
     * Sets a new specialService
     *
     * @param string $specialService
     * @return self
     */
    public function setSpecialService(array $specialService)
    {
        $this->specialService = $specialService;
        return $this;
    }


}


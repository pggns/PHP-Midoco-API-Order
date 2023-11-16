<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPositions4BonusClearingRequest StructType
 * @subpackage Structs
 */
class GetBillingPositions4BonusClearingRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The bonusType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $bonusType = [];
    /**
     * Constructor method for GetBillingPositions4BonusClearingRequest
     * @uses GetBillingPositions4BonusClearingRequest::setAgencyId()
     * @uses GetBillingPositions4BonusClearingRequest::setStartDate()
     * @uses GetBillingPositions4BonusClearingRequest::setEndDate()
     * @uses GetBillingPositions4BonusClearingRequest::setBonusType()
     * @param string $agencyId
     * @param string $startDate
     * @param string $endDate
     * @param string[] $bonusType
     */
    public function __construct(?string $agencyId = null, ?string $startDate = null, ?string $endDate = null, array $bonusType = [])
    {
        $this
            ->setAgencyId($agencyId)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setBonusType($bonusType);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get bonusType value
     * @return string[]
     */
    public function getBonusType(): array
    {
        return $this->bonusType;
    }
    /**
     * This method is responsible for validating the values passed to the setBonusType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBonusType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBonusTypeForArrayConstraintsFromSetBonusType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPositions4BonusClearingRequestBonusTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getBillingPositions4BonusClearingRequestBonusTypeItem)) {
                $invalidValues[] = is_object($getBillingPositions4BonusClearingRequestBonusTypeItem) ? get_class($getBillingPositions4BonusClearingRequestBonusTypeItem) : sprintf('%s(%s)', gettype($getBillingPositions4BonusClearingRequestBonusTypeItem), var_export($getBillingPositions4BonusClearingRequestBonusTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bonusType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bonusType value
     * @throws InvalidArgumentException
     * @param string[] $bonusType
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingRequest
     */
    public function setBonusType(array $bonusType = []): self
    {
        // validation for constraint: array
        if ('' !== ($bonusTypeArrayErrorMessage = self::validateBonusTypeForArrayConstraintsFromSetBonusType($bonusType))) {
            throw new InvalidArgumentException($bonusTypeArrayErrorMessage, __LINE__);
        }
        $this->bonusType = $bonusType;
        
        return $this;
    }
    /**
     * Add item to bonusType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingRequest
     */
    public function addToBonusType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The bonusType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bonusType[] = $item;
        
        return $this;
    }
}

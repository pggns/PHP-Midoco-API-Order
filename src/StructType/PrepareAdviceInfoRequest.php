<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareAdviceInfoRequest StructType
 * @subpackage Structs
 */
class PrepareAdviceInfoRequest extends AbstractStructBase
{
    /**
     * The sellItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $sellItemId = [];
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The travelDateFrom
     * @var string|null
     */
    protected ?string $travelDateFrom = null;
    /**
     * The travelDateTo
     * @var string|null
     */
    protected ?string $travelDateTo = null;
    /**
     * The returnDateFrom
     * @var string|null
     */
    protected ?string $returnDateFrom = null;
    /**
     * The returnDateTo
     * @var string|null
     */
    protected ?string $returnDateTo = null;
    /**
     * The activeSettlement
     * @var bool|null
     */
    protected ?bool $activeSettlement = null;
    /**
     * The settlementGroup
     * @var string|null
     */
    protected ?string $settlementGroup = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for PrepareAdviceInfoRequest
     * @uses PrepareAdviceInfoRequest::setSellItemId()
     * @uses PrepareAdviceInfoRequest::setCreationDateFrom()
     * @uses PrepareAdviceInfoRequest::setCreationDateTo()
     * @uses PrepareAdviceInfoRequest::setTravelDateFrom()
     * @uses PrepareAdviceInfoRequest::setTravelDateTo()
     * @uses PrepareAdviceInfoRequest::setReturnDateFrom()
     * @uses PrepareAdviceInfoRequest::setReturnDateTo()
     * @uses PrepareAdviceInfoRequest::setActiveSettlement()
     * @uses PrepareAdviceInfoRequest::setSettlementGroup()
     * @uses PrepareAdviceInfoRequest::setSupplierId()
     * @uses PrepareAdviceInfoRequest::setUnitName()
     * @param int[] $sellItemId
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param string $travelDateFrom
     * @param string $travelDateTo
     * @param string $returnDateFrom
     * @param string $returnDateTo
     * @param bool $activeSettlement
     * @param string $settlementGroup
     * @param string $supplierId
     * @param string $unitName
     */
    public function __construct(array $sellItemId = [], ?string $creationDateFrom = null, ?string $creationDateTo = null, ?string $travelDateFrom = null, ?string $travelDateTo = null, ?string $returnDateFrom = null, ?string $returnDateTo = null, ?bool $activeSettlement = null, ?string $settlementGroup = null, ?string $supplierId = null, ?string $unitName = null)
    {
        $this
            ->setSellItemId($sellItemId)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo)
            ->setReturnDateFrom($returnDateFrom)
            ->setReturnDateTo($returnDateTo)
            ->setActiveSettlement($activeSettlement)
            ->setSettlementGroup($settlementGroup)
            ->setSupplierId($supplierId)
            ->setUnitName($unitName);
    }
    /**
     * Get sellItemId value
     * @return int[]
     */
    public function getSellItemId(): array
    {
        return $this->sellItemId;
    }
    /**
     * This method is responsible for validating the values passed to the setSellItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellItemIdForArrayConstraintsFromSetSellItemId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareAdviceInfoRequestSellItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($prepareAdviceInfoRequestSellItemIdItem) || ctype_digit($prepareAdviceInfoRequestSellItemIdItem))) {
                $invalidValues[] = is_object($prepareAdviceInfoRequestSellItemIdItem) ? get_class($prepareAdviceInfoRequestSellItemIdItem) : sprintf('%s(%s)', gettype($prepareAdviceInfoRequestSellItemIdItem), var_export($prepareAdviceInfoRequestSellItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sellItemId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sellItemId value
     * @throws InvalidArgumentException
     * @param int[] $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setSellItemId(array $sellItemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellItemIdArrayErrorMessage = self::validateSellItemIdForArrayConstraintsFromSetSellItemId($sellItemId))) {
            throw new InvalidArgumentException($sellItemIdArrayErrorMessage, __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Add item to sellItemId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function addToSellItemId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The sellItemId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sellItemId[] = $item;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get travelDateFrom value
     * @return string|null
     */
    public function getTravelDateFrom(): ?string
    {
        return $this->travelDateFrom;
    }
    /**
     * Set travelDateFrom value
     * @param string $travelDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setTravelDateFrom(?string $travelDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateFrom) && !is_string($travelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateFrom, true), gettype($travelDateFrom)), __LINE__);
        }
        $this->travelDateFrom = $travelDateFrom;
        
        return $this;
    }
    /**
     * Get travelDateTo value
     * @return string|null
     */
    public function getTravelDateTo(): ?string
    {
        return $this->travelDateTo;
    }
    /**
     * Set travelDateTo value
     * @param string $travelDateTo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setTravelDateTo(?string $travelDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateTo) && !is_string($travelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateTo, true), gettype($travelDateTo)), __LINE__);
        }
        $this->travelDateTo = $travelDateTo;
        
        return $this;
    }
    /**
     * Get returnDateFrom value
     * @return string|null
     */
    public function getReturnDateFrom(): ?string
    {
        return $this->returnDateFrom;
    }
    /**
     * Set returnDateFrom value
     * @param string $returnDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setReturnDateFrom(?string $returnDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDateFrom) && !is_string($returnDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDateFrom, true), gettype($returnDateFrom)), __LINE__);
        }
        $this->returnDateFrom = $returnDateFrom;
        
        return $this;
    }
    /**
     * Get returnDateTo value
     * @return string|null
     */
    public function getReturnDateTo(): ?string
    {
        return $this->returnDateTo;
    }
    /**
     * Set returnDateTo value
     * @param string $returnDateTo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setReturnDateTo(?string $returnDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDateTo) && !is_string($returnDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDateTo, true), gettype($returnDateTo)), __LINE__);
        }
        $this->returnDateTo = $returnDateTo;
        
        return $this;
    }
    /**
     * Get activeSettlement value
     * @return bool|null
     */
    public function getActiveSettlement(): ?bool
    {
        return $this->activeSettlement;
    }
    /**
     * Set activeSettlement value
     * @param bool $activeSettlement
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setActiveSettlement(?bool $activeSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($activeSettlement) && !is_bool($activeSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activeSettlement, true), gettype($activeSettlement)), __LINE__);
        }
        $this->activeSettlement = $activeSettlement;
        
        return $this;
    }
    /**
     * Get settlementGroup value
     * @return string|null
     */
    public function getSettlementGroup(): ?string
    {
        return $this->settlementGroup;
    }
    /**
     * Set settlementGroup value
     * @param string $settlementGroup
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setSettlementGroup(?string $settlementGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementGroup) && !is_string($settlementGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementGroup, true), gettype($settlementGroup)), __LINE__);
        }
        $this->settlementGroup = $settlementGroup;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}

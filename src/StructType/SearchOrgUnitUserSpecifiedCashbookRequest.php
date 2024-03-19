<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrgUnitUserSpecifiedCashbookRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrgUnitUserSpecifiedCashbookRequest extends AbstractStructBase
{
    /**
     * The cashBookName
     * @var string|null
     */
    protected ?string $cashBookName = null;
    /**
     * The checkSignature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $checkSignature = null;
    /**
     * The getAllUnitCashbooks
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $getAllUnitCashbooks = null;
    /**
     * Constructor method for SearchOrgUnitUserSpecifiedCashbookRequest
     * @uses SearchOrgUnitUserSpecifiedCashbookRequest::setCashBookName()
     * @uses SearchOrgUnitUserSpecifiedCashbookRequest::setCheckSignature()
     * @uses SearchOrgUnitUserSpecifiedCashbookRequest::setGetAllUnitCashbooks()
     * @param string $cashBookName
     * @param bool $checkSignature
     * @param bool $getAllUnitCashbooks
     */
    public function __construct(?string $cashBookName = null, ?bool $checkSignature = null, ?bool $getAllUnitCashbooks = false)
    {
        $this
            ->setCashBookName($cashBookName)
            ->setCheckSignature($checkSignature)
            ->setGetAllUnitCashbooks($getAllUnitCashbooks);
    }
    /**
     * Get cashBookName value
     * @return string|null
     */
    public function getCashBookName(): ?string
    {
        return $this->cashBookName;
    }
    /**
     * Set cashBookName value
     * @param string $cashBookName
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookRequest
     */
    public function setCashBookName(?string $cashBookName = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBookName) && !is_string($cashBookName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBookName, true), gettype($cashBookName)), __LINE__);
        }
        $this->cashBookName = $cashBookName;
        
        return $this;
    }
    /**
     * Get checkSignature value
     * @return bool|null
     */
    public function getCheckSignature(): ?bool
    {
        return $this->checkSignature;
    }
    /**
     * Set checkSignature value
     * @param bool $checkSignature
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookRequest
     */
    public function setCheckSignature(?bool $checkSignature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkSignature) && !is_bool($checkSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkSignature, true), gettype($checkSignature)), __LINE__);
        }
        $this->checkSignature = $checkSignature;
        
        return $this;
    }
    /**
     * Get getAllUnitCashbooks value
     * @return bool|null
     */
    public function getGetAllUnitCashbooks(): ?bool
    {
        return $this->getAllUnitCashbooks;
    }
    /**
     * Set getAllUnitCashbooks value
     * @param bool $getAllUnitCashbooks
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookRequest
     */
    public function setGetAllUnitCashbooks(?bool $getAllUnitCashbooks = false): self
    {
        // validation for constraint: boolean
        if (!is_null($getAllUnitCashbooks) && !is_bool($getAllUnitCashbooks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getAllUnitCashbooks, true), gettype($getAllUnitCashbooks)), __LINE__);
        }
        $this->getAllUnitCashbooks = $getAllUnitCashbooks;
        
        return $this;
    }
}

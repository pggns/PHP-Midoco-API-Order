<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableSupplierRequest StructType
 * @subpackage Structs
 */
class GetAvailableSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The extendedInfo
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $extendedInfo = null;
    /**
     * Constructor method for GetAvailableSupplierRequest
     * @uses GetAvailableSupplierRequest::setMidocoSupplier()
     * @uses GetAvailableSupplierRequest::setStartDate()
     * @uses GetAvailableSupplierRequest::setEndDate()
     * @uses GetAvailableSupplierRequest::setAccountId()
     * @uses GetAvailableSupplierRequest::setExtendedInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @param string $startDate
     * @param string $endDate
     * @param string $accountId
     * @param bool $extendedInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null, ?string $startDate = null, ?string $endDate = null, ?string $accountId = null, ?bool $extendedInfo = false)
    {
        $this
            ->setMidocoSupplier($midocoSupplier)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setAccountId($accountId)
            ->setExtendedInfo($extendedInfo);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierRequest
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
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierRequest
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get extendedInfo value
     * @return bool|null
     */
    public function getExtendedInfo(): ?bool
    {
        return $this->extendedInfo;
    }
    /**
     * Set extendedInfo value
     * @param bool $extendedInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableSupplierRequest
     */
    public function setExtendedInfo(?bool $extendedInfo = false): self
    {
        // validation for constraint: boolean
        if (!is_null($extendedInfo) && !is_bool($extendedInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extendedInfo, true), gettype($extendedInfo)), __LINE__);
        }
        $this->extendedInfo = $extendedInfo;
        
        return $this;
    }
}

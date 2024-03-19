<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierAutoRemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierAutoRemarkDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The remarkText
     * @var string|null
     */
    protected ?string $remarkText = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SupplierAutoRemarkDTO
     * @uses SupplierAutoRemarkDTO::setCultureId()
     * @uses SupplierAutoRemarkDTO::setPrintType()
     * @uses SupplierAutoRemarkDTO::setRemarkText()
     * @uses SupplierAutoRemarkDTO::setSupplierId()
     * @param string $cultureId
     * @param string $printType
     * @param string $remarkText
     * @param string $supplierId
     */
    public function __construct(?string $cultureId = null, ?string $printType = null, ?string $remarkText = null, ?string $supplierId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setPrintType($printType)
            ->setRemarkText($remarkText)
            ->setSupplierId($supplierId);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get remarkText value
     * @return string|null
     */
    public function getRemarkText(): ?string
    {
        return $this->remarkText;
    }
    /**
     * Set remarkText value
     * @param string $remarkText
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO
     */
    public function setRemarkText(?string $remarkText = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkText) && !is_string($remarkText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkText, true), gettype($remarkText)), __LINE__);
        }
        $this->remarkText = $remarkText;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAutoRemarkDTO
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
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkSupplierDTO StructType
 * @subpackage Structs
 */
class RemarkSupplierDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The shortId
     * @var string|null
     */
    protected ?string $shortId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for RemarkSupplierDTO
     * @uses RemarkSupplierDTO::setCultureId()
     * @uses RemarkSupplierDTO::setShortId()
     * @uses RemarkSupplierDTO::setSupplierId()
     * @param string $cultureId
     * @param string $shortId
     * @param string $supplierId
     */
    public function __construct(?string $cultureId = null, ?string $shortId = null, ?string $supplierId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setShortId($shortId)
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
     * @return \Pggns\MidocoApi\Order\StructType\RemarkSupplierDTO
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
     * Get shortId value
     * @return string|null
     */
    public function getShortId(): ?string
    {
        return $this->shortId;
    }
    /**
     * Set shortId value
     * @param string $shortId
     * @return \Pggns\MidocoApi\Order\StructType\RemarkSupplierDTO
     */
    public function setShortId(?string $shortId = null): self
    {
        // validation for constraint: string
        if (!is_null($shortId) && !is_string($shortId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortId, true), gettype($shortId)), __LINE__);
        }
        $this->shortId = $shortId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RemarkSupplierDTO
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

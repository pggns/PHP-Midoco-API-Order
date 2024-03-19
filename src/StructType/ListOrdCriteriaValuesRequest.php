<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOrdCriteriaValuesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListOrdCriteriaValuesRequest extends AbstractStructBase
{
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $cultureId;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for ListOrdCriteriaValuesRequest
     * @uses ListOrdCriteriaValuesRequest::setCultureId()
     * @uses ListOrdCriteriaValuesRequest::setTypeId()
     * @uses ListOrdCriteriaValuesRequest::setSupplierId()
     * @param string $cultureId
     * @param string $typeId
     * @param string $supplierId
     */
    public function __construct(string $cultureId, ?string $typeId = null, ?string $supplierId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setTypeId($typeId)
            ->setSupplierId($supplierId);
    }
    /**
     * Get cultureId value
     * @return string
     */
    public function getCultureId(): string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\ListOrdCriteriaValuesRequest
     */
    public function setCultureId(string $cultureId): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\ListOrdCriteriaValuesRequest
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ListOrdCriteriaValuesRequest
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

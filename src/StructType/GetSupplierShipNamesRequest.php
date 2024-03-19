<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierShipNamesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierShipNamesRequest extends AbstractStructBase
{
    /**
     * The shipNameId
     * @var int|null
     */
    protected ?int $shipNameId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The shipName
     * @var string|null
     */
    protected ?string $shipName = null;
    /**
     * Constructor method for GetSupplierShipNamesRequest
     * @uses GetSupplierShipNamesRequest::setShipNameId()
     * @uses GetSupplierShipNamesRequest::setSupplierId()
     * @uses GetSupplierShipNamesRequest::setShipName()
     * @param int $shipNameId
     * @param string $supplierId
     * @param string $shipName
     */
    public function __construct(?int $shipNameId = null, ?string $supplierId = null, ?string $shipName = null)
    {
        $this
            ->setShipNameId($shipNameId)
            ->setSupplierId($supplierId)
            ->setShipName($shipName);
    }
    /**
     * Get shipNameId value
     * @return int|null
     */
    public function getShipNameId(): ?int
    {
        return $this->shipNameId;
    }
    /**
     * Set shipNameId value
     * @param int $shipNameId
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierShipNamesRequest
     */
    public function setShipNameId(?int $shipNameId = null): self
    {
        // validation for constraint: int
        if (!is_null($shipNameId) && !(is_int($shipNameId) || ctype_digit($shipNameId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipNameId, true), gettype($shipNameId)), __LINE__);
        }
        $this->shipNameId = $shipNameId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierShipNamesRequest
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
     * Get shipName value
     * @return string|null
     */
    public function getShipName(): ?string
    {
        return $this->shipName;
    }
    /**
     * Set shipName value
     * @param string $shipName
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierShipNamesRequest
     */
    public function setShipName(?string $shipName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipName) && !is_string($shipName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipName, true), gettype($shipName)), __LINE__);
        }
        $this->shipName = $shipName;
        
        return $this;
    }
}

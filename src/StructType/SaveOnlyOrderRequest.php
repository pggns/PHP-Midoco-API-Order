<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOnlyOrderRequest StructType
 * @subpackage Structs
 */
class SaveOnlyOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The isImport
     * @var bool|null
     */
    protected ?bool $isImport = null;
    /**
     * The updateTravelIntent
     * @var bool|null
     */
    protected ?bool $updateTravelIntent = null;
    /**
     * Constructor method for SaveOnlyOrderRequest
     * @uses SaveOnlyOrderRequest::setMidocoOrder()
     * @uses SaveOnlyOrderRequest::setIsImport()
     * @uses SaveOnlyOrderRequest::setUpdateTravelIntent()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param bool $isImport
     * @param bool $updateTravelIntent
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?bool $isImport = null, ?bool $updateTravelIntent = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setIsImport($isImport)
            ->setUpdateTravelIntent($updateTravelIntent);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\SaveOnlyOrderRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get isImport value
     * @return bool|null
     */
    public function getIsImport(): ?bool
    {
        return $this->isImport;
    }
    /**
     * Set isImport value
     * @param bool $isImport
     * @return \Pggns\MidocoApi\Order\StructType\SaveOnlyOrderRequest
     */
    public function setIsImport(?bool $isImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImport) && !is_bool($isImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImport, true), gettype($isImport)), __LINE__);
        }
        $this->isImport = $isImport;
        
        return $this;
    }
    /**
     * Get updateTravelIntent value
     * @return bool|null
     */
    public function getUpdateTravelIntent(): ?bool
    {
        return $this->updateTravelIntent;
    }
    /**
     * Set updateTravelIntent value
     * @param bool $updateTravelIntent
     * @return \Pggns\MidocoApi\Order\StructType\SaveOnlyOrderRequest
     */
    public function setUpdateTravelIntent(?bool $updateTravelIntent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($updateTravelIntent) && !is_bool($updateTravelIntent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateTravelIntent, true), gettype($updateTravelIntent)), __LINE__);
        }
        $this->updateTravelIntent = $updateTravelIntent;
        
        return $this;
    }
}

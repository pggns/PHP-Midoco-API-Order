<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierRequest StructType
 * @subpackage Structs
 */
class SaveSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * The saveHistorical
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $saveHistorical = null;
    /**
     * Constructor method for SaveSupplierRequest
     * @uses SaveSupplierRequest::setMidocoSupplier()
     * @uses SaveSupplierRequest::setSaveHistorical()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @param bool $saveHistorical
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null, ?bool $saveHistorical = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier)
            ->setSaveHistorical($saveHistorical);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Get saveHistorical value
     * @return bool|null
     */
    public function getSaveHistorical(): ?bool
    {
        return $this->saveHistorical;
    }
    /**
     * Set saveHistorical value
     * @param bool $saveHistorical
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierRequest
     */
    public function setSaveHistorical(?bool $saveHistorical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($saveHistorical) && !is_bool($saveHistorical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveHistorical, true), gettype($saveHistorical)), __LINE__);
        }
        $this->saveHistorical = $saveHistorical;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingLayout StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingLayout extends BillingLayoutDTO
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The typeDescription
     * @var string|null
     */
    protected ?string $typeDescription = null;
    /**
     * Constructor method for MidocoBillingLayout
     * @uses MidocoBillingLayout::setMidocoBillingDocument()
     * @uses MidocoBillingLayout::setTypeDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param string $typeDescription
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?string $typeDescription = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setTypeDescription($typeDescription);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get typeDescription value
     * @return string|null
     */
    public function getTypeDescription(): ?string
    {
        return $this->typeDescription;
    }
    /**
     * Set typeDescription value
     * @param string $typeDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout
     */
    public function setTypeDescription(?string $typeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDescription) && !is_string($typeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDescription, true), gettype($typeDescription)), __LINE__);
        }
        $this->typeDescription = $typeDescription;
        
        return $this;
    }
}

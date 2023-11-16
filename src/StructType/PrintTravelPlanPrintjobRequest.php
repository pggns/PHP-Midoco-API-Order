<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintTravelPlanPrintjobRequest StructType
 * @subpackage Structs
 */
class PrintTravelPlanPrintjobRequest extends AbstractStructBase
{
    /**
     * The CreateTravelPlanPrintjobRequest
     * Meta information extracted from the WSDL
     * - ref: CreateTravelPlanPrintjobRequest
     * @var \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest $CreateTravelPlanPrintjobRequest = null;
    /**
     * The Preview
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $Preview = null;
    /**
     * Constructor method for PrintTravelPlanPrintjobRequest
     * @uses PrintTravelPlanPrintjobRequest::setCreateTravelPlanPrintjobRequest()
     * @uses PrintTravelPlanPrintjobRequest::setPreview()
     * @param \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest $createTravelPlanPrintjobRequest
     * @param bool $preview
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest $createTravelPlanPrintjobRequest = null, ?bool $preview = false)
    {
        $this
            ->setCreateTravelPlanPrintjobRequest($createTravelPlanPrintjobRequest)
            ->setPreview($preview);
    }
    /**
     * Get CreateTravelPlanPrintjobRequest value
     * @return \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest|null
     */
    public function getCreateTravelPlanPrintjobRequest(): ?\Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest
    {
        return $this->CreateTravelPlanPrintjobRequest;
    }
    /**
     * Set CreateTravelPlanPrintjobRequest value
     * @param \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest $createTravelPlanPrintjobRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintTravelPlanPrintjobRequest
     */
    public function setCreateTravelPlanPrintjobRequest(?\Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest $createTravelPlanPrintjobRequest = null): self
    {
        $this->CreateTravelPlanPrintjobRequest = $createTravelPlanPrintjobRequest;
        
        return $this;
    }
    /**
     * Get Preview value
     * @return bool|null
     */
    public function getPreview(): ?bool
    {
        return $this->Preview;
    }
    /**
     * Set Preview value
     * @param bool $preview
     * @return \Pggns\MidocoApi\Order\StructType\PrintTravelPlanPrintjobRequest
     */
    public function setPreview(?bool $preview = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preview) && !is_bool($preview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->Preview = $preview;
        
        return $this;
    }
}

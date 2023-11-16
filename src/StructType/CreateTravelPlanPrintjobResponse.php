<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTravelPlanPrintjobResponse StructType
 * @subpackage Structs
 */
class CreateTravelPlanPrintjobResponse extends AbstractStructBase
{
    /**
     * The PrintJobContent
     * @var string|null
     */
    protected ?string $PrintJobContent = null;
    /**
     * Constructor method for CreateTravelPlanPrintjobResponse
     * @uses CreateTravelPlanPrintjobResponse::setPrintJobContent()
     * @param string $printJobContent
     */
    public function __construct(?string $printJobContent = null)
    {
        $this
            ->setPrintJobContent($printJobContent);
    }
    /**
     * Get PrintJobContent value
     * @return string|null
     */
    public function getPrintJobContent(): ?string
    {
        return $this->PrintJobContent;
    }
    /**
     * Set PrintJobContent value
     * @param string $printJobContent
     * @return \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobResponse
     */
    public function setPrintJobContent(?string $printJobContent = null): self
    {
        // validation for constraint: string
        if (!is_null($printJobContent) && !is_string($printJobContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printJobContent, true), gettype($printJobContent)), __LINE__);
        }
        $this->PrintJobContent = $printJobContent;
        
        return $this;
    }
}

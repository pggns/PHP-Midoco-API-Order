<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintedTravelPlanDateResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getPrintedTravelPlanDate --- returns the date when the last travel plan corresponding to the given order was printed
 * @subpackage Structs
 */
class GetPrintedTravelPlanDateResponse extends AbstractStructBase
{
    /**
     * The dateLastPrinted
     * @var string|null
     */
    protected ?string $dateLastPrinted = null;
    /**
     * Constructor method for GetPrintedTravelPlanDateResponse
     * @uses GetPrintedTravelPlanDateResponse::setDateLastPrinted()
     * @param string $dateLastPrinted
     */
    public function __construct(?string $dateLastPrinted = null)
    {
        $this
            ->setDateLastPrinted($dateLastPrinted);
    }
    /**
     * Get dateLastPrinted value
     * @return string|null
     */
    public function getDateLastPrinted(): ?string
    {
        return $this->dateLastPrinted;
    }
    /**
     * Set dateLastPrinted value
     * @param string $dateLastPrinted
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedTravelPlanDateResponse
     */
    public function setDateLastPrinted(?string $dateLastPrinted = null): self
    {
        // validation for constraint: string
        if (!is_null($dateLastPrinted) && !is_string($dateLastPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateLastPrinted, true), gettype($dateLastPrinted)), __LINE__);
        }
        $this->dateLastPrinted = $dateLastPrinted;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExportChangedOrdersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExportChangedOrdersRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 500
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The markAsExported
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $markAsExported = null;
    /**
     * Constructor method for GetExportChangedOrdersRequest
     * @uses GetExportChangedOrdersRequest::setUnitName()
     * @uses GetExportChangedOrdersRequest::setNoOfResults()
     * @uses GetExportChangedOrdersRequest::setMarkAsExported()
     * @param string $unitName
     * @param int $noOfResults
     * @param bool $markAsExported
     */
    public function __construct(?string $unitName = null, ?int $noOfResults = null, ?bool $markAsExported = true)
    {
        $this
            ->setUnitName($unitName)
            ->setNoOfResults($noOfResults)
            ->setMarkAsExported($markAsExported);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetExportChangedOrdersRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Order\StructType\GetExportChangedOrdersRequest
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        // validation for constraint: maxInclusive(500)
        if (!is_null($noOfResults) && $noOfResults > 500) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 500', var_export($noOfResults, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($noOfResults) && $noOfResults < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($noOfResults, true)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get markAsExported value
     * @return bool|null
     */
    public function getMarkAsExported(): ?bool
    {
        return $this->markAsExported;
    }
    /**
     * Set markAsExported value
     * @param bool $markAsExported
     * @return \Pggns\MidocoApi\Order\StructType\GetExportChangedOrdersRequest
     */
    public function setMarkAsExported(?bool $markAsExported = true): self
    {
        // validation for constraint: boolean
        if (!is_null($markAsExported) && !is_bool($markAsExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($markAsExported, true), gettype($markAsExported)), __LINE__);
        }
        $this->markAsExported = $markAsExported;
        
        return $this;
    }
}

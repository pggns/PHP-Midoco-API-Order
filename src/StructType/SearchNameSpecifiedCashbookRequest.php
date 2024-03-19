<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchNameSpecifiedCashbookRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchNameSpecifiedCashbookRequest extends AbstractStructBase
{
    /**
     * The cashBookName
     * @var string|null
     */
    protected ?string $cashBookName = null;
    /**
     * Constructor method for SearchNameSpecifiedCashbookRequest
     * @uses SearchNameSpecifiedCashbookRequest::setCashBookName()
     * @param string $cashBookName
     */
    public function __construct(?string $cashBookName = null)
    {
        $this
            ->setCashBookName($cashBookName);
    }
    /**
     * Get cashBookName value
     * @return string|null
     */
    public function getCashBookName(): ?string
    {
        return $this->cashBookName;
    }
    /**
     * Set cashBookName value
     * @param string $cashBookName
     * @return \Pggns\MidocoApi\Order\StructType\SearchNameSpecifiedCashbookRequest
     */
    public function setCashBookName(?string $cashBookName = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBookName) && !is_string($cashBookName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBookName, true), gettype($cashBookName)), __LINE__);
        }
        $this->cashBookName = $cashBookName;
        
        return $this;
    }
}

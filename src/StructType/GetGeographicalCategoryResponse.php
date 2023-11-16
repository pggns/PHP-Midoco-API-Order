<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeographicalCategoryResponse StructType
 * @subpackage Structs
 */
class GetGeographicalCategoryResponse extends AbstractStructBase
{
    /**
     * The geographicalCategory
     * @var string|null
     */
    protected ?string $geographicalCategory = null;
    /**
     * Constructor method for GetGeographicalCategoryResponse
     * @uses GetGeographicalCategoryResponse::setGeographicalCategory()
     * @param string $geographicalCategory
     */
    public function __construct(?string $geographicalCategory = null)
    {
        $this
            ->setGeographicalCategory($geographicalCategory);
    }
    /**
     * Get geographicalCategory value
     * @return string|null
     */
    public function getGeographicalCategory(): ?string
    {
        return $this->geographicalCategory;
    }
    /**
     * Set geographicalCategory value
     * @param string $geographicalCategory
     * @return \Pggns\MidocoApi\Order\StructType\GetGeographicalCategoryResponse
     */
    public function setGeographicalCategory(?string $geographicalCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($geographicalCategory) && !is_string($geographicalCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geographicalCategory, true), gettype($geographicalCategory)), __LINE__);
        }
        $this->geographicalCategory = $geographicalCategory;
        
        return $this;
    }
}

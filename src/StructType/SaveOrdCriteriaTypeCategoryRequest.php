<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrdCriteriaTypeCategoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrdCriteriaTypeCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoOrdCriteriaTypeCategory
     * @var \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO $MidocoOrdCriteriaTypeCategory = null;
    /**
     * Constructor method for SaveOrdCriteriaTypeCategoryRequest
     * @uses SaveOrdCriteriaTypeCategoryRequest::setMidocoOrdCriteriaTypeCategory()
     * @param \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeCategory($midocoOrdCriteriaTypeCategory);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategory value
     * @return \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO|null
     */
    public function getMidocoOrdCriteriaTypeCategory(): ?\Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO
    {
        return $this->MidocoOrdCriteriaTypeCategory;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategory value
     * @param \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdCriteriaTypeCategoryRequest
     */
    public function setMidocoOrdCriteriaTypeCategory(?\Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null): self
    {
        $this->MidocoOrdCriteriaTypeCategory = $midocoOrdCriteriaTypeCategory;
        
        return $this;
    }
}

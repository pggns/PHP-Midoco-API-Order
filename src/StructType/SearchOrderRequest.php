<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoSearchOrderCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSearchOrderCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType $MidocoSearchOrderCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * The searchType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $searchType = null;
    /**
     * Constructor method for SearchOrderRequest
     * @uses SearchOrderRequest::setMidocoSearchOrderCriteria()
     * @uses SearchOrderRequest::setMaxReturned()
     * @uses SearchOrderRequest::setSearchType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType $midocoSearchOrderCriteria
     * @param int $maxReturned
     * @param string $searchType
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType $midocoSearchOrderCriteria = null, ?int $maxReturned = null, ?string $searchType = null)
    {
        $this
            ->setMidocoSearchOrderCriteria($midocoSearchOrderCriteria)
            ->setMaxReturned($maxReturned)
            ->setSearchType($searchType);
    }
    /**
     * Get MidocoSearchOrderCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType|null
     */
    public function getMidocoSearchOrderCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType
    {
        return $this->MidocoSearchOrderCriteria;
    }
    /**
     * Set MidocoSearchOrderCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType $midocoSearchOrderCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderRequest
     */
    public function setMidocoSearchOrderCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType $midocoSearchOrderCriteria = null): self
    {
        $this->MidocoSearchOrderCriteria = $midocoSearchOrderCriteria;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
    /**
     * Get searchType value
     * @return string|null
     */
    public function getSearchType(): ?string
    {
        return $this->searchType;
    }
    /**
     * Set searchType value
     * @uses \Pggns\MidocoApi\Order\EnumType\SearchType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\SearchType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $searchType
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderRequest
     */
    public function setSearchType(?string $searchType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\SearchType::valueIsValid($searchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\SearchType', is_array($searchType) ? implode(', ', $searchType) : var_export($searchType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\SearchType::getValidValues())), __LINE__);
        }
        $this->searchType = $searchType;
        
        return $this;
    }
}

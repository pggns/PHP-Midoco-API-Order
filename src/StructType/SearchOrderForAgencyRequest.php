<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderForAgencyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderForAgencyRequest extends AbstractStructBase
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
     * Constructor method for SearchOrderForAgencyRequest
     * @uses SearchOrderForAgencyRequest::setMidocoSearchOrderCriteria()
     * @uses SearchOrderForAgencyRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType $midocoSearchOrderCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSearchOrderCriteriaType $midocoSearchOrderCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSearchOrderCriteria($midocoSearchOrderCriteria)
            ->setMaxReturned($maxReturned);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyRequest
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
}

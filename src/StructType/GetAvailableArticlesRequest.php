<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableArticlesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableArticlesRequest extends AbstractStructBase
{
    /**
     * The MidocoArticle
     * Meta information extracted from the WSDL
     * - ref: MidocoArticle
     * @var \Pggns\MidocoApi\Order\StructType\ArticleDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ArticleDTO $MidocoArticle = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for GetAvailableArticlesRequest
     * @uses GetAvailableArticlesRequest::setMidocoArticle()
     * @uses GetAvailableArticlesRequest::setStartDate()
     * @uses GetAvailableArticlesRequest::setEndDate()
     * @param \Pggns\MidocoApi\Order\StructType\ArticleDTO $midocoArticle
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\ArticleDTO $midocoArticle = null, ?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setMidocoArticle($midocoArticle)
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get MidocoArticle value
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO|null
     */
    public function getMidocoArticle(): ?\Pggns\MidocoApi\Order\StructType\ArticleDTO
    {
        return $this->MidocoArticle;
    }
    /**
     * Set MidocoArticle value
     * @param \Pggns\MidocoApi\Order\StructType\ArticleDTO $midocoArticle
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableArticlesRequest
     */
    public function setMidocoArticle(?\Pggns\MidocoApi\Order\StructType\ArticleDTO $midocoArticle = null): self
    {
        $this->MidocoArticle = $midocoArticle;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableArticlesRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableArticlesRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
}

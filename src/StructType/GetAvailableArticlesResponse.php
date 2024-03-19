<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableArticlesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableArticlesResponse extends AbstractStructBase
{
    /**
     * The MidocoArticle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoArticle
     * @var \Pggns\MidocoApi\Order\StructType\ArticleDTO[]
     */
    protected ?array $MidocoArticle = null;
    /**
     * Constructor method for GetAvailableArticlesResponse
     * @uses GetAvailableArticlesResponse::setMidocoArticle()
     * @param \Pggns\MidocoApi\Order\StructType\ArticleDTO[] $midocoArticle
     */
    public function __construct(?array $midocoArticle = null)
    {
        $this
            ->setMidocoArticle($midocoArticle);
    }
    /**
     * Get MidocoArticle value
     * @return \Pggns\MidocoApi\Order\StructType\ArticleDTO[]
     */
    public function getMidocoArticle(): ?array
    {
        return $this->MidocoArticle;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoArticle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoArticle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoArticleForArrayConstraintFromSetMidocoArticle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableArticlesResponseMidocoArticleItem) {
            // validation for constraint: itemType
            if (!$getAvailableArticlesResponseMidocoArticleItem instanceof \Pggns\MidocoApi\Order\StructType\ArticleDTO) {
                $invalidValues[] = is_object($getAvailableArticlesResponseMidocoArticleItem) ? get_class($getAvailableArticlesResponseMidocoArticleItem) : sprintf('%s(%s)', gettype($getAvailableArticlesResponseMidocoArticleItem), var_export($getAvailableArticlesResponseMidocoArticleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoArticle property can only contain items of type \Pggns\MidocoApi\Order\StructType\ArticleDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoArticle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ArticleDTO[] $midocoArticle
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableArticlesResponse
     */
    public function setMidocoArticle(?array $midocoArticle = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoArticleArrayErrorMessage = self::validateMidocoArticleForArrayConstraintFromSetMidocoArticle($midocoArticle))) {
            throw new InvalidArgumentException($midocoArticleArrayErrorMessage, __LINE__);
        }
        $this->MidocoArticle = $midocoArticle;
        
        return $this;
    }
    /**
     * Add item to MidocoArticle value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ArticleDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableArticlesResponse
     */
    public function addToMidocoArticle(\Pggns\MidocoApi\Order\StructType\ArticleDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ArticleDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoArticle property can only contain items of type \Pggns\MidocoApi\Order\StructType\ArticleDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoArticle[] = $item;
        
        return $this;
    }
}

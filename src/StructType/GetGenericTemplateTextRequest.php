<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGenericTemplateTextRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGenericTemplateTextRequest extends AbstractStructBase
{
    /**
     * The bodyTemplateId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $bodyTemplateId;
    /**
     * The subjectTemplateId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $subjectTemplateId;
    /**
     * The MidocoTemplateParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTemplateParam
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam[]
     */
    protected ?array $MidocoTemplateParam = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for GetGenericTemplateTextRequest
     * @uses GetGenericTemplateTextRequest::setBodyTemplateId()
     * @uses GetGenericTemplateTextRequest::setSubjectTemplateId()
     * @uses GetGenericTemplateTextRequest::setMidocoTemplateParam()
     * @uses GetGenericTemplateTextRequest::setOrderId()
     * @uses GetGenericTemplateTextRequest::setCustomerId()
     * @param string $bodyTemplateId
     * @param string $subjectTemplateId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam[] $midocoTemplateParam
     * @param int $orderId
     * @param int $customerId
     */
    public function __construct(string $bodyTemplateId, string $subjectTemplateId, ?array $midocoTemplateParam = null, ?int $orderId = null, ?int $customerId = null)
    {
        $this
            ->setBodyTemplateId($bodyTemplateId)
            ->setSubjectTemplateId($subjectTemplateId)
            ->setMidocoTemplateParam($midocoTemplateParam)
            ->setOrderId($orderId)
            ->setCustomerId($customerId);
    }
    /**
     * Get bodyTemplateId value
     * @return string
     */
    public function getBodyTemplateId(): string
    {
        return $this->bodyTemplateId;
    }
    /**
     * Set bodyTemplateId value
     * @param string $bodyTemplateId
     * @return \Pggns\MidocoApi\Order\StructType\GetGenericTemplateTextRequest
     */
    public function setBodyTemplateId(string $bodyTemplateId): self
    {
        // validation for constraint: string
        if (!is_null($bodyTemplateId) && !is_string($bodyTemplateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bodyTemplateId, true), gettype($bodyTemplateId)), __LINE__);
        }
        $this->bodyTemplateId = $bodyTemplateId;
        
        return $this;
    }
    /**
     * Get subjectTemplateId value
     * @return string
     */
    public function getSubjectTemplateId(): string
    {
        return $this->subjectTemplateId;
    }
    /**
     * Set subjectTemplateId value
     * @param string $subjectTemplateId
     * @return \Pggns\MidocoApi\Order\StructType\GetGenericTemplateTextRequest
     */
    public function setSubjectTemplateId(string $subjectTemplateId): self
    {
        // validation for constraint: string
        if (!is_null($subjectTemplateId) && !is_string($subjectTemplateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectTemplateId, true), gettype($subjectTemplateId)), __LINE__);
        }
        $this->subjectTemplateId = $subjectTemplateId;
        
        return $this;
    }
    /**
     * Get MidocoTemplateParam value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam[]
     */
    public function getMidocoTemplateParam(): ?array
    {
        return $this->MidocoTemplateParam;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTemplateParam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTemplateParam method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTemplateParamForArrayConstraintFromSetMidocoTemplateParam(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGenericTemplateTextRequestMidocoTemplateParamItem) {
            // validation for constraint: itemType
            if (!$getGenericTemplateTextRequestMidocoTemplateParamItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam) {
                $invalidValues[] = is_object($getGenericTemplateTextRequestMidocoTemplateParamItem) ? get_class($getGenericTemplateTextRequestMidocoTemplateParamItem) : sprintf('%s(%s)', gettype($getGenericTemplateTextRequestMidocoTemplateParamItem), var_export($getGenericTemplateTextRequestMidocoTemplateParamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTemplateParam property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTemplateParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam[] $midocoTemplateParam
     * @return \Pggns\MidocoApi\Order\StructType\GetGenericTemplateTextRequest
     */
    public function setMidocoTemplateParam(?array $midocoTemplateParam = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTemplateParamArrayErrorMessage = self::validateMidocoTemplateParamForArrayConstraintFromSetMidocoTemplateParam($midocoTemplateParam))) {
            throw new InvalidArgumentException($midocoTemplateParamArrayErrorMessage, __LINE__);
        }
        $this->MidocoTemplateParam = $midocoTemplateParam;
        
        return $this;
    }
    /**
     * Add item to MidocoTemplateParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam $item
     * @return \Pggns\MidocoApi\Order\StructType\GetGenericTemplateTextRequest
     */
    public function addToMidocoTemplateParam(\Pggns\MidocoApi\Order\StructType\MidocoTemplateParam $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam) {
            throw new InvalidArgumentException(sprintf('The MidocoTemplateParam property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTemplateParam, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTemplateParam[] = $item;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetGenericTemplateTextRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\GetGenericTemplateTextRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateBookingTextForPayByLinkResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateBookingTextForPayByLinkResponse extends AbstractStructBase
{
    /**
     * The orderDescription
     * @var string|null
     */
    protected ?string $orderDescription = null;
    /**
     * The attachmentDescription
     * @var string|null
     */
    protected ?string $attachmentDescription = null;
    /**
     * The attachmentPdf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $attachmentPdf = null;
    /**
     * Constructor method for GenerateBookingTextForPayByLinkResponse
     * @uses GenerateBookingTextForPayByLinkResponse::setOrderDescription()
     * @uses GenerateBookingTextForPayByLinkResponse::setAttachmentDescription()
     * @uses GenerateBookingTextForPayByLinkResponse::setAttachmentPdf()
     * @param string $orderDescription
     * @param string $attachmentDescription
     * @param string[] $attachmentPdf
     */
    public function __construct(?string $orderDescription = null, ?string $attachmentDescription = null, ?array $attachmentPdf = null)
    {
        $this
            ->setOrderDescription($orderDescription)
            ->setAttachmentDescription($attachmentDescription)
            ->setAttachmentPdf($attachmentPdf);
    }
    /**
     * Get orderDescription value
     * @return string|null
     */
    public function getOrderDescription(): ?string
    {
        return $this->orderDescription;
    }
    /**
     * Set orderDescription value
     * @param string $orderDescription
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkResponse
     */
    public function setOrderDescription(?string $orderDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($orderDescription) && !is_string($orderDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDescription, true), gettype($orderDescription)), __LINE__);
        }
        $this->orderDescription = $orderDescription;
        
        return $this;
    }
    /**
     * Get attachmentDescription value
     * @return string|null
     */
    public function getAttachmentDescription(): ?string
    {
        return $this->attachmentDescription;
    }
    /**
     * Set attachmentDescription value
     * @param string $attachmentDescription
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkResponse
     */
    public function setAttachmentDescription(?string $attachmentDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($attachmentDescription) && !is_string($attachmentDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachmentDescription, true), gettype($attachmentDescription)), __LINE__);
        }
        $this->attachmentDescription = $attachmentDescription;
        
        return $this;
    }
    /**
     * Get attachmentPdf value
     * @return string[]
     */
    public function getAttachmentPdf(): ?array
    {
        return $this->attachmentPdf;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAttachmentPdf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachmentPdf method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentPdfForArrayConstraintFromSetAttachmentPdf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $generateBookingTextForPayByLinkResponseAttachmentPdfItem) {
            // validation for constraint: itemType
            if (!is_string($generateBookingTextForPayByLinkResponseAttachmentPdfItem)) {
                $invalidValues[] = is_object($generateBookingTextForPayByLinkResponseAttachmentPdfItem) ? get_class($generateBookingTextForPayByLinkResponseAttachmentPdfItem) : sprintf('%s(%s)', gettype($generateBookingTextForPayByLinkResponseAttachmentPdfItem), var_export($generateBookingTextForPayByLinkResponseAttachmentPdfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attachmentPdf property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attachmentPdf value
     * @throws InvalidArgumentException
     * @param string[] $attachmentPdf
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkResponse
     */
    public function setAttachmentPdf(?array $attachmentPdf = null): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentPdfArrayErrorMessage = self::validateAttachmentPdfForArrayConstraintFromSetAttachmentPdf($attachmentPdf))) {
            throw new InvalidArgumentException($attachmentPdfArrayErrorMessage, __LINE__);
        }
        $this->attachmentPdf = $attachmentPdf;
        
        return $this;
    }
    /**
     * Add item to attachmentPdf value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkResponse
     */
    public function addToAttachmentPdf(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The attachmentPdf property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attachmentPdf[] = $item;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotifyTouPacFileChangeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NotifyTouPacFileChangeResponse extends AbstractStructBase
{
    /**
     * The ImportTouPacFileResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ImportTouPacFileResponse
     * @var \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse[]
     */
    protected ?array $ImportTouPacFileResponse = null;
    /**
     * The ImportHandlerResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ImportHandlerResponseMessage
     * @var \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[]
     */
    protected ?array $ImportHandlerResponseMessage = null;
    /**
     * Constructor method for NotifyTouPacFileChangeResponse
     * @uses NotifyTouPacFileChangeResponse::setImportTouPacFileResponse()
     * @uses NotifyTouPacFileChangeResponse::setImportHandlerResponseMessage()
     * @param \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse[] $importTouPacFileResponse
     * @param \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[] $importHandlerResponseMessage
     */
    public function __construct(?array $importTouPacFileResponse = null, ?array $importHandlerResponseMessage = null)
    {
        $this
            ->setImportTouPacFileResponse($importTouPacFileResponse)
            ->setImportHandlerResponseMessage($importHandlerResponseMessage);
    }
    /**
     * Get ImportTouPacFileResponse value
     * @return \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse[]
     */
    public function getImportTouPacFileResponse(): ?array
    {
        return $this->ImportTouPacFileResponse;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setImportTouPacFileResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImportTouPacFileResponse method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImportTouPacFileResponseForArrayConstraintFromSetImportTouPacFileResponse(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $notifyTouPacFileChangeResponseImportTouPacFileResponseItem) {
            // validation for constraint: itemType
            if (!$notifyTouPacFileChangeResponseImportTouPacFileResponseItem instanceof \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse) {
                $invalidValues[] = is_object($notifyTouPacFileChangeResponseImportTouPacFileResponseItem) ? get_class($notifyTouPacFileChangeResponseImportTouPacFileResponseItem) : sprintf('%s(%s)', gettype($notifyTouPacFileChangeResponseImportTouPacFileResponseItem), var_export($notifyTouPacFileChangeResponseImportTouPacFileResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ImportTouPacFileResponse property can only contain items of type \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ImportTouPacFileResponse value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse[] $importTouPacFileResponse
     * @return \Pggns\MidocoApi\Order\StructType\NotifyTouPacFileChangeResponse
     */
    public function setImportTouPacFileResponse(?array $importTouPacFileResponse = null): self
    {
        // validation for constraint: array
        if ('' !== ($importTouPacFileResponseArrayErrorMessage = self::validateImportTouPacFileResponseForArrayConstraintFromSetImportTouPacFileResponse($importTouPacFileResponse))) {
            throw new InvalidArgumentException($importTouPacFileResponseArrayErrorMessage, __LINE__);
        }
        $this->ImportTouPacFileResponse = $importTouPacFileResponse;
        
        return $this;
    }
    /**
     * Add item to ImportTouPacFileResponse value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse $item
     * @return \Pggns\MidocoApi\Order\StructType\NotifyTouPacFileChangeResponse
     */
    public function addToImportTouPacFileResponse(\Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse) {
            throw new InvalidArgumentException(sprintf('The ImportTouPacFileResponse property can only contain items of type \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ImportTouPacFileResponse[] = $item;
        
        return $this;
    }
    /**
     * Get ImportHandlerResponseMessage value
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[]
     */
    public function getImportHandlerResponseMessage(): ?array
    {
        return $this->ImportHandlerResponseMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setImportHandlerResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImportHandlerResponseMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImportHandlerResponseMessageForArrayConstraintFromSetImportHandlerResponseMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $notifyTouPacFileChangeResponseImportHandlerResponseMessageItem) {
            // validation for constraint: itemType
            if (!$notifyTouPacFileChangeResponseImportHandlerResponseMessageItem instanceof \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage) {
                $invalidValues[] = is_object($notifyTouPacFileChangeResponseImportHandlerResponseMessageItem) ? get_class($notifyTouPacFileChangeResponseImportHandlerResponseMessageItem) : sprintf('%s(%s)', gettype($notifyTouPacFileChangeResponseImportHandlerResponseMessageItem), var_export($notifyTouPacFileChangeResponseImportHandlerResponseMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ImportHandlerResponseMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ImportHandlerResponseMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[] $importHandlerResponseMessage
     * @return \Pggns\MidocoApi\Order\StructType\NotifyTouPacFileChangeResponse
     */
    public function setImportHandlerResponseMessage(?array $importHandlerResponseMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($importHandlerResponseMessageArrayErrorMessage = self::validateImportHandlerResponseMessageForArrayConstraintFromSetImportHandlerResponseMessage($importHandlerResponseMessage))) {
            throw new InvalidArgumentException($importHandlerResponseMessageArrayErrorMessage, __LINE__);
        }
        $this->ImportHandlerResponseMessage = $importHandlerResponseMessage;
        
        return $this;
    }
    /**
     * Add item to ImportHandlerResponseMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage $item
     * @return \Pggns\MidocoApi\Order\StructType\NotifyTouPacFileChangeResponse
     */
    public function addToImportHandlerResponseMessage(\Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage) {
            throw new InvalidArgumentException(sprintf('The ImportHandlerResponseMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ImportHandlerResponseMessage[] = $item;
        
        return $this;
    }
}

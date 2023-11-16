<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintSelectsRequest StructType
 * @subpackage Structs
 */
class GetPrintSelectsRequest extends AbstractStructBase
{
    /**
     * The handler
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $handler = [];
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for GetPrintSelectsRequest
     * @uses GetPrintSelectsRequest::setHandler()
     * @uses GetPrintSelectsRequest::setUnitName()
     * @uses GetPrintSelectsRequest::setCultureId()
     * @param string[] $handler
     * @param string $unitName
     * @param string $cultureId
     */
    public function __construct(array $handler = [], ?string $unitName = null, ?string $cultureId = null)
    {
        $this
            ->setHandler($handler)
            ->setUnitName($unitName)
            ->setCultureId($cultureId);
    }
    /**
     * Get handler value
     * @return string[]
     */
    public function getHandler(): array
    {
        return $this->handler;
    }
    /**
     * This method is responsible for validating the values passed to the setHandler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHandler method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHandlerForArrayConstraintsFromSetHandler(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsRequestHandlerItem) {
            // validation for constraint: itemType
            if (!is_string($getPrintSelectsRequestHandlerItem)) {
                $invalidValues[] = is_object($getPrintSelectsRequestHandlerItem) ? get_class($getPrintSelectsRequestHandlerItem) : sprintf('%s(%s)', gettype($getPrintSelectsRequestHandlerItem), var_export($getPrintSelectsRequestHandlerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The handler property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set handler value
     * @throws InvalidArgumentException
     * @param string[] $handler
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsRequest
     */
    public function setHandler(array $handler = []): self
    {
        // validation for constraint: array
        if ('' !== ($handlerArrayErrorMessage = self::validateHandlerForArrayConstraintsFromSetHandler($handler))) {
            throw new InvalidArgumentException($handlerArrayErrorMessage, __LINE__);
        }
        $this->handler = $handler;
        
        return $this;
    }
    /**
     * Add item to handler value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsRequest
     */
    public function addToHandler(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The handler property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->handler[] = $item;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
}

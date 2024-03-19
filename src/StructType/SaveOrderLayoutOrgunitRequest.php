<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderLayoutOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderLayoutOrgunitRequest extends AbstractStructBase
{
    /**
     * The NotAllowedOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: NotAllowedOrgunit
     * @var \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO[]
     */
    protected ?array $NotAllowedOrgunit = null;
    /**
     * The asNeighbor
     * @var bool|null
     */
    protected ?bool $asNeighbor = null;
    /**
     * Constructor method for SaveOrderLayoutOrgunitRequest
     * @uses SaveOrderLayoutOrgunitRequest::setNotAllowedOrgunit()
     * @uses SaveOrderLayoutOrgunitRequest::setAsNeighbor()
     * @param \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO[] $notAllowedOrgunit
     * @param bool $asNeighbor
     */
    public function __construct(?array $notAllowedOrgunit = null, ?bool $asNeighbor = null)
    {
        $this
            ->setNotAllowedOrgunit($notAllowedOrgunit)
            ->setAsNeighbor($asNeighbor);
    }
    /**
     * Get NotAllowedOrgunit value
     * @return \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO[]
     */
    public function getNotAllowedOrgunit(): ?array
    {
        return $this->NotAllowedOrgunit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNotAllowedOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotAllowedOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotAllowedOrgunitForArrayConstraintFromSetNotAllowedOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveOrderLayoutOrgunitRequestNotAllowedOrgunitItem) {
            // validation for constraint: itemType
            if (!$saveOrderLayoutOrgunitRequestNotAllowedOrgunitItem instanceof \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO) {
                $invalidValues[] = is_object($saveOrderLayoutOrgunitRequestNotAllowedOrgunitItem) ? get_class($saveOrderLayoutOrgunitRequestNotAllowedOrgunitItem) : sprintf('%s(%s)', gettype($saveOrderLayoutOrgunitRequestNotAllowedOrgunitItem), var_export($saveOrderLayoutOrgunitRequestNotAllowedOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NotAllowedOrgunit property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NotAllowedOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO[] $notAllowedOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderLayoutOrgunitRequest
     */
    public function setNotAllowedOrgunit(?array $notAllowedOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($notAllowedOrgunitArrayErrorMessage = self::validateNotAllowedOrgunitForArrayConstraintFromSetNotAllowedOrgunit($notAllowedOrgunit))) {
            throw new InvalidArgumentException($notAllowedOrgunitArrayErrorMessage, __LINE__);
        }
        $this->NotAllowedOrgunit = $notAllowedOrgunit;
        
        return $this;
    }
    /**
     * Add item to NotAllowedOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderLayoutOrgunitRequest
     */
    public function addToNotAllowedOrgunit(\Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO) {
            throw new InvalidArgumentException(sprintf('The NotAllowedOrgunit property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NotAllowedOrgunit[] = $item;
        
        return $this;
    }
    /**
     * Get asNeighbor value
     * @return bool|null
     */
    public function getAsNeighbor(): ?bool
    {
        return $this->asNeighbor;
    }
    /**
     * Set asNeighbor value
     * @param bool $asNeighbor
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderLayoutOrgunitRequest
     */
    public function setAsNeighbor(?bool $asNeighbor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($asNeighbor) && !is_bool($asNeighbor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($asNeighbor, true), gettype($asNeighbor)), __LINE__);
        }
        $this->asNeighbor = $asNeighbor;
        
        return $this;
    }
}

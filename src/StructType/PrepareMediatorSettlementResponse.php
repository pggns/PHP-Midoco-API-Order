<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareMediatorSettlementResponse StructType
 * @subpackage Structs
 */
class PrepareMediatorSettlementResponse extends AbstractStructBase
{
    /**
     * The MediatorId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $MediatorId = [];
    /**
     * The emailSubject
     * @var string|null
     */
    protected ?string $emailSubject = null;
    /**
     * The emailText
     * @var string|null
     */
    protected ?string $emailText = null;
    /**
     * Constructor method for PrepareMediatorSettlementResponse
     * @uses PrepareMediatorSettlementResponse::setMediatorId()
     * @uses PrepareMediatorSettlementResponse::setEmailSubject()
     * @uses PrepareMediatorSettlementResponse::setEmailText()
     * @param string[] $mediatorId
     * @param string $emailSubject
     * @param string $emailText
     */
    public function __construct(array $mediatorId = [], ?string $emailSubject = null, ?string $emailText = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setEmailSubject($emailSubject)
            ->setEmailText($emailText);
    }
    /**
     * Get MediatorId value
     * @return string[]
     */
    public function getMediatorId(): array
    {
        return $this->MediatorId;
    }
    /**
     * This method is responsible for validating the values passed to the setMediatorId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorIdForArrayConstraintsFromSetMediatorId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareMediatorSettlementResponseMediatorIdItem) {
            // validation for constraint: itemType
            if (!is_string($prepareMediatorSettlementResponseMediatorIdItem)) {
                $invalidValues[] = is_object($prepareMediatorSettlementResponseMediatorIdItem) ? get_class($prepareMediatorSettlementResponseMediatorIdItem) : sprintf('%s(%s)', gettype($prepareMediatorSettlementResponseMediatorIdItem), var_export($prepareMediatorSettlementResponseMediatorIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediatorId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediatorId value
     * @throws InvalidArgumentException
     * @param string[] $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementResponse
     */
    public function setMediatorId(array $mediatorId = []): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorIdArrayErrorMessage = self::validateMediatorIdForArrayConstraintsFromSetMediatorId($mediatorId))) {
            throw new InvalidArgumentException($mediatorIdArrayErrorMessage, __LINE__);
        }
        $this->MediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Add item to MediatorId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementResponse
     */
    public function addToMediatorId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MediatorId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MediatorId[] = $item;
        
        return $this;
    }
    /**
     * Get emailSubject value
     * @return string|null
     */
    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }
    /**
     * Set emailSubject value
     * @param string $emailSubject
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementResponse
     */
    public function setEmailSubject(?string $emailSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($emailSubject) && !is_string($emailSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSubject, true), gettype($emailSubject)), __LINE__);
        }
        $this->emailSubject = $emailSubject;
        
        return $this;
    }
    /**
     * Get emailText value
     * @return string|null
     */
    public function getEmailText(): ?string
    {
        return $this->emailText;
    }
    /**
     * Set emailText value
     * @param string $emailText
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMediatorSettlementResponse
     */
    public function setEmailText(?string $emailText = null): self
    {
        // validation for constraint: string
        if (!is_null($emailText) && !is_string($emailText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailText, true), gettype($emailText)), __LINE__);
        }
        $this->emailText = $emailText;
        
        return $this;
    }
}

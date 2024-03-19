<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCcCard StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmCcCard extends CrmCcCardDTO
{
    /**
     * The MidocoCcToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCcToken
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCcToken[]
     */
    protected ?array $MidocoCcToken = null;
    /**
     * The bonusType
     * @var string|null
     */
    protected ?string $bonusType = null;
    /**
     * The creditCardHiddenNumber
     * @var string|null
     */
    protected ?string $creditCardHiddenNumber = null;
    /**
     * The cvc
     * Meta information extracted from the WSDL
     * - documentation: this field won't be saved
     * @var string|null
     */
    protected ?string $cvc = null;
    /**
     * The forcedPaymentCard
     * Meta information extracted from the WSDL
     * - documentation: forced payment card in customer Settings
     * @var bool|null
     */
    protected ?bool $forcedPaymentCard = null;
    /**
     * Constructor method for MidocoCrmCcCard
     * @uses MidocoCrmCcCard::setMidocoCcToken()
     * @uses MidocoCrmCcCard::setBonusType()
     * @uses MidocoCrmCcCard::setCreditCardHiddenNumber()
     * @uses MidocoCrmCcCard::setCvc()
     * @uses MidocoCrmCcCard::setForcedPaymentCard()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken[] $midocoCcToken
     * @param string $bonusType
     * @param string $creditCardHiddenNumber
     * @param string $cvc
     * @param bool $forcedPaymentCard
     */
    public function __construct(?array $midocoCcToken = null, ?string $bonusType = null, ?string $creditCardHiddenNumber = null, ?string $cvc = null, ?bool $forcedPaymentCard = null)
    {
        $this
            ->setMidocoCcToken($midocoCcToken)
            ->setBonusType($bonusType)
            ->setCreditCardHiddenNumber($creditCardHiddenNumber)
            ->setCvc($cvc)
            ->setForcedPaymentCard($forcedPaymentCard);
    }
    /**
     * Get MidocoCcToken value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCcToken[]
     */
    public function getMidocoCcToken(): ?array
    {
        return $this->MidocoCcToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCcToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcTokenForArrayConstraintFromSetMidocoCcToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmCcCardMidocoCcTokenItem) {
            // validation for constraint: itemType
            if (!$midocoCrmCcCardMidocoCcTokenItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcToken) {
                $invalidValues[] = is_object($midocoCrmCcCardMidocoCcTokenItem) ? get_class($midocoCrmCcCardMidocoCcTokenItem) : sprintf('%s(%s)', gettype($midocoCrmCcCardMidocoCcTokenItem), var_export($midocoCrmCcCardMidocoCcTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken[] $midocoCcToken
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard
     */
    public function setMidocoCcToken(?array $midocoCcToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcTokenArrayErrorMessage = self::validateMidocoCcTokenForArrayConstraintFromSetMidocoCcToken($midocoCcToken))) {
            throw new InvalidArgumentException($midocoCcTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcToken = $midocoCcToken;
        
        return $this;
    }
    /**
     * Add item to MidocoCcToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCcToken $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard
     */
    public function addToMidocoCcToken(\Pggns\MidocoApi\Order\StructType\MidocoCcToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCcToken) {
            throw new InvalidArgumentException(sprintf('The MidocoCcToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCcToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcToken[] = $item;
        
        return $this;
    }
    /**
     * Get bonusType value
     * @return string|null
     */
    public function getBonusType(): ?string
    {
        return $this->bonusType;
    }
    /**
     * Set bonusType value
     * @param string $bonusType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard
     */
    public function setBonusType(?string $bonusType = null): self
    {
        // validation for constraint: string
        if (!is_null($bonusType) && !is_string($bonusType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bonusType, true), gettype($bonusType)), __LINE__);
        }
        $this->bonusType = $bonusType;
        
        return $this;
    }
    /**
     * Get creditCardHiddenNumber value
     * @return string|null
     */
    public function getCreditCardHiddenNumber(): ?string
    {
        return $this->creditCardHiddenNumber;
    }
    /**
     * Set creditCardHiddenNumber value
     * @param string $creditCardHiddenNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard
     */
    public function setCreditCardHiddenNumber(?string $creditCardHiddenNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardHiddenNumber) && !is_string($creditCardHiddenNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardHiddenNumber, true), gettype($creditCardHiddenNumber)), __LINE__);
        }
        $this->creditCardHiddenNumber = $creditCardHiddenNumber;
        
        return $this;
    }
    /**
     * Get cvc value
     * @return string|null
     */
    public function getCvc(): ?string
    {
        return $this->cvc;
    }
    /**
     * Set cvc value
     * @param string $cvc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard
     */
    public function setCvc(?string $cvc = null): self
    {
        // validation for constraint: string
        if (!is_null($cvc) && !is_string($cvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvc, true), gettype($cvc)), __LINE__);
        }
        $this->cvc = $cvc;
        
        return $this;
    }
    /**
     * Get forcedPaymentCard value
     * @return bool|null
     */
    public function getForcedPaymentCard(): ?bool
    {
        return $this->forcedPaymentCard;
    }
    /**
     * Set forcedPaymentCard value
     * @param bool $forcedPaymentCard
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard
     */
    public function setForcedPaymentCard(?bool $forcedPaymentCard = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forcedPaymentCard) && !is_bool($forcedPaymentCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forcedPaymentCard, true), gettype($forcedPaymentCard)), __LINE__);
        }
        $this->forcedPaymentCard = $forcedPaymentCard;
        
        return $this;
    }
}

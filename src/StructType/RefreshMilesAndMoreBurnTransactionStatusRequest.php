<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshMilesAndMoreBurnTransactionStatusRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request the latest transaction's information via HTTP GET, and update MilesAndMoreBurnTransaction and billing if necessary.
 * @subpackage Structs
 */
class RefreshMilesAndMoreBurnTransactionStatusRequest extends AbstractStructBase
{
    /**
     * The billingDocumentId
     * Meta information extracted from the WSDL
     * - documentation: The Midoco billing document id, for which all transactions shall be refreshed
     * - base: xs:integer
     * - choice: billingDocumentId | billingPositionId | MilesAndMoreCallbackParameters
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $billingDocumentId = null;
    /**
     * The billingPositionId
     * Meta information extracted from the WSDL
     * - documentation: The Midoco billing position id
     * - base: xs:integer
     * - choice: billingDocumentId | billingPositionId | MilesAndMoreCallbackParameters
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $billingPositionId = null;
    /**
     * The MilesAndMoreCallbackParameters
     * Meta information extracted from the WSDL
     * - choice: billingDocumentId | billingPositionId | MilesAndMoreCallbackParameters
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters $MilesAndMoreCallbackParameters = null;
    /**
     * Constructor method for RefreshMilesAndMoreBurnTransactionStatusRequest
     * @uses RefreshMilesAndMoreBurnTransactionStatusRequest::setBillingDocumentId()
     * @uses RefreshMilesAndMoreBurnTransactionStatusRequest::setBillingPositionId()
     * @uses RefreshMilesAndMoreBurnTransactionStatusRequest::setMilesAndMoreCallbackParameters()
     * @param int $billingDocumentId
     * @param int $billingPositionId
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters $milesAndMoreCallbackParameters
     */
    public function __construct(?int $billingDocumentId = null, ?int $billingPositionId = null, ?\Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters $milesAndMoreCallbackParameters = null)
    {
        $this
            ->setBillingDocumentId($billingDocumentId)
            ->setBillingPositionId($billingPositionId)
            ->setMilesAndMoreCallbackParameters($milesAndMoreCallbackParameters);
    }
    /**
     * Get billingDocumentId value
     * @return int|null
     */
    public function getBillingDocumentId(): ?int
    {
        return isset($this->billingDocumentId) ? $this->billingDocumentId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBillingDocumentId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBillingDocumentId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBillingDocumentIdForChoiceConstraintsFromSetBillingDocumentId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'billingPositionId',
            'MilesAndMoreCallbackParameters',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property billingDocumentId can\'t be set as the property %s is already set. Only one property must be set among these properties: billingDocumentId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set billingDocumentId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $billingDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreBurnTransactionStatusRequest
     */
    public function setBillingDocumentId(?int $billingDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingDocumentId) && !(is_int($billingDocumentId) || ctype_digit($billingDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingDocumentId, true), gettype($billingDocumentId)), __LINE__);
        }
        // validation for constraint: choice(billingDocumentId, billingPositionId, MilesAndMoreCallbackParameters)
        if ('' !== ($billingDocumentIdChoiceErrorMessage = self::validateBillingDocumentIdForChoiceConstraintsFromSetBillingDocumentId($billingDocumentId))) {
            throw new InvalidArgumentException($billingDocumentIdChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($billingDocumentId) && $billingDocumentId < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($billingDocumentId, true)), __LINE__);
        }
        if (is_null($billingDocumentId) || (is_array($billingDocumentId) && empty($billingDocumentId))) {
            unset($this->billingDocumentId);
        } else {
            $this->billingDocumentId = $billingDocumentId;
        }
        
        return $this;
    }
    /**
     * Get billingPositionId value
     * @return int|null
     */
    public function getBillingPositionId(): ?int
    {
        return isset($this->billingPositionId) ? $this->billingPositionId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBillingPositionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBillingPositionId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBillingPositionIdForChoiceConstraintsFromSetBillingPositionId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'billingDocumentId',
            'MilesAndMoreCallbackParameters',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property billingPositionId can\'t be set as the property %s is already set. Only one property must be set among these properties: billingPositionId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set billingPositionId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $billingPositionId
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreBurnTransactionStatusRequest
     */
    public function setBillingPositionId(?int $billingPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingPositionId) && !(is_int($billingPositionId) || ctype_digit($billingPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingPositionId, true), gettype($billingPositionId)), __LINE__);
        }
        // validation for constraint: choice(billingDocumentId, billingPositionId, MilesAndMoreCallbackParameters)
        if ('' !== ($billingPositionIdChoiceErrorMessage = self::validateBillingPositionIdForChoiceConstraintsFromSetBillingPositionId($billingPositionId))) {
            throw new InvalidArgumentException($billingPositionIdChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($billingPositionId) && $billingPositionId < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($billingPositionId, true)), __LINE__);
        }
        if (is_null($billingPositionId) || (is_array($billingPositionId) && empty($billingPositionId))) {
            unset($this->billingPositionId);
        } else {
            $this->billingPositionId = $billingPositionId;
        }
        
        return $this;
    }
    /**
     * Get MilesAndMoreCallbackParameters value
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters|null
     */
    public function getMilesAndMoreCallbackParameters(): ?\Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters
    {
        return isset($this->MilesAndMoreCallbackParameters) ? $this->MilesAndMoreCallbackParameters : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMilesAndMoreCallbackParameters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMilesAndMoreCallbackParameters method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMilesAndMoreCallbackParametersForChoiceConstraintsFromSetMilesAndMoreCallbackParameters($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'billingDocumentId',
            'billingPositionId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MilesAndMoreCallbackParameters can\'t be set as the property %s is already set. Only one property must be set among these properties: MilesAndMoreCallbackParameters, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MilesAndMoreCallbackParameters value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters $milesAndMoreCallbackParameters
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreBurnTransactionStatusRequest
     */
    public function setMilesAndMoreCallbackParameters(?\Pggns\MidocoApi\Order\StructType\MilesAndMoreCallbackParameters $milesAndMoreCallbackParameters = null): self
    {
        // validation for constraint: choice(billingDocumentId, billingPositionId, MilesAndMoreCallbackParameters)
        if ('' !== ($milesAndMoreCallbackParametersChoiceErrorMessage = self::validateMilesAndMoreCallbackParametersForChoiceConstraintsFromSetMilesAndMoreCallbackParameters($milesAndMoreCallbackParameters))) {
            throw new InvalidArgumentException($milesAndMoreCallbackParametersChoiceErrorMessage, __LINE__);
        }
        if (is_null($milesAndMoreCallbackParameters) || (is_array($milesAndMoreCallbackParameters) && empty($milesAndMoreCallbackParameters))) {
            unset($this->MilesAndMoreCallbackParameters);
        } else {
            $this->MilesAndMoreCallbackParameters = $milesAndMoreCallbackParameters;
        }
        
        return $this;
    }
}

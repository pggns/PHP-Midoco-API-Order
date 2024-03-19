<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteConsentUnitsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteConsentUnitsRequest extends AbstractStructBase
{
    /**
     * The consentId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $consentId;
    /**
     * The isGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $isGroup;
    /**
     * The disabledUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $disabledUnitName;
    /**
     * Constructor method for DeleteConsentUnitsRequest
     * @uses DeleteConsentUnitsRequest::setConsentId()
     * @uses DeleteConsentUnitsRequest::setIsGroup()
     * @uses DeleteConsentUnitsRequest::setDisabledUnitName()
     * @param string $consentId
     * @param bool $isGroup
     * @param string[] $disabledUnitName
     */
    public function __construct(string $consentId, bool $isGroup, array $disabledUnitName)
    {
        $this
            ->setConsentId($consentId)
            ->setIsGroup($isGroup)
            ->setDisabledUnitName($disabledUnitName);
    }
    /**
     * Get consentId value
     * @return string
     */
    public function getConsentId(): string
    {
        return $this->consentId;
    }
    /**
     * Set consentId value
     * @param string $consentId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteConsentUnitsRequest
     */
    public function setConsentId(string $consentId): self
    {
        // validation for constraint: string
        if (!is_null($consentId) && !is_string($consentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consentId, true), gettype($consentId)), __LINE__);
        }
        $this->consentId = $consentId;
        
        return $this;
    }
    /**
     * Get isGroup value
     * @return bool
     */
    public function getIsGroup(): bool
    {
        return $this->isGroup;
    }
    /**
     * Set isGroup value
     * @param bool $isGroup
     * @return \Pggns\MidocoApi\Order\StructType\DeleteConsentUnitsRequest
     */
    public function setIsGroup(bool $isGroup): self
    {
        // validation for constraint: boolean
        if (!is_null($isGroup) && !is_bool($isGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGroup, true), gettype($isGroup)), __LINE__);
        }
        $this->isGroup = $isGroup;
        
        return $this;
    }
    /**
     * Get disabledUnitName value
     * @return string[]
     */
    public function getDisabledUnitName(): array
    {
        return $this->disabledUnitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDisabledUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisabledUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteConsentUnitsRequestDisabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($deleteConsentUnitsRequestDisabledUnitNameItem)) {
                $invalidValues[] = is_object($deleteConsentUnitsRequestDisabledUnitNameItem) ? get_class($deleteConsentUnitsRequestDisabledUnitNameItem) : sprintf('%s(%s)', gettype($deleteConsentUnitsRequestDisabledUnitNameItem), var_export($deleteConsentUnitsRequestDisabledUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set disabledUnitName value
     * @throws InvalidArgumentException
     * @param string[] $disabledUnitName
     * @return \Pggns\MidocoApi\Order\StructType\DeleteConsentUnitsRequest
     */
    public function setDisabledUnitName(array $disabledUnitName): self
    {
        // validation for constraint: array
        if ('' !== ($disabledUnitNameArrayErrorMessage = self::validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName($disabledUnitName))) {
            throw new InvalidArgumentException($disabledUnitNameArrayErrorMessage, __LINE__);
        }
        $this->disabledUnitName = $disabledUnitName;
        
        return $this;
    }
    /**
     * Add item to disabledUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteConsentUnitsRequest
     */
    public function addToDisabledUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->disabledUnitName[] = $item;
        
        return $this;
    }
}

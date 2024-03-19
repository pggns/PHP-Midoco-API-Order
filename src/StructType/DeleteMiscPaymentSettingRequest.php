<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMiscPaymentSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMiscPaymentSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoMiscPaymentSetting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMiscPaymentSetting
     * @var \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO[]
     */
    protected array $MidocoMiscPaymentSetting;
    /**
     * Constructor method for DeleteMiscPaymentSettingRequest
     * @uses DeleteMiscPaymentSettingRequest::setMidocoMiscPaymentSetting()
     * @param \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO[] $midocoMiscPaymentSetting
     */
    public function __construct(array $midocoMiscPaymentSetting)
    {
        $this
            ->setMidocoMiscPaymentSetting($midocoMiscPaymentSetting);
    }
    /**
     * Get MidocoMiscPaymentSetting value
     * @return \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO[]
     */
    public function getMidocoMiscPaymentSetting(): array
    {
        return $this->MidocoMiscPaymentSetting;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMiscPaymentSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMiscPaymentSetting method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMiscPaymentSettingForArrayConstraintFromSetMidocoMiscPaymentSetting(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteMiscPaymentSettingRequestMidocoMiscPaymentSettingItem) {
            // validation for constraint: itemType
            if (!$deleteMiscPaymentSettingRequestMidocoMiscPaymentSettingItem instanceof \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO) {
                $invalidValues[] = is_object($deleteMiscPaymentSettingRequestMidocoMiscPaymentSettingItem) ? get_class($deleteMiscPaymentSettingRequestMidocoMiscPaymentSettingItem) : sprintf('%s(%s)', gettype($deleteMiscPaymentSettingRequestMidocoMiscPaymentSettingItem), var_export($deleteMiscPaymentSettingRequestMidocoMiscPaymentSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMiscPaymentSetting property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMiscPaymentSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO[] $midocoMiscPaymentSetting
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMiscPaymentSettingRequest
     */
    public function setMidocoMiscPaymentSetting(array $midocoMiscPaymentSetting): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMiscPaymentSettingArrayErrorMessage = self::validateMidocoMiscPaymentSettingForArrayConstraintFromSetMidocoMiscPaymentSetting($midocoMiscPaymentSetting))) {
            throw new InvalidArgumentException($midocoMiscPaymentSettingArrayErrorMessage, __LINE__);
        }
        $this->MidocoMiscPaymentSetting = $midocoMiscPaymentSetting;
        
        return $this;
    }
    /**
     * Add item to MidocoMiscPaymentSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMiscPaymentSettingRequest
     */
    public function addToMidocoMiscPaymentSetting(\Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMiscPaymentSetting property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMiscPaymentSetting[] = $item;
        
        return $this;
    }
}

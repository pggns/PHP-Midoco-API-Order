<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MigrateFiskalyTssRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MigrateFiskalyTssRequest extends AbstractStructBase
{
    /**
     * The UnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $UnitName = null;
    /**
     * The send_puk_mail
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $send_puk_mail = null;
    /**
     * The stop_on_first_error
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $stop_on_first_error = null;
    /**
     * The cancel_reason
     * Meta information extracted from the WSDL
     * - default: Migration to Fiskaly Version 2
     * @var string|null
     */
    protected ?string $cancel_reason = null;
    /**
     * Constructor method for MigrateFiskalyTssRequest
     * @uses MigrateFiskalyTssRequest::setUnitName()
     * @uses MigrateFiskalyTssRequest::setSend_puk_mail()
     * @uses MigrateFiskalyTssRequest::setStop_on_first_error()
     * @uses MigrateFiskalyTssRequest::setCancel_reason()
     * @param string[] $unitName
     * @param bool $send_puk_mail
     * @param bool $stop_on_first_error
     * @param string $cancel_reason
     */
    public function __construct(?array $unitName = null, ?bool $send_puk_mail = false, ?bool $stop_on_first_error = true, ?string $cancel_reason = 'Migration to Fiskaly Version 2')
    {
        $this
            ->setUnitName($unitName)
            ->setSend_puk_mail($send_puk_mail)
            ->setStop_on_first_error($stop_on_first_error)
            ->setCancel_reason($cancel_reason);
    }
    /**
     * Get UnitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->UnitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $migrateFiskalyTssRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($migrateFiskalyTssRequestUnitNameItem)) {
                $invalidValues[] = is_object($migrateFiskalyTssRequestUnitNameItem) ? get_class($migrateFiskalyTssRequestUnitNameItem) : sprintf('%s(%s)', gettype($migrateFiskalyTssRequestUnitNameItem), var_export($migrateFiskalyTssRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->UnitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to UnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The UnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitName[] = $item;
        
        return $this;
    }
    /**
     * Get send_puk_mail value
     * @return bool|null
     */
    public function getSend_puk_mail(): ?bool
    {
        return $this->{'send-puk-mail'};
    }
    /**
     * Set send_puk_mail value
     * @param bool $send_puk_mail
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssRequest
     */
    public function setSend_puk_mail(?bool $send_puk_mail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($send_puk_mail) && !is_bool($send_puk_mail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($send_puk_mail, true), gettype($send_puk_mail)), __LINE__);
        }
        $this->send_puk_mail = $this->{'send-puk-mail'} = $send_puk_mail;
        
        return $this;
    }
    /**
     * Get stop_on_first_error value
     * @return bool|null
     */
    public function getStop_on_first_error(): ?bool
    {
        return $this->{'stop-on-first-error'};
    }
    /**
     * Set stop_on_first_error value
     * @param bool $stop_on_first_error
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssRequest
     */
    public function setStop_on_first_error(?bool $stop_on_first_error = true): self
    {
        // validation for constraint: boolean
        if (!is_null($stop_on_first_error) && !is_bool($stop_on_first_error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stop_on_first_error, true), gettype($stop_on_first_error)), __LINE__);
        }
        $this->stop_on_first_error = $this->{'stop-on-first-error'} = $stop_on_first_error;
        
        return $this;
    }
    /**
     * Get cancel_reason value
     * @return string|null
     */
    public function getCancel_reason(): ?string
    {
        return $this->{'cancel-reason'};
    }
    /**
     * Set cancel_reason value
     * @param string $cancel_reason
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssRequest
     */
    public function setCancel_reason(?string $cancel_reason = 'Migration to Fiskaly Version 2'): self
    {
        // validation for constraint: string
        if (!is_null($cancel_reason) && !is_string($cancel_reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancel_reason, true), gettype($cancel_reason)), __LINE__);
        }
        $this->cancel_reason = $this->{'cancel-reason'} = $cancel_reason;
        
        return $this;
    }
}

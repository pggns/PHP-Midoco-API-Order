<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMoreEarnSelectionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Save information from the MilesAndMoreEarnSelectionDialog. This will fill the PopupShown field of all linked MilesAndMoreEarnInfo entities with the current timestamp.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMilesAndMoreEarnSelectionRequest extends AbstractStructBase
{
    /**
     * The OrderId
     * @var int|null
     */
    protected ?int $OrderId = null;
    /**
     * The CardNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CardNo = null;
    /**
     * The MilesAndMoreEarnSelection
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection[]
     */
    protected ?array $MilesAndMoreEarnSelection = null;
    /**
     * The internalVersion
     * Meta information extracted from the WSDL
     * - documentation: Supply the internalVersion from the GUI to prevent working on a modified order.
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The auto
     * Meta information extracted from the WSDL
     * - documentation: Use true, to signal, that a rule decided whether to earn miles. Only for internal use.
     * @var bool|null
     */
    protected ?bool $auto = null;
    /**
     * Constructor method for SaveMilesAndMoreEarnSelectionRequest
     * @uses SaveMilesAndMoreEarnSelectionRequest::setOrderId()
     * @uses SaveMilesAndMoreEarnSelectionRequest::setCardNo()
     * @uses SaveMilesAndMoreEarnSelectionRequest::setMilesAndMoreEarnSelection()
     * @uses SaveMilesAndMoreEarnSelectionRequest::setInternalVersion()
     * @uses SaveMilesAndMoreEarnSelectionRequest::setAuto()
     * @param int $orderId
     * @param string $cardNo
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection[] $milesAndMoreEarnSelection
     * @param int $internalVersion
     * @param bool $auto
     */
    public function __construct(?int $orderId = null, ?string $cardNo = null, ?array $milesAndMoreEarnSelection = null, ?int $internalVersion = null, ?bool $auto = null)
    {
        $this
            ->setOrderId($orderId)
            ->setCardNo($cardNo)
            ->setMilesAndMoreEarnSelection($milesAndMoreEarnSelection)
            ->setInternalVersion($internalVersion)
            ->setAuto($auto);
    }
    /**
     * Get OrderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        
        return $this;
    }
    /**
     * Get CardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->CardNo;
    }
    /**
     * Set CardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionRequest
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->CardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get MilesAndMoreEarnSelection value
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection[]
     */
    public function getMilesAndMoreEarnSelection(): ?array
    {
        return $this->MilesAndMoreEarnSelection;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMilesAndMoreEarnSelection method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMilesAndMoreEarnSelection method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMilesAndMoreEarnSelectionForArrayConstraintFromSetMilesAndMoreEarnSelection(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMilesAndMoreEarnSelectionRequestMilesAndMoreEarnSelectionItem) {
            // validation for constraint: itemType
            if (!$saveMilesAndMoreEarnSelectionRequestMilesAndMoreEarnSelectionItem instanceof \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection) {
                $invalidValues[] = is_object($saveMilesAndMoreEarnSelectionRequestMilesAndMoreEarnSelectionItem) ? get_class($saveMilesAndMoreEarnSelectionRequestMilesAndMoreEarnSelectionItem) : sprintf('%s(%s)', gettype($saveMilesAndMoreEarnSelectionRequestMilesAndMoreEarnSelectionItem), var_export($saveMilesAndMoreEarnSelectionRequestMilesAndMoreEarnSelectionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MilesAndMoreEarnSelection property can only contain items of type \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MilesAndMoreEarnSelection value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection[] $milesAndMoreEarnSelection
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionRequest
     */
    public function setMilesAndMoreEarnSelection(?array $milesAndMoreEarnSelection = null): self
    {
        // validation for constraint: array
        if ('' !== ($milesAndMoreEarnSelectionArrayErrorMessage = self::validateMilesAndMoreEarnSelectionForArrayConstraintFromSetMilesAndMoreEarnSelection($milesAndMoreEarnSelection))) {
            throw new InvalidArgumentException($milesAndMoreEarnSelectionArrayErrorMessage, __LINE__);
        }
        $this->MilesAndMoreEarnSelection = $milesAndMoreEarnSelection;
        
        return $this;
    }
    /**
     * Add item to MilesAndMoreEarnSelection value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionRequest
     */
    public function addToMilesAndMoreEarnSelection(\Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection) {
            throw new InvalidArgumentException(sprintf('The MilesAndMoreEarnSelection property can only contain items of type \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MilesAndMoreEarnSelection[] = $item;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get auto value
     * @return bool|null
     */
    public function getAuto(): ?bool
    {
        return $this->auto;
    }
    /**
     * Set auto value
     * @param bool $auto
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreEarnSelectionRequest
     */
    public function setAuto(?bool $auto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($auto) && !is_bool($auto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($auto, true), gettype($auto)), __LINE__);
        }
        $this->auto = $auto;
        
        return $this;
    }
}

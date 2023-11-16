<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVerkDbiInfos StructType
 * @subpackage Structs
 */
class MidocoVerkDbiInfos extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * The VERK_KEY_COST_CENTRE
     * @var string|null
     */
    protected ?string $VERK_KEY_COST_CENTRE = null;
    /**
     * The VERK_KEY_CUSTOMER_COST_CENTRE
     * @var string|null
     */
    protected ?string $VERK_KEY_CUSTOMER_COST_CENTRE = null;
    /**
     * The VERK_KEY_CUSTOMER_PERSON_NO
     * @var string|null
     */
    protected ?string $VERK_KEY_CUSTOMER_PERSON_NO = null;
    /**
     * The VERK_KEY_CUSTOMER_PROJECT_NO
     * @var string|null
     */
    protected ?string $VERK_KEY_CUSTOMER_PROJECT_NO = null;
    /**
     * The VERK_KEY_FUNDING
     * @var string|null
     */
    protected ?string $VERK_KEY_FUNDING = null;
    /**
     * The VERK_KEY_ORDER_DATE
     * @var string|null
     */
    protected ?string $VERK_KEY_ORDER_DATE = null;
    /**
     * The VERK_KEY_ORDER_NO
     * @var string|null
     */
    protected ?string $VERK_KEY_ORDER_NO = null;
    /**
     * The VERK_KEY_ORDERER
     * @var string|null
     */
    protected ?string $VERK_KEY_ORDERER = null;
    /**
     * The VERK_KEY_REMARK1
     * @var string|null
     */
    protected ?string $VERK_KEY_REMARK1 = null;
    /**
     * The VERK_KEY_REMARK2
     * @var string|null
     */
    protected ?string $VERK_KEY_REMARK2 = null;
    /**
     * The DBI_INFO_KEY_DEBITOR
     * @var string|null
     */
    protected ?string $DBI_INFO_KEY_DEBITOR = null;
    /**
     * The MidocoDbiDefValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiDefValue
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[]
     */
    protected array $MidocoDbiDefValue = [];
    /**
     * Constructor method for MidocoVerkDbiInfos
     * @uses MidocoVerkDbiInfos::setOrderId()
     * @uses MidocoVerkDbiInfos::setItemId()
     * @uses MidocoVerkDbiInfos::setPassengerAssignment()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_COST_CENTRE()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_CUSTOMER_COST_CENTRE()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_CUSTOMER_PERSON_NO()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_CUSTOMER_PROJECT_NO()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_FUNDING()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_ORDER_DATE()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_ORDER_NO()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_ORDERER()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_REMARK1()
     * @uses MidocoVerkDbiInfos::setVERK_KEY_REMARK2()
     * @uses MidocoVerkDbiInfos::setDBI_INFO_KEY_DEBITOR()
     * @uses MidocoVerkDbiInfos::setMidocoDbiDefValue()
     * @param int $orderId
     * @param int $itemId
     * @param int $passengerAssignment
     * @param string $vERK_KEY_COST_CENTRE
     * @param string $vERK_KEY_CUSTOMER_COST_CENTRE
     * @param string $vERK_KEY_CUSTOMER_PERSON_NO
     * @param string $vERK_KEY_CUSTOMER_PROJECT_NO
     * @param string $vERK_KEY_FUNDING
     * @param string $vERK_KEY_ORDER_DATE
     * @param string $vERK_KEY_ORDER_NO
     * @param string $vERK_KEY_ORDERER
     * @param string $vERK_KEY_REMARK1
     * @param string $vERK_KEY_REMARK2
     * @param string $dBI_INFO_KEY_DEBITOR
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[] $midocoDbiDefValue
     */
    public function __construct(?int $orderId = null, ?int $itemId = null, ?int $passengerAssignment = null, ?string $vERK_KEY_COST_CENTRE = null, ?string $vERK_KEY_CUSTOMER_COST_CENTRE = null, ?string $vERK_KEY_CUSTOMER_PERSON_NO = null, ?string $vERK_KEY_CUSTOMER_PROJECT_NO = null, ?string $vERK_KEY_FUNDING = null, ?string $vERK_KEY_ORDER_DATE = null, ?string $vERK_KEY_ORDER_NO = null, ?string $vERK_KEY_ORDERER = null, ?string $vERK_KEY_REMARK1 = null, ?string $vERK_KEY_REMARK2 = null, ?string $dBI_INFO_KEY_DEBITOR = null, array $midocoDbiDefValue = [])
    {
        $this
            ->setOrderId($orderId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setVERK_KEY_COST_CENTRE($vERK_KEY_COST_CENTRE)
            ->setVERK_KEY_CUSTOMER_COST_CENTRE($vERK_KEY_CUSTOMER_COST_CENTRE)
            ->setVERK_KEY_CUSTOMER_PERSON_NO($vERK_KEY_CUSTOMER_PERSON_NO)
            ->setVERK_KEY_CUSTOMER_PROJECT_NO($vERK_KEY_CUSTOMER_PROJECT_NO)
            ->setVERK_KEY_FUNDING($vERK_KEY_FUNDING)
            ->setVERK_KEY_ORDER_DATE($vERK_KEY_ORDER_DATE)
            ->setVERK_KEY_ORDER_NO($vERK_KEY_ORDER_NO)
            ->setVERK_KEY_ORDERER($vERK_KEY_ORDERER)
            ->setVERK_KEY_REMARK1($vERK_KEY_REMARK1)
            ->setVERK_KEY_REMARK2($vERK_KEY_REMARK2)
            ->setDBI_INFO_KEY_DEBITOR($dBI_INFO_KEY_DEBITOR)
            ->setMidocoDbiDefValue($midocoDbiDefValue);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get VERK_KEY_COST_CENTRE value
     * @return string|null
     */
    public function getVERK_KEY_COST_CENTRE(): ?string
    {
        return $this->VERK_KEY_COST_CENTRE;
    }
    /**
     * Set VERK_KEY_COST_CENTRE value
     * @param string $vERK_KEY_COST_CENTRE
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_COST_CENTRE(?string $vERK_KEY_COST_CENTRE = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_COST_CENTRE) && !is_string($vERK_KEY_COST_CENTRE)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_COST_CENTRE, true), gettype($vERK_KEY_COST_CENTRE)), __LINE__);
        }
        $this->VERK_KEY_COST_CENTRE = $vERK_KEY_COST_CENTRE;
        
        return $this;
    }
    /**
     * Get VERK_KEY_CUSTOMER_COST_CENTRE value
     * @return string|null
     */
    public function getVERK_KEY_CUSTOMER_COST_CENTRE(): ?string
    {
        return $this->VERK_KEY_CUSTOMER_COST_CENTRE;
    }
    /**
     * Set VERK_KEY_CUSTOMER_COST_CENTRE value
     * @param string $vERK_KEY_CUSTOMER_COST_CENTRE
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_CUSTOMER_COST_CENTRE(?string $vERK_KEY_CUSTOMER_COST_CENTRE = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_CUSTOMER_COST_CENTRE) && !is_string($vERK_KEY_CUSTOMER_COST_CENTRE)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_CUSTOMER_COST_CENTRE, true), gettype($vERK_KEY_CUSTOMER_COST_CENTRE)), __LINE__);
        }
        $this->VERK_KEY_CUSTOMER_COST_CENTRE = $vERK_KEY_CUSTOMER_COST_CENTRE;
        
        return $this;
    }
    /**
     * Get VERK_KEY_CUSTOMER_PERSON_NO value
     * @return string|null
     */
    public function getVERK_KEY_CUSTOMER_PERSON_NO(): ?string
    {
        return $this->VERK_KEY_CUSTOMER_PERSON_NO;
    }
    /**
     * Set VERK_KEY_CUSTOMER_PERSON_NO value
     * @param string $vERK_KEY_CUSTOMER_PERSON_NO
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_CUSTOMER_PERSON_NO(?string $vERK_KEY_CUSTOMER_PERSON_NO = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_CUSTOMER_PERSON_NO) && !is_string($vERK_KEY_CUSTOMER_PERSON_NO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_CUSTOMER_PERSON_NO, true), gettype($vERK_KEY_CUSTOMER_PERSON_NO)), __LINE__);
        }
        $this->VERK_KEY_CUSTOMER_PERSON_NO = $vERK_KEY_CUSTOMER_PERSON_NO;
        
        return $this;
    }
    /**
     * Get VERK_KEY_CUSTOMER_PROJECT_NO value
     * @return string|null
     */
    public function getVERK_KEY_CUSTOMER_PROJECT_NO(): ?string
    {
        return $this->VERK_KEY_CUSTOMER_PROJECT_NO;
    }
    /**
     * Set VERK_KEY_CUSTOMER_PROJECT_NO value
     * @param string $vERK_KEY_CUSTOMER_PROJECT_NO
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_CUSTOMER_PROJECT_NO(?string $vERK_KEY_CUSTOMER_PROJECT_NO = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_CUSTOMER_PROJECT_NO) && !is_string($vERK_KEY_CUSTOMER_PROJECT_NO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_CUSTOMER_PROJECT_NO, true), gettype($vERK_KEY_CUSTOMER_PROJECT_NO)), __LINE__);
        }
        $this->VERK_KEY_CUSTOMER_PROJECT_NO = $vERK_KEY_CUSTOMER_PROJECT_NO;
        
        return $this;
    }
    /**
     * Get VERK_KEY_FUNDING value
     * @return string|null
     */
    public function getVERK_KEY_FUNDING(): ?string
    {
        return $this->VERK_KEY_FUNDING;
    }
    /**
     * Set VERK_KEY_FUNDING value
     * @param string $vERK_KEY_FUNDING
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_FUNDING(?string $vERK_KEY_FUNDING = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_FUNDING) && !is_string($vERK_KEY_FUNDING)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_FUNDING, true), gettype($vERK_KEY_FUNDING)), __LINE__);
        }
        $this->VERK_KEY_FUNDING = $vERK_KEY_FUNDING;
        
        return $this;
    }
    /**
     * Get VERK_KEY_ORDER_DATE value
     * @return string|null
     */
    public function getVERK_KEY_ORDER_DATE(): ?string
    {
        return $this->VERK_KEY_ORDER_DATE;
    }
    /**
     * Set VERK_KEY_ORDER_DATE value
     * @param string $vERK_KEY_ORDER_DATE
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_ORDER_DATE(?string $vERK_KEY_ORDER_DATE = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_ORDER_DATE) && !is_string($vERK_KEY_ORDER_DATE)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_ORDER_DATE, true), gettype($vERK_KEY_ORDER_DATE)), __LINE__);
        }
        $this->VERK_KEY_ORDER_DATE = $vERK_KEY_ORDER_DATE;
        
        return $this;
    }
    /**
     * Get VERK_KEY_ORDER_NO value
     * @return string|null
     */
    public function getVERK_KEY_ORDER_NO(): ?string
    {
        return $this->VERK_KEY_ORDER_NO;
    }
    /**
     * Set VERK_KEY_ORDER_NO value
     * @param string $vERK_KEY_ORDER_NO
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_ORDER_NO(?string $vERK_KEY_ORDER_NO = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_ORDER_NO) && !is_string($vERK_KEY_ORDER_NO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_ORDER_NO, true), gettype($vERK_KEY_ORDER_NO)), __LINE__);
        }
        $this->VERK_KEY_ORDER_NO = $vERK_KEY_ORDER_NO;
        
        return $this;
    }
    /**
     * Get VERK_KEY_ORDERER value
     * @return string|null
     */
    public function getVERK_KEY_ORDERER(): ?string
    {
        return $this->VERK_KEY_ORDERER;
    }
    /**
     * Set VERK_KEY_ORDERER value
     * @param string $vERK_KEY_ORDERER
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_ORDERER(?string $vERK_KEY_ORDERER = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_ORDERER) && !is_string($vERK_KEY_ORDERER)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_ORDERER, true), gettype($vERK_KEY_ORDERER)), __LINE__);
        }
        $this->VERK_KEY_ORDERER = $vERK_KEY_ORDERER;
        
        return $this;
    }
    /**
     * Get VERK_KEY_REMARK1 value
     * @return string|null
     */
    public function getVERK_KEY_REMARK1(): ?string
    {
        return $this->VERK_KEY_REMARK1;
    }
    /**
     * Set VERK_KEY_REMARK1 value
     * @param string $vERK_KEY_REMARK1
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_REMARK1(?string $vERK_KEY_REMARK1 = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_REMARK1) && !is_string($vERK_KEY_REMARK1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_REMARK1, true), gettype($vERK_KEY_REMARK1)), __LINE__);
        }
        $this->VERK_KEY_REMARK1 = $vERK_KEY_REMARK1;
        
        return $this;
    }
    /**
     * Get VERK_KEY_REMARK2 value
     * @return string|null
     */
    public function getVERK_KEY_REMARK2(): ?string
    {
        return $this->VERK_KEY_REMARK2;
    }
    /**
     * Set VERK_KEY_REMARK2 value
     * @param string $vERK_KEY_REMARK2
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setVERK_KEY_REMARK2(?string $vERK_KEY_REMARK2 = null): self
    {
        // validation for constraint: string
        if (!is_null($vERK_KEY_REMARK2) && !is_string($vERK_KEY_REMARK2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vERK_KEY_REMARK2, true), gettype($vERK_KEY_REMARK2)), __LINE__);
        }
        $this->VERK_KEY_REMARK2 = $vERK_KEY_REMARK2;
        
        return $this;
    }
    /**
     * Get DBI_INFO_KEY_DEBITOR value
     * @return string|null
     */
    public function getDBI_INFO_KEY_DEBITOR(): ?string
    {
        return $this->DBI_INFO_KEY_DEBITOR;
    }
    /**
     * Set DBI_INFO_KEY_DEBITOR value
     * @param string $dBI_INFO_KEY_DEBITOR
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setDBI_INFO_KEY_DEBITOR(?string $dBI_INFO_KEY_DEBITOR = null): self
    {
        // validation for constraint: string
        if (!is_null($dBI_INFO_KEY_DEBITOR) && !is_string($dBI_INFO_KEY_DEBITOR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dBI_INFO_KEY_DEBITOR, true), gettype($dBI_INFO_KEY_DEBITOR)), __LINE__);
        }
        $this->DBI_INFO_KEY_DEBITOR = $dBI_INFO_KEY_DEBITOR;
        
        return $this;
    }
    /**
     * Get MidocoDbiDefValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[]
     */
    public function getMidocoDbiDefValue(): array
    {
        return $this->MidocoDbiDefValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDbiDefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiDefValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiDefValueForArrayConstraintsFromSetMidocoDbiDefValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoVerkDbiInfosMidocoDbiDefValueItem) {
            // validation for constraint: itemType
            if (!$midocoVerkDbiInfosMidocoDbiDefValueItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue) {
                $invalidValues[] = is_object($midocoVerkDbiInfosMidocoDbiDefValueItem) ? get_class($midocoVerkDbiInfosMidocoDbiDefValueItem) : sprintf('%s(%s)', gettype($midocoVerkDbiInfosMidocoDbiDefValueItem), var_export($midocoVerkDbiInfosMidocoDbiDefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiDefValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiDefValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[] $midocoDbiDefValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function setMidocoDbiDefValue(array $midocoDbiDefValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiDefValueArrayErrorMessage = self::validateMidocoDbiDefValueForArrayConstraintsFromSetMidocoDbiDefValue($midocoDbiDefValue))) {
            throw new InvalidArgumentException($midocoDbiDefValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiDefValue = $midocoDbiDefValue;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiDefValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVerkDbiInfos
     */
    public function addToMidocoDbiDefValue(\Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiDefValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiDefValue[] = $item;
        
        return $this;
    }
}

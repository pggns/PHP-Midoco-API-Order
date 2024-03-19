<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintDetailsForBonusEmployee StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintDetailsForBonusEmployee extends AbstractStructBase
{
    /**
     * The MidocoBonusAssignmentSellitemDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ordersd:MidocoBonusAssignmentSellitemDetails
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[]
     */
    protected ?array $MidocoBonusAssignmentSellitemDetails = null;
    /**
     * The MidocoBonusAddition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBonusAddition
     * @var \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO[]
     */
    protected ?array $MidocoBonusAddition = null;
    /**
     * The grantedCompetition
     * @var float|null
     */
    protected ?float $grantedCompetition = null;
    /**
     * The grantedAdditional
     * @var float|null
     */
    protected ?float $grantedAdditional = null;
    /**
     * The username
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The baseAmountRule
     * @var float|null
     */
    protected ?float $baseAmountRule = null;
    /**
     * The grantedAmountRule
     * @var float|null
     */
    protected ?float $grantedAmountRule = null;
    /**
     * The grantedSumBonus
     * @var float|null
     */
    protected ?float $grantedSumBonus = null;
    /**
     * The pageCounter
     * @var int|null
     */
    protected ?int $pageCounter = null;
    /**
     * The bonusDescription
     * @var string|null
     */
    protected ?string $bonusDescription = null;
    /**
     * Constructor method for PrintDetailsForBonusEmployee
     * @uses PrintDetailsForBonusEmployee::setMidocoBonusAssignmentSellitemDetails()
     * @uses PrintDetailsForBonusEmployee::setMidocoBonusAddition()
     * @uses PrintDetailsForBonusEmployee::setGrantedCompetition()
     * @uses PrintDetailsForBonusEmployee::setGrantedAdditional()
     * @uses PrintDetailsForBonusEmployee::setUsername()
     * @uses PrintDetailsForBonusEmployee::setBaseAmountRule()
     * @uses PrintDetailsForBonusEmployee::setGrantedAmountRule()
     * @uses PrintDetailsForBonusEmployee::setGrantedSumBonus()
     * @uses PrintDetailsForBonusEmployee::setPageCounter()
     * @uses PrintDetailsForBonusEmployee::setBonusDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[] $midocoBonusAssignmentSellitemDetails
     * @param \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO[] $midocoBonusAddition
     * @param float $grantedCompetition
     * @param float $grantedAdditional
     * @param string $username
     * @param float $baseAmountRule
     * @param float $grantedAmountRule
     * @param float $grantedSumBonus
     * @param int $pageCounter
     * @param string $bonusDescription
     */
    public function __construct(?array $midocoBonusAssignmentSellitemDetails = null, ?array $midocoBonusAddition = null, ?float $grantedCompetition = null, ?float $grantedAdditional = null, ?string $username = null, ?float $baseAmountRule = null, ?float $grantedAmountRule = null, ?float $grantedSumBonus = null, ?int $pageCounter = null, ?string $bonusDescription = null)
    {
        $this
            ->setMidocoBonusAssignmentSellitemDetails($midocoBonusAssignmentSellitemDetails)
            ->setMidocoBonusAddition($midocoBonusAddition)
            ->setGrantedCompetition($grantedCompetition)
            ->setGrantedAdditional($grantedAdditional)
            ->setUsername($username)
            ->setBaseAmountRule($baseAmountRule)
            ->setGrantedAmountRule($grantedAmountRule)
            ->setGrantedSumBonus($grantedSumBonus)
            ->setPageCounter($pageCounter)
            ->setBonusDescription($bonusDescription);
    }
    /**
     * Get MidocoBonusAssignmentSellitemDetails value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[]
     */
    public function getMidocoBonusAssignmentSellitemDetails(): ?array
    {
        return $this->MidocoBonusAssignmentSellitemDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBonusAssignmentSellitemDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusAssignmentSellitemDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusAssignmentSellitemDetailsForArrayConstraintFromSetMidocoBonusAssignmentSellitemDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printDetailsForBonusEmployeeMidocoBonusAssignmentSellitemDetailsItem) {
            // validation for constraint: itemType
            if (!$printDetailsForBonusEmployeeMidocoBonusAssignmentSellitemDetailsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails) {
                $invalidValues[] = is_object($printDetailsForBonusEmployeeMidocoBonusAssignmentSellitemDetailsItem) ? get_class($printDetailsForBonusEmployeeMidocoBonusAssignmentSellitemDetailsItem) : sprintf('%s(%s)', gettype($printDetailsForBonusEmployeeMidocoBonusAssignmentSellitemDetailsItem), var_export($printDetailsForBonusEmployeeMidocoBonusAssignmentSellitemDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusAssignmentSellitemDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusAssignmentSellitemDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[] $midocoBonusAssignmentSellitemDetails
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setMidocoBonusAssignmentSellitemDetails(?array $midocoBonusAssignmentSellitemDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusAssignmentSellitemDetailsArrayErrorMessage = self::validateMidocoBonusAssignmentSellitemDetailsForArrayConstraintFromSetMidocoBonusAssignmentSellitemDetails($midocoBonusAssignmentSellitemDetails))) {
            throw new InvalidArgumentException($midocoBonusAssignmentSellitemDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusAssignmentSellitemDetails = $midocoBonusAssignmentSellitemDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusAssignmentSellitemDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function addToMidocoBonusAssignmentSellitemDetails(\Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusAssignmentSellitemDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusAssignmentSellitemDetails[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBonusAddition value
     * @return \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO[]
     */
    public function getMidocoBonusAddition(): ?array
    {
        return $this->MidocoBonusAddition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBonusAddition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusAddition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusAdditionForArrayConstraintFromSetMidocoBonusAddition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printDetailsForBonusEmployeeMidocoBonusAdditionItem) {
            // validation for constraint: itemType
            if (!$printDetailsForBonusEmployeeMidocoBonusAdditionItem instanceof \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO) {
                $invalidValues[] = is_object($printDetailsForBonusEmployeeMidocoBonusAdditionItem) ? get_class($printDetailsForBonusEmployeeMidocoBonusAdditionItem) : sprintf('%s(%s)', gettype($printDetailsForBonusEmployeeMidocoBonusAdditionItem), var_export($printDetailsForBonusEmployeeMidocoBonusAdditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusAddition property can only contain items of type \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusAddition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO[] $midocoBonusAddition
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setMidocoBonusAddition(?array $midocoBonusAddition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusAdditionArrayErrorMessage = self::validateMidocoBonusAdditionForArrayConstraintFromSetMidocoBonusAddition($midocoBonusAddition))) {
            throw new InvalidArgumentException($midocoBonusAdditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusAddition = $midocoBonusAddition;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusAddition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function addToMidocoBonusAddition(\Pggns\MidocoApi\Order\StructType\BonusAdditionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusAddition property can only contain items of type \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusAddition[] = $item;
        
        return $this;
    }
    /**
     * Get grantedCompetition value
     * @return float|null
     */
    public function getGrantedCompetition(): ?float
    {
        return $this->grantedCompetition;
    }
    /**
     * Set grantedCompetition value
     * @param float $grantedCompetition
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setGrantedCompetition(?float $grantedCompetition = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedCompetition) && !(is_float($grantedCompetition) || is_numeric($grantedCompetition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedCompetition, true), gettype($grantedCompetition)), __LINE__);
        }
        $this->grantedCompetition = $grantedCompetition;
        
        return $this;
    }
    /**
     * Get grantedAdditional value
     * @return float|null
     */
    public function getGrantedAdditional(): ?float
    {
        return $this->grantedAdditional;
    }
    /**
     * Set grantedAdditional value
     * @param float $grantedAdditional
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setGrantedAdditional(?float $grantedAdditional = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedAdditional) && !(is_float($grantedAdditional) || is_numeric($grantedAdditional))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedAdditional, true), gettype($grantedAdditional)), __LINE__);
        }
        $this->grantedAdditional = $grantedAdditional;
        
        return $this;
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        
        return $this;
    }
    /**
     * Get baseAmountRule value
     * @return float|null
     */
    public function getBaseAmountRule(): ?float
    {
        return $this->baseAmountRule;
    }
    /**
     * Set baseAmountRule value
     * @param float $baseAmountRule
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setBaseAmountRule(?float $baseAmountRule = null): self
    {
        // validation for constraint: float
        if (!is_null($baseAmountRule) && !(is_float($baseAmountRule) || is_numeric($baseAmountRule))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseAmountRule, true), gettype($baseAmountRule)), __LINE__);
        }
        $this->baseAmountRule = $baseAmountRule;
        
        return $this;
    }
    /**
     * Get grantedAmountRule value
     * @return float|null
     */
    public function getGrantedAmountRule(): ?float
    {
        return $this->grantedAmountRule;
    }
    /**
     * Set grantedAmountRule value
     * @param float $grantedAmountRule
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setGrantedAmountRule(?float $grantedAmountRule = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedAmountRule) && !(is_float($grantedAmountRule) || is_numeric($grantedAmountRule))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedAmountRule, true), gettype($grantedAmountRule)), __LINE__);
        }
        $this->grantedAmountRule = $grantedAmountRule;
        
        return $this;
    }
    /**
     * Get grantedSumBonus value
     * @return float|null
     */
    public function getGrantedSumBonus(): ?float
    {
        return $this->grantedSumBonus;
    }
    /**
     * Set grantedSumBonus value
     * @param float $grantedSumBonus
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setGrantedSumBonus(?float $grantedSumBonus = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedSumBonus) && !(is_float($grantedSumBonus) || is_numeric($grantedSumBonus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedSumBonus, true), gettype($grantedSumBonus)), __LINE__);
        }
        $this->grantedSumBonus = $grantedSumBonus;
        
        return $this;
    }
    /**
     * Get pageCounter value
     * @return int|null
     */
    public function getPageCounter(): ?int
    {
        return $this->pageCounter;
    }
    /**
     * Set pageCounter value
     * @param int $pageCounter
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setPageCounter(?int $pageCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($pageCounter) && !(is_int($pageCounter) || ctype_digit($pageCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageCounter, true), gettype($pageCounter)), __LINE__);
        }
        $this->pageCounter = $pageCounter;
        
        return $this;
    }
    /**
     * Get bonusDescription value
     * @return string|null
     */
    public function getBonusDescription(): ?string
    {
        return $this->bonusDescription;
    }
    /**
     * Set bonusDescription value
     * @param string $bonusDescription
     * @return \Pggns\MidocoApi\Order\StructType\PrintDetailsForBonusEmployee
     */
    public function setBonusDescription(?string $bonusDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($bonusDescription) && !is_string($bonusDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bonusDescription, true), gettype($bonusDescription)), __LINE__);
        }
        $this->bonusDescription = $bonusDescription;
        
        return $this;
    }
}

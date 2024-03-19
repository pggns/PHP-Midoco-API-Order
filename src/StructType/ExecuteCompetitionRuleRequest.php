<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCompetitionRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteCompetitionRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusCalculation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $MidocoBonusCalculation = null;
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The ruleContent
     * @var string|null
     */
    protected ?string $ruleContent = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * Constructor method for ExecuteCompetitionRuleRequest
     * @uses ExecuteCompetitionRuleRequest::setMidocoBonusCalculation()
     * @uses ExecuteCompetitionRuleRequest::setBonusId()
     * @uses ExecuteCompetitionRuleRequest::setRuleContent()
     * @uses ExecuteCompetitionRuleRequest::setCreationUser()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     * @param int $bonusId
     * @param string $ruleContent
     * @param int $creationUser
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null, ?int $bonusId = null, ?string $ruleContent = null, ?int $creationUser = null)
    {
        $this
            ->setMidocoBonusCalculation($midocoBonusCalculation)
            ->setBonusId($bonusId)
            ->setRuleContent($ruleContent)
            ->setCreationUser($creationUser);
    }
    /**
     * Get MidocoBonusCalculation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation|null
     */
    public function getMidocoBonusCalculation(): ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation
    {
        return $this->MidocoBonusCalculation;
    }
    /**
     * Set MidocoBonusCalculation value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleRequest
     */
    public function setMidocoBonusCalculation(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null): self
    {
        $this->MidocoBonusCalculation = $midocoBonusCalculation;
        
        return $this;
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleRequest
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
        return $this;
    }
    /**
     * Get ruleContent value
     * @return string|null
     */
    public function getRuleContent(): ?string
    {
        return $this->ruleContent;
    }
    /**
     * Set ruleContent value
     * @param string $ruleContent
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleRequest
     */
    public function setRuleContent(?string $ruleContent = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleContent) && !is_string($ruleContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleContent, true), gettype($ruleContent)), __LINE__);
        }
        $this->ruleContent = $ruleContent;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleRequest
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemRulesetDTO StructType
 * @subpackage Structs
 */
class SystemRulesetDTO extends AbstractStructBase
{
    /**
     * The byteCode
     * @var string|null
     */
    protected ?string $byteCode = null;
    /**
     * The codeType
     * @var string|null
     */
    protected ?string $codeType = null;
    /**
     * The content
     * @var string|null
     */
    protected ?string $content = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The rulesetId
     * @var int|null
     */
    protected ?int $rulesetId = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for SystemRulesetDTO
     * @uses SystemRulesetDTO::setByteCode()
     * @uses SystemRulesetDTO::setCodeType()
     * @uses SystemRulesetDTO::setContent()
     * @uses SystemRulesetDTO::setDescription()
     * @uses SystemRulesetDTO::setModifyDate()
     * @uses SystemRulesetDTO::setRulesetId()
     * @uses SystemRulesetDTO::setTypeId()
     * @param string $byteCode
     * @param string $codeType
     * @param string $content
     * @param string $description
     * @param string $modifyDate
     * @param int $rulesetId
     * @param string $typeId
     */
    public function __construct(?string $byteCode = null, ?string $codeType = null, ?string $content = null, ?string $description = null, ?string $modifyDate = null, ?int $rulesetId = null, ?string $typeId = null)
    {
        $this
            ->setByteCode($byteCode)
            ->setCodeType($codeType)
            ->setContent($content)
            ->setDescription($description)
            ->setModifyDate($modifyDate)
            ->setRulesetId($rulesetId)
            ->setTypeId($typeId);
    }
    /**
     * Get byteCode value
     * @return string|null
     */
    public function getByteCode(): ?string
    {
        return $this->byteCode;
    }
    /**
     * Set byteCode value
     * @param string $byteCode
     * @return \Pggns\MidocoApi\Order\StructType\SystemRulesetDTO
     */
    public function setByteCode(?string $byteCode = null): self
    {
        // validation for constraint: string
        if (!is_null($byteCode) && !is_string($byteCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($byteCode, true), gettype($byteCode)), __LINE__);
        }
        $this->byteCode = $byteCode;
        
        return $this;
    }
    /**
     * Get codeType value
     * @return string|null
     */
    public function getCodeType(): ?string
    {
        return $this->codeType;
    }
    /**
     * Set codeType value
     * @param string $codeType
     * @return \Pggns\MidocoApi\Order\StructType\SystemRulesetDTO
     */
    public function setCodeType(?string $codeType = null): self
    {
        // validation for constraint: string
        if (!is_null($codeType) && !is_string($codeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeType, true), gettype($codeType)), __LINE__);
        }
        $this->codeType = $codeType;
        
        return $this;
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \Pggns\MidocoApi\Order\StructType\SystemRulesetDTO
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SystemRulesetDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\SystemRulesetDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get rulesetId value
     * @return int|null
     */
    public function getRulesetId(): ?int
    {
        return $this->rulesetId;
    }
    /**
     * Set rulesetId value
     * @param int $rulesetId
     * @return \Pggns\MidocoApi\Order\StructType\SystemRulesetDTO
     */
    public function setRulesetId(?int $rulesetId = null): self
    {
        // validation for constraint: int
        if (!is_null($rulesetId) && !(is_int($rulesetId) || ctype_digit($rulesetId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rulesetId, true), gettype($rulesetId)), __LINE__);
        }
        $this->rulesetId = $rulesetId;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\SystemRulesetDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}

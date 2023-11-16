<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCriteriaTypeInfoDescr StructType
 * @subpackage Structs
 */
class MidocoCriteriaTypeInfoDescr extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $categoryId;
    /**
     * The typeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $typeId;
    /**
     * The guiPosition
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $guiPosition;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoCriteriaTypeInfoDescr
     * @uses MidocoCriteriaTypeInfoDescr::setCategoryId()
     * @uses MidocoCriteriaTypeInfoDescr::setTypeId()
     * @uses MidocoCriteriaTypeInfoDescr::setGuiPosition()
     * @uses MidocoCriteriaTypeInfoDescr::setDescription()
     * @param int $categoryId
     * @param string $typeId
     * @param int $guiPosition
     * @param string $description
     */
    public function __construct(int $categoryId, string $typeId, int $guiPosition, ?string $description = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setTypeId($typeId)
            ->setGuiPosition($guiPosition)
            ->setDescription($description);
    }
    /**
     * Get categoryId value
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCriteriaTypeInfoDescr
     */
    public function setCategoryId(int $categoryId): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string
     */
    public function getTypeId(): string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCriteriaTypeInfoDescr
     */
    public function setTypeId(string $typeId): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get guiPosition value
     * @return int
     */
    public function getGuiPosition(): int
    {
        return $this->guiPosition;
    }
    /**
     * Set guiPosition value
     * @param int $guiPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCriteriaTypeInfoDescr
     */
    public function setGuiPosition(int $guiPosition): self
    {
        // validation for constraint: int
        if (!is_null($guiPosition) && !(is_int($guiPosition) || ctype_digit($guiPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($guiPosition, true), gettype($guiPosition)), __LINE__);
        }
        $this->guiPosition = $guiPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCriteriaTypeInfoDescr
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
}

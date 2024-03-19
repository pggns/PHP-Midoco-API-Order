<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCriteriaTypeInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCriteriaTypeInfo extends AbstractStructBase
{
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
     * Constructor method for MidocoCriteriaTypeInfo
     * @uses MidocoCriteriaTypeInfo::setTypeId()
     * @uses MidocoCriteriaTypeInfo::setGuiPosition()
     * @param string $typeId
     * @param int $guiPosition
     */
    public function __construct(string $typeId, int $guiPosition)
    {
        $this
            ->setTypeId($typeId)
            ->setGuiPosition($guiPosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCriteriaTypeInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCriteriaTypeInfo
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
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for remark StructType
 * Meta information extracted from the WSDL
 * - documentation: freetext info, markable for print on customer documents, or internal
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Remark extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The print_allowed
     * @var bool|null
     */
    protected ?bool $print_allowed = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The servicePosition
     * @var int|null
     */
    protected ?int $servicePosition = null;
    /**
     * The printAllowed
     * @var bool|null
     */
    protected ?bool $printAllowed = null;
    /**
     * Constructor method for remark
     * @uses Remark::setPosition()
     * @uses Remark::setPrint_allowed()
     * @uses Remark::setText()
     * @uses Remark::setPrintType()
     * @uses Remark::setServicePosition()
     * @uses Remark::setPrintAllowed()
     * @param int $position
     * @param bool $print_allowed
     * @param string $text
     * @param string $printType
     * @param int $servicePosition
     * @param bool $printAllowed
     */
    public function __construct(int $position, ?bool $print_allowed = null, ?string $text = null, ?string $printType = null, ?int $servicePosition = null, ?bool $printAllowed = null)
    {
        $this
            ->setPosition($position)
            ->setPrint_allowed($print_allowed)
            ->setText($text)
            ->setPrintType($printType)
            ->setServicePosition($servicePosition)
            ->setPrintAllowed($printAllowed);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\Remark
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get print_allowed value
     * @return bool|null
     */
    public function getPrint_allowed(): ?bool
    {
        return $this->{'print-allowed'};
    }
    /**
     * Set print_allowed value
     * @param bool $print_allowed
     * @return \Pggns\MidocoApi\Order\StructType\Remark
     */
    public function setPrint_allowed(?bool $print_allowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($print_allowed) && !is_bool($print_allowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($print_allowed, true), gettype($print_allowed)), __LINE__);
        }
        $this->print_allowed = $this->{'print-allowed'} = $print_allowed;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\Remark
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\Remark
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get servicePosition value
     * @return int|null
     */
    public function getServicePosition(): ?int
    {
        return $this->servicePosition;
    }
    /**
     * Set servicePosition value
     * @param int $servicePosition
     * @return \Pggns\MidocoApi\Order\StructType\Remark
     */
    public function setServicePosition(?int $servicePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($servicePosition) && !(is_int($servicePosition) || ctype_digit($servicePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($servicePosition, true), gettype($servicePosition)), __LINE__);
        }
        $this->servicePosition = $servicePosition;
        
        return $this;
    }
    /**
     * Get printAllowed value
     * @return bool|null
     */
    public function getPrintAllowed(): ?bool
    {
        return $this->printAllowed;
    }
    /**
     * Set printAllowed value
     * @param bool $printAllowed
     * @return \Pggns\MidocoApi\Order\StructType\Remark
     */
    public function setPrintAllowed(?bool $printAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllowed) && !is_bool($printAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllowed, true), gettype($printAllowed)), __LINE__);
        }
        $this->printAllowed = $printAllowed;
        
        return $this;
    }
}

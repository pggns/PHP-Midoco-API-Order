<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for order-remark StructType
 * Meta information extracted from the WSDL
 * - documentation: optional freetext remarks at order level (normally printed on documents below all services)
 * @subpackage Structs
 */
class Order_remark extends AbstractStructBase
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
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $print_allowed = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for order-remark
     * @uses Order_remark::setPosition()
     * @uses Order_remark::setPrint_allowed()
     * @uses Order_remark::setText()
     * @param int $position
     * @param bool $print_allowed
     * @param string $text
     */
    public function __construct(int $position, ?bool $print_allowed = true, ?string $text = null)
    {
        $this
            ->setPosition($position)
            ->setPrint_allowed($print_allowed)
            ->setText($text);
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
     * @return \Pggns\MidocoApi\Order\StructType\Order_remark
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
     * @return \Pggns\MidocoApi\Order\StructType\Order_remark
     */
    public function setPrint_allowed(?bool $print_allowed = true): self
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
     * @return \Pggns\MidocoApi\Order\StructType\Order_remark
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
}

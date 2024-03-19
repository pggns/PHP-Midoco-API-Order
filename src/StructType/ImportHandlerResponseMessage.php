<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportHandlerResponseMessage StructType
 * Meta information extracted from the WSDL
 * - documentation: A message for humans that informs about issues or computation results.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportHandlerResponseMessage extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The level
     * @var string|null
     */
    protected ?string $level = null;
    /**
     * Constructor method for ImportHandlerResponseMessage
     * @uses ImportHandlerResponseMessage::set_()
     * @uses ImportHandlerResponseMessage::setLevel()
     * @param string $_
     * @param string $level
     */
    public function __construct(?string $_ = null, ?string $level = null)
    {
        $this
            ->set_($_)
            ->setLevel($level);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param string $level
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage
     */
    public function setLevel(?string $level = null): self
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
        
        return $this;
    }
}

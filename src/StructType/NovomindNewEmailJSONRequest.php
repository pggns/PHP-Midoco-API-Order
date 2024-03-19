<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NovomindNewEmailJSONRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NovomindNewEmailJSONRequest extends AbstractStructBase
{
    /**
     * The midocoMail
     * @var string|null
     */
    protected ?string $midocoMail = null;
    /**
     * The map
     * @var string|null
     */
    protected ?string $map = null;
    /**
     * Constructor method for NovomindNewEmailJSONRequest
     * @uses NovomindNewEmailJSONRequest::setMidocoMail()
     * @uses NovomindNewEmailJSONRequest::setMap()
     * @param string $midocoMail
     * @param string $map
     */
    public function __construct(?string $midocoMail = null, ?string $map = null)
    {
        $this
            ->setMidocoMail($midocoMail)
            ->setMap($map);
    }
    /**
     * Get midocoMail value
     * @return string|null
     */
    public function getMidocoMail(): ?string
    {
        return $this->midocoMail;
    }
    /**
     * Set midocoMail value
     * @param string $midocoMail
     * @return \Pggns\MidocoApi\Order\StructType\NovomindNewEmailJSONRequest
     */
    public function setMidocoMail(?string $midocoMail = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoMail) && !is_string($midocoMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoMail, true), gettype($midocoMail)), __LINE__);
        }
        $this->midocoMail = $midocoMail;
        
        return $this;
    }
    /**
     * Get map value
     * @return string|null
     */
    public function getMap(): ?string
    {
        return $this->map;
    }
    /**
     * Set map value
     * @param string $map
     * @return \Pggns\MidocoApi\Order\StructType\NovomindNewEmailJSONRequest
     */
    public function setMap(?string $map = null): self
    {
        // validation for constraint: string
        if (!is_null($map) && !is_string($map)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($map, true), gettype($map)), __LINE__);
        }
        $this->map = $map;
        
        return $this;
    }
}

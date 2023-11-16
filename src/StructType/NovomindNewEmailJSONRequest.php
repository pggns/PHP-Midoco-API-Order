<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NovomindNewEmailJSONRequest StructType
 * @subpackage Structs
 */
class NovomindNewEmailJSONRequest extends AbstractStructBase
{
    /**
     * The midocoMail
     * @var mixed|null
     */
    protected ?mixed $midocoMail = null;
    /**
     * The map
     * @var mixed|null
     */
    protected ?mixed $map = null;
    /**
     * Constructor method for NovomindNewEmailJSONRequest
     * @uses NovomindNewEmailJSONRequest::setMidocoMail()
     * @uses NovomindNewEmailJSONRequest::setMap()
     * @param mixed $midocoMail
     * @param mixed $map
     */
    public function __construct(?mixed $midocoMail = null, ?mixed $map = null)
    {
        $this
            ->setMidocoMail($midocoMail)
            ->setMap($map);
    }
    /**
     * Get midocoMail value
     * @return mixed|null
     */
    public function getMidocoMail(): ?mixed
    {
        return $this->midocoMail;
    }
    /**
     * Set midocoMail value
     * @param mixed $midocoMail
     * @return \Pggns\MidocoApi\Order\StructType\NovomindNewEmailJSONRequest
     */
    public function setMidocoMail(?mixed $midocoMail = null): self
    {
        $this->midocoMail = $midocoMail;
        
        return $this;
    }
    /**
     * Get map value
     * @return mixed|null
     */
    public function getMap(): ?mixed
    {
        return $this->map;
    }
    /**
     * Set map value
     * @param mixed $map
     * @return \Pggns\MidocoApi\Order\StructType\NovomindNewEmailJSONRequest
     */
    public function setMap(?mixed $map = null): self
    {
        $this->map = $map;
        
        return $this;
    }
}

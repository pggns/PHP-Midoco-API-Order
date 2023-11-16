<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderId StructType
 * @subpackage Structs
 */
class MidocoOrderId extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * Constructor method for MidocoOrderId
     * @uses MidocoOrderId::setId()
     * @param int $id
     */
    public function __construct(?int $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderId
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoActionAtEmtpyType StructType
 * @subpackage Structs
 */
class MidocoActionAtEmtpyType extends AbstractStructBase
{
    /**
     * The action
     * @var int|null
     */
    protected ?int $action = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoActionAtEmtpyType
     * @uses MidocoActionAtEmtpyType::setAction()
     * @uses MidocoActionAtEmtpyType::setDescription()
     * @param int $action
     * @param string $description
     */
    public function __construct(?int $action = null, ?string $description = null)
    {
        $this
            ->setAction($action)
            ->setDescription($description);
    }
    /**
     * Get action value
     * @return int|null
     */
    public function getAction(): ?int
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param int $action
     * @return \Pggns\MidocoApi\Order\StructType\MidocoActionAtEmtpyType
     */
    public function setAction(?int $action = null): self
    {
        // validation for constraint: int
        if (!is_null($action) && !(is_int($action) || ctype_digit($action))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoActionAtEmtpyType
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

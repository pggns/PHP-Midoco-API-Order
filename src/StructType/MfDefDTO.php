<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MfDefDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MfDefDTO extends AbstractStructBase
{
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * The className
     * @var string|null
     */
    protected ?string $className = null;
    /**
     * The emptyFieldAction
     * @var int|null
     */
    protected ?int $emptyFieldAction = null;
    /**
     * The handler
     * @var int|null
     */
    protected ?int $handler = null;
    /**
     * The listener
     * @var string|null
     */
    protected ?string $listener = null;
    /**
     * The mandatory
     * @var int|null
     */
    protected ?int $mandatory = null;
    /**
     * Constructor method for MfDefDTO
     * @uses MfDefDTO::setAttrName()
     * @uses MfDefDTO::setBean()
     * @uses MfDefDTO::setClassName()
     * @uses MfDefDTO::setEmptyFieldAction()
     * @uses MfDefDTO::setHandler()
     * @uses MfDefDTO::setListener()
     * @uses MfDefDTO::setMandatory()
     * @param string $attrName
     * @param string $bean
     * @param string $className
     * @param int $emptyFieldAction
     * @param int $handler
     * @param string $listener
     * @param int $mandatory
     */
    public function __construct(?string $attrName = null, ?string $bean = null, ?string $className = null, ?int $emptyFieldAction = null, ?int $handler = null, ?string $listener = null, ?int $mandatory = null)
    {
        $this
            ->setAttrName($attrName)
            ->setBean($bean)
            ->setClassName($className)
            ->setEmptyFieldAction($emptyFieldAction)
            ->setHandler($handler)
            ->setListener($listener)
            ->setMandatory($mandatory);
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Order\StructType\MfDefDTO
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get bean value
     * @return string|null
     */
    public function getBean(): ?string
    {
        return $this->bean;
    }
    /**
     * Set bean value
     * @param string $bean
     * @return \Pggns\MidocoApi\Order\StructType\MfDefDTO
     */
    public function setBean(?string $bean = null): self
    {
        // validation for constraint: string
        if (!is_null($bean) && !is_string($bean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bean, true), gettype($bean)), __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
    /**
     * Get className value
     * @return string|null
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }
    /**
     * Set className value
     * @param string $className
     * @return \Pggns\MidocoApi\Order\StructType\MfDefDTO
     */
    public function setClassName(?string $className = null): self
    {
        // validation for constraint: string
        if (!is_null($className) && !is_string($className)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($className, true), gettype($className)), __LINE__);
        }
        $this->className = $className;
        
        return $this;
    }
    /**
     * Get emptyFieldAction value
     * @return int|null
     */
    public function getEmptyFieldAction(): ?int
    {
        return $this->emptyFieldAction;
    }
    /**
     * Set emptyFieldAction value
     * @param int $emptyFieldAction
     * @return \Pggns\MidocoApi\Order\StructType\MfDefDTO
     */
    public function setEmptyFieldAction(?int $emptyFieldAction = null): self
    {
        // validation for constraint: int
        if (!is_null($emptyFieldAction) && !(is_int($emptyFieldAction) || ctype_digit($emptyFieldAction))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emptyFieldAction, true), gettype($emptyFieldAction)), __LINE__);
        }
        $this->emptyFieldAction = $emptyFieldAction;
        
        return $this;
    }
    /**
     * Get handler value
     * @return int|null
     */
    public function getHandler(): ?int
    {
        return $this->handler;
    }
    /**
     * Set handler value
     * @param int $handler
     * @return \Pggns\MidocoApi\Order\StructType\MfDefDTO
     */
    public function setHandler(?int $handler = null): self
    {
        // validation for constraint: int
        if (!is_null($handler) && !(is_int($handler) || ctype_digit($handler))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($handler, true), gettype($handler)), __LINE__);
        }
        $this->handler = $handler;
        
        return $this;
    }
    /**
     * Get listener value
     * @return string|null
     */
    public function getListener(): ?string
    {
        return $this->listener;
    }
    /**
     * Set listener value
     * @param string $listener
     * @return \Pggns\MidocoApi\Order\StructType\MfDefDTO
     */
    public function setListener(?string $listener = null): self
    {
        // validation for constraint: string
        if (!is_null($listener) && !is_string($listener)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listener, true), gettype($listener)), __LINE__);
        }
        $this->listener = $listener;
        
        return $this;
    }
    /**
     * Get mandatory value
     * @return int|null
     */
    public function getMandatory(): ?int
    {
        return $this->mandatory;
    }
    /**
     * Set mandatory value
     * @param int $mandatory
     * @return \Pggns\MidocoApi\Order\StructType\MfDefDTO
     */
    public function setMandatory(?int $mandatory = null): self
    {
        // validation for constraint: int
        if (!is_null($mandatory) && !(is_int($mandatory) || ctype_digit($mandatory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandatory, true), gettype($mandatory)), __LINE__);
        }
        $this->mandatory = $mandatory;
        
        return $this;
    }
}

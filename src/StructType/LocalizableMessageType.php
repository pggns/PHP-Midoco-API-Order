<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalizableMessageType StructType
 * @subpackage Structs
 */
class LocalizableMessageType extends AbstractStructBase
{
    /**
     * The bundle
     * Meta information extracted from the WSDL
     * - documentation: The message bundle for i18n
     * @var string|null
     */
    protected ?string $bundle = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - documentation: The message code in the error bundle
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The args
     * Meta information extracted from the WSDL
     * - documentation: The arguments for the message
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $args = [];
    /**
     * Constructor method for LocalizableMessageType
     * @uses LocalizableMessageType::setBundle()
     * @uses LocalizableMessageType::setCode()
     * @uses LocalizableMessageType::setArgs()
     * @param string $bundle
     * @param string $code
     * @param string[] $args
     */
    public function __construct(?string $bundle = null, ?string $code = null, array $args = [])
    {
        $this
            ->setBundle($bundle)
            ->setCode($code)
            ->setArgs($args);
    }
    /**
     * Get bundle value
     * @return string|null
     */
    public function getBundle(): ?string
    {
        return $this->bundle;
    }
    /**
     * Set bundle value
     * @param string $bundle
     * @return \Pggns\MidocoApi\Order\StructType\LocalizableMessageType
     */
    public function setBundle(?string $bundle = null): self
    {
        // validation for constraint: string
        if (!is_null($bundle) && !is_string($bundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bundle, true), gettype($bundle)), __LINE__);
        }
        $this->bundle = $bundle;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\LocalizableMessageType
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get args value
     * @return string[]
     */
    public function getArgs(): array
    {
        return $this->args;
    }
    /**
     * This method is responsible for validating the values passed to the setArgs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArgs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArgsForArrayConstraintsFromSetArgs(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $localizableMessageTypeArgsItem) {
            // validation for constraint: itemType
            if (!is_string($localizableMessageTypeArgsItem)) {
                $invalidValues[] = is_object($localizableMessageTypeArgsItem) ? get_class($localizableMessageTypeArgsItem) : sprintf('%s(%s)', gettype($localizableMessageTypeArgsItem), var_export($localizableMessageTypeArgsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The args property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set args value
     * @throws InvalidArgumentException
     * @param string[] $args
     * @return \Pggns\MidocoApi\Order\StructType\LocalizableMessageType
     */
    public function setArgs(array $args = []): self
    {
        // validation for constraint: array
        if ('' !== ($argsArrayErrorMessage = self::validateArgsForArrayConstraintsFromSetArgs($args))) {
            throw new InvalidArgumentException($argsArrayErrorMessage, __LINE__);
        }
        $this->args = $args;
        
        return $this;
    }
    /**
     * Add item to args value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\LocalizableMessageType
     */
    public function addToArgs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The args property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->args[] = $item;
        
        return $this;
    }
}

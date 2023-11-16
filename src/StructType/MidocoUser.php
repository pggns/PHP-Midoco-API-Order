<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUser StructType
 * @subpackage Structs
 */
class MidocoUser extends UserDTO
{
    /**
     * The MidocoCrsExpedient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrsExpedient
     * @var \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO[]
     */
    protected array $MidocoCrsExpedient = [];
    /**
     * Constructor method for MidocoUser
     * @uses MidocoUser::setMidocoCrsExpedient()
     * @param \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO[] $midocoCrsExpedient
     */
    public function __construct(array $midocoCrsExpedient = [])
    {
        $this
            ->setMidocoCrsExpedient($midocoCrsExpedient);
    }
    /**
     * Get MidocoCrsExpedient value
     * @return \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO[]
     */
    public function getMidocoCrsExpedient(): array
    {
        return $this->MidocoCrsExpedient;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrsExpedient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrsExpedient method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrsExpedientForArrayConstraintsFromSetMidocoCrsExpedient(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUserMidocoCrsExpedientItem) {
            // validation for constraint: itemType
            if (!$midocoUserMidocoCrsExpedientItem instanceof \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO) {
                $invalidValues[] = is_object($midocoUserMidocoCrsExpedientItem) ? get_class($midocoUserMidocoCrsExpedientItem) : sprintf('%s(%s)', gettype($midocoUserMidocoCrsExpedientItem), var_export($midocoUserMidocoCrsExpedientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrsExpedient property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrsExpedient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO[] $midocoCrsExpedient
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUser
     */
    public function setMidocoCrsExpedient(array $midocoCrsExpedient = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrsExpedientArrayErrorMessage = self::validateMidocoCrsExpedientForArrayConstraintsFromSetMidocoCrsExpedient($midocoCrsExpedient))) {
            throw new InvalidArgumentException($midocoCrsExpedientArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrsExpedient = $midocoCrsExpedient;
        
        return $this;
    }
    /**
     * Add item to MidocoCrsExpedient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUser
     */
    public function addToMidocoCrsExpedient(\Pggns\MidocoApi\Order\StructType\CrsExpedientDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrsExpedient property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrsExpedientDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrsExpedient[] = $item;
        
        return $this;
    }
}

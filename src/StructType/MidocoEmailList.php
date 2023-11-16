<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoEmailList StructType
 * @subpackage Structs
 */
class MidocoEmailList extends AbstractStructBase
{
    /**
     * The MidocoEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    protected array $MidocoEmail = [];
    /**
     * The EmailType
     * @var string|null
     */
    protected ?string $EmailType = null;
    /**
     * Constructor method for MidocoEmailList
     * @uses MidocoEmailList::setMidocoEmail()
     * @uses MidocoEmailList::setEmailType()
     * @param mixed[] $midocoEmail
     * @param string $emailType
     */
    public function __construct(array $midocoEmail = [], ?string $emailType = null)
    {
        $this
            ->setMidocoEmail($midocoEmail)
            ->setEmailType($emailType);
    }
    /**
     * Get MidocoEmail value
     * @return mixed[]
     */
    public function getMidocoEmail(): array
    {
        return $this->MidocoEmail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEmailForArrayConstraintsFromSetMidocoEmail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoEmailListMidocoEmailItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($midocoEmailListMidocoEmailItem) ? get_class($midocoEmailListMidocoEmailItem) : sprintf('%s(%s)', gettype($midocoEmailListMidocoEmailItem), var_export($midocoEmailListMidocoEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEmail property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEmail value
     * @throws InvalidArgumentException
     * @param mixed[] $midocoEmail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailList
     */
    public function setMidocoEmail(array $midocoEmail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEmailArrayErrorMessage = self::validateMidocoEmailForArrayConstraintsFromSetMidocoEmail($midocoEmail))) {
            throw new InvalidArgumentException($midocoEmailArrayErrorMessage, __LINE__);
        }
        $this->MidocoEmail = $midocoEmail;
        
        return $this;
    }
    /**
     * Add item to MidocoEmail value
     * @throws InvalidArgumentException
     * @param mixed $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailList
     */
    public function addToMidocoEmail(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The MidocoEmail property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEmail[] = $item;
        
        return $this;
    }
    /**
     * Get EmailType value
     * @return string|null
     */
    public function getEmailType(): ?string
    {
        return $this->EmailType;
    }
    /**
     * Set EmailType value
     * @param string $emailType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailList
     */
    public function setEmailType(?string $emailType = null): self
    {
        // validation for constraint: string
        if (!is_null($emailType) && !is_string($emailType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailType, true), gettype($emailType)), __LINE__);
        }
        $this->EmailType = $emailType;
        
        return $this;
    }
}

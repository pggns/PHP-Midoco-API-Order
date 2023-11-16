<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTssClient StructType
 * @subpackage Structs
 */
class MidocoTssClient extends TssClientDTO
{
    /**
     * The MidocoTssClientMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTssClientMetadata
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata[]
     */
    protected array $MidocoTssClientMetadata = [];
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The major_version
     * @var string|null
     */
    protected ?string $major_version = null;
    /**
     * Constructor method for MidocoTssClient
     * @uses MidocoTssClient::setMidocoTssClientMetadata()
     * @uses MidocoTssClient::setComment()
     * @uses MidocoTssClient::setMajor_version()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata[] $midocoTssClientMetadata
     * @param string $comment
     * @param string $major_version
     */
    public function __construct(array $midocoTssClientMetadata = [], ?string $comment = null, ?string $major_version = null)
    {
        $this
            ->setMidocoTssClientMetadata($midocoTssClientMetadata)
            ->setComment($comment)
            ->setMajor_version($major_version);
    }
    /**
     * Get MidocoTssClientMetadata value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata[]
     */
    public function getMidocoTssClientMetadata(): array
    {
        return $this->MidocoTssClientMetadata;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTssClientMetadata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssClientMetadata method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssClientMetadataForArrayConstraintsFromSetMidocoTssClientMetadata(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTssClientMidocoTssClientMetadataItem) {
            // validation for constraint: itemType
            if (!$midocoTssClientMidocoTssClientMetadataItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata) {
                $invalidValues[] = is_object($midocoTssClientMidocoTssClientMetadataItem) ? get_class($midocoTssClientMidocoTssClientMetadataItem) : sprintf('%s(%s)', gettype($midocoTssClientMidocoTssClientMetadataItem), var_export($midocoTssClientMidocoTssClientMetadataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssClientMetadata property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssClientMetadata value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata[] $midocoTssClientMetadata
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient
     */
    public function setMidocoTssClientMetadata(array $midocoTssClientMetadata = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssClientMetadataArrayErrorMessage = self::validateMidocoTssClientMetadataForArrayConstraintsFromSetMidocoTssClientMetadata($midocoTssClientMetadata))) {
            throw new InvalidArgumentException($midocoTssClientMetadataArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssClientMetadata = $midocoTssClientMetadata;
        
        return $this;
    }
    /**
     * Add item to MidocoTssClientMetadata value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient
     */
    public function addToMidocoTssClientMetadata(\Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata) {
            throw new InvalidArgumentException(sprintf('The MidocoTssClientMetadata property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssClientMetadata, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssClientMetadata[] = $item;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get major_version value
     * @return string|null
     */
    public function getMajor_version(): ?string
    {
        return $this->{'major-version'};
    }
    /**
     * Set major_version value
     * @param string $major_version
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient
     */
    public function setMajor_version(?string $major_version = null): self
    {
        // validation for constraint: string
        if (!is_null($major_version) && !is_string($major_version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($major_version, true), gettype($major_version)), __LINE__);
        }
        $this->major_version = $this->{'major-version'} = $major_version;
        
        return $this;
    }
}

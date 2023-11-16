<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSftpCredentialListResponse StructType
 * @subpackage Structs
 */
class GetSftpCredentialListResponse extends AbstractStructBase
{
    /**
     * The MidocoSftpCredential
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSftpCredential
     * @var \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO[]
     */
    protected array $MidocoSftpCredential = [];
    /**
     * Constructor method for GetSftpCredentialListResponse
     * @uses GetSftpCredentialListResponse::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO[] $midocoSftpCredential
     */
    public function __construct(array $midocoSftpCredential = [])
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO[]
     */
    public function getMidocoSftpCredential(): array
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSftpCredential method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSftpCredential method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSftpCredentialForArrayConstraintsFromSetMidocoSftpCredential(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSftpCredentialListResponseMidocoSftpCredentialItem) {
            // validation for constraint: itemType
            if (!$getSftpCredentialListResponseMidocoSftpCredentialItem instanceof \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO) {
                $invalidValues[] = is_object($getSftpCredentialListResponseMidocoSftpCredentialItem) ? get_class($getSftpCredentialListResponseMidocoSftpCredentialItem) : sprintf('%s(%s)', gettype($getSftpCredentialListResponseMidocoSftpCredentialItem), var_export($getSftpCredentialListResponseMidocoSftpCredentialItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSftpCredential property can only contain items of type \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSftpCredential value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO[] $midocoSftpCredential
     * @return \Pggns\MidocoApi\Order\StructType\GetSftpCredentialListResponse
     */
    public function setMidocoSftpCredential(array $midocoSftpCredential = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSftpCredentialArrayErrorMessage = self::validateMidocoSftpCredentialForArrayConstraintsFromSetMidocoSftpCredential($midocoSftpCredential))) {
            throw new InvalidArgumentException($midocoSftpCredentialArrayErrorMessage, __LINE__);
        }
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
    /**
     * Add item to MidocoSftpCredential value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSftpCredentialListResponse
     */
    public function addToMidocoSftpCredential(\Pggns\MidocoApi\Order\StructType\SftpCredentialDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSftpCredential property can only contain items of type \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSftpCredential[] = $item;
        
        return $this;
    }
}

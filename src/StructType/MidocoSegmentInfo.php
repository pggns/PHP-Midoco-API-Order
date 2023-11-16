<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSegmentInfo StructType
 * @subpackage Structs
 */
class MidocoSegmentInfo extends AbstractStructBase
{
    /**
     * The segmentNo
     * @var int|null
     */
    protected ?int $segmentNo = null;
    /**
     * The documentNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $documentNo = [];
    /**
     * Constructor method for MidocoSegmentInfo
     * @uses MidocoSegmentInfo::setSegmentNo()
     * @uses MidocoSegmentInfo::setDocumentNo()
     * @param int $segmentNo
     * @param string[] $documentNo
     */
    public function __construct(?int $segmentNo = null, array $documentNo = [])
    {
        $this
            ->setSegmentNo($segmentNo)
            ->setDocumentNo($documentNo);
    }
    /**
     * Get segmentNo value
     * @return int|null
     */
    public function getSegmentNo(): ?int
    {
        return $this->segmentNo;
    }
    /**
     * Set segmentNo value
     * @param int $segmentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSegmentInfo
     */
    public function setSegmentNo(?int $segmentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentNo) && !(is_int($segmentNo) || ctype_digit($segmentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentNo, true), gettype($segmentNo)), __LINE__);
        }
        $this->segmentNo = $segmentNo;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return string[]
     */
    public function getDocumentNo(): array
    {
        return $this->documentNo;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentNo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentNoForArrayConstraintsFromSetDocumentNo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSegmentInfoDocumentNoItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSegmentInfoDocumentNoItem)) {
                $invalidValues[] = is_object($midocoSegmentInfoDocumentNoItem) ? get_class($midocoSegmentInfoDocumentNoItem) : sprintf('%s(%s)', gettype($midocoSegmentInfoDocumentNoItem), var_export($midocoSegmentInfoDocumentNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The documentNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set documentNo value
     * @throws InvalidArgumentException
     * @param string[] $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSegmentInfo
     */
    public function setDocumentNo(array $documentNo = []): self
    {
        // validation for constraint: array
        if ('' !== ($documentNoArrayErrorMessage = self::validateDocumentNoForArrayConstraintsFromSetDocumentNo($documentNo))) {
            throw new InvalidArgumentException($documentNoArrayErrorMessage, __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Add item to documentNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSegmentInfo
     */
    public function addToDocumentNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The documentNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->documentNo[] = $item;
        
        return $this;
    }
}

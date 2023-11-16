<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraPackageInfo StructType
 * @subpackage Structs
 */
class MidocoKaeraPackageInfo extends AbstractStructBase
{
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Order\StructType\PackageitemDTO[]
     */
    protected array $MidocoPackageInfo = [];
    /**
     * Constructor method for MidocoKaeraPackageInfo
     * @uses MidocoKaeraPackageInfo::setMidocoPackageInfo()
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO[] $midocoPackageInfo
     */
    public function __construct(array $midocoPackageInfo = [])
    {
        $this
            ->setMidocoPackageInfo($midocoPackageInfo);
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO[]
     */
    public function getMidocoPackageInfo(): array
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPackageInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPackageInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPackageInfoForArrayConstraintsFromSetMidocoPackageInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoKaeraPackageInfoMidocoPackageInfoItem) {
            // validation for constraint: itemType
            if (!$midocoKaeraPackageInfoMidocoPackageInfoItem instanceof \Pggns\MidocoApi\Order\StructType\PackageitemDTO) {
                $invalidValues[] = is_object($midocoKaeraPackageInfoMidocoPackageInfoItem) ? get_class($midocoKaeraPackageInfoMidocoPackageInfoItem) : sprintf('%s(%s)', gettype($midocoKaeraPackageInfoMidocoPackageInfoItem), var_export($midocoKaeraPackageInfoMidocoPackageInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPackageInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\PackageitemDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPackageInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO[] $midocoPackageInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageInfo
     */
    public function setMidocoPackageInfo(array $midocoPackageInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPackageInfoArrayErrorMessage = self::validateMidocoPackageInfoForArrayConstraintsFromSetMidocoPackageInfo($midocoPackageInfo))) {
            throw new InvalidArgumentException($midocoPackageInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoPackageInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageInfo
     */
    public function addToMidocoPackageInfo(\Pggns\MidocoApi\Order\StructType\PackageitemDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PackageitemDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPackageInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\PackageitemDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPackageInfo[] = $item;
        
        return $this;
    }
}

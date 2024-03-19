<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGenericCSVImportMetaDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGenericCSVImportMetaDataResponse extends AbstractStructBase
{
    /**
     * The MidocoGenericCsvImportMetadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoGenericCsvImportMetadata
     * @var \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO $MidocoGenericCsvImportMetadata = null;
    /**
     * Constructor method for GetGenericCSVImportMetaDataResponse
     * @uses GetGenericCSVImportMetaDataResponse::setMidocoGenericCsvImportMetadata()
     * @param \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata = null)
    {
        $this
            ->setMidocoGenericCsvImportMetadata($midocoGenericCsvImportMetadata);
    }
    /**
     * Get MidocoGenericCsvImportMetadata value
     * @return \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO|null
     */
    public function getMidocoGenericCsvImportMetadata(): ?\Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO
    {
        return $this->MidocoGenericCsvImportMetadata;
    }
    /**
     * Set MidocoGenericCsvImportMetadata value
     * @param \Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata
     * @return \Pggns\MidocoApi\Order\StructType\GetGenericCSVImportMetaDataResponse
     */
    public function setMidocoGenericCsvImportMetadata(?\Pggns\MidocoApi\Order\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata = null): self
    {
        $this->MidocoGenericCsvImportMetadata = $midocoGenericCsvImportMetadata;
        
        return $this;
    }
}

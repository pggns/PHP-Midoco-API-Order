<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberVatSchemasRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelNumberVatSchemasRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberVatSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberVatSchema
     * @var \Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO $MidocoTravelNumberVatSchema = null;
    /**
     * Constructor method for GetTravelNumberVatSchemasRequest
     * @uses GetTravelNumberVatSchemasRequest::setMidocoTravelNumberVatSchema()
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema = null)
    {
        $this
            ->setMidocoTravelNumberVatSchema($midocoTravelNumberVatSchema);
    }
    /**
     * Get MidocoTravelNumberVatSchema value
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO|null
     */
    public function getMidocoTravelNumberVatSchema(): ?\Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO
    {
        return $this->MidocoTravelNumberVatSchema;
    }
    /**
     * Set MidocoTravelNumberVatSchema value
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNumberVatSchemasRequest
     */
    public function setMidocoTravelNumberVatSchema(?\Pggns\MidocoApi\Order\StructType\TravelNumberVatSchemaDTO $midocoTravelNumberVatSchema = null): self
    {
        $this->MidocoTravelNumberVatSchema = $midocoTravelNumberVatSchema;
        
        return $this;
    }
}

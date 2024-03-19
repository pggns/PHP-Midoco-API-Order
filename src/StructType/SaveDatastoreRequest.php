<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDatastoreRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDatastoreRequest extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Order\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for SaveDatastoreRequest
     * @uses SaveDatastoreRequest::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\Order\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\Order\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\Order\StructType\SaveDatastoreRequest
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\Order\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}

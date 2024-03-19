<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSftpCredentialRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSftpCredentialRequest extends AbstractStructBase
{
    /**
     * The MidocoSftpCredential
     * Meta information extracted from the WSDL
     * - ref: MidocoSftpCredential
     * @var \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for SaveSftpCredentialRequest
     * @uses SaveSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\Order\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\Order\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\Order\StructType\SaveSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\Order\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}

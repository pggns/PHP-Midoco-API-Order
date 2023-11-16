<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tss-Migration-Log StructType
 * @subpackage Structs
 */
class Tss_Migration_Log extends AbstractStructBase
{
    /**
     * The CancelTssClientResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CancelTssClientResponse
     * @var \Pggns\MidocoApi\Order\StructType\CancelTssClientResponse|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CancelTssClientResponse $CancelTssClientResponse = null;
    /**
     * The CreateTssClientResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CreateTssClientResponse
     * @var \Pggns\MidocoApi\Order\StructType\CreateTssClientResponse|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CreateTssClientResponse $CreateTssClientResponse = null;
    /**
     * The SendTssPukMailResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SendTssPukMailResponse
     * @var \Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse $SendTssPukMailResponse = null;
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Error = null;
    /**
     * The UnitName
     * @var string|null
     */
    protected ?string $UnitName = null;
    /**
     * The Successful
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $Successful = null;
    /**
     * The Ignore_Reason
     * @var string|null
     */
    protected ?string $Ignore_Reason = null;
    /**
     * The TSSv1_ID
     * @var string|null
     */
    protected ?string $TSSv1_ID = null;
    /**
     * The TSSv2_ID
     * @var string|null
     */
    protected ?string $TSSv2_ID = null;
    /**
     * The PukMailSent
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $PukMailSent = null;
    /**
     * The AdminName
     * @var string|null
     */
    protected ?string $AdminName = null;
    /**
     * The AdminMail
     * @var string|null
     */
    protected ?string $AdminMail = null;
    /**
     * Constructor method for Tss-Migration-Log
     * @uses Tss_Migration_Log::setCancelTssClientResponse()
     * @uses Tss_Migration_Log::setCreateTssClientResponse()
     * @uses Tss_Migration_Log::setSendTssPukMailResponse()
     * @uses Tss_Migration_Log::setError()
     * @uses Tss_Migration_Log::setUnitName()
     * @uses Tss_Migration_Log::setSuccessful()
     * @uses Tss_Migration_Log::setIgnore_Reason()
     * @uses Tss_Migration_Log::setTSSv1_ID()
     * @uses Tss_Migration_Log::setTSSv2_ID()
     * @uses Tss_Migration_Log::setPukMailSent()
     * @uses Tss_Migration_Log::setAdminName()
     * @uses Tss_Migration_Log::setAdminMail()
     * @param \Pggns\MidocoApi\Order\StructType\CancelTssClientResponse $cancelTssClientResponse
     * @param \Pggns\MidocoApi\Order\StructType\CreateTssClientResponse $createTssClientResponse
     * @param \Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse $sendTssPukMailResponse
     * @param string $error
     * @param string $unitName
     * @param bool $successful
     * @param string $ignore_Reason
     * @param string $tSSv1_ID
     * @param string $tSSv2_ID
     * @param bool $pukMailSent
     * @param string $adminName
     * @param string $adminMail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CancelTssClientResponse $cancelTssClientResponse = null, ?\Pggns\MidocoApi\Order\StructType\CreateTssClientResponse $createTssClientResponse = null, ?\Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse $sendTssPukMailResponse = null, ?string $error = null, ?string $unitName = null, ?bool $successful = false, ?string $ignore_Reason = null, ?string $tSSv1_ID = null, ?string $tSSv2_ID = null, ?bool $pukMailSent = false, ?string $adminName = null, ?string $adminMail = null)
    {
        $this
            ->setCancelTssClientResponse($cancelTssClientResponse)
            ->setCreateTssClientResponse($createTssClientResponse)
            ->setSendTssPukMailResponse($sendTssPukMailResponse)
            ->setError($error)
            ->setUnitName($unitName)
            ->setSuccessful($successful)
            ->setIgnore_Reason($ignore_Reason)
            ->setTSSv1_ID($tSSv1_ID)
            ->setTSSv2_ID($tSSv2_ID)
            ->setPukMailSent($pukMailSent)
            ->setAdminName($adminName)
            ->setAdminMail($adminMail);
    }
    /**
     * Get CancelTssClientResponse value
     * @return \Pggns\MidocoApi\Order\StructType\CancelTssClientResponse|null
     */
    public function getCancelTssClientResponse(): ?\Pggns\MidocoApi\Order\StructType\CancelTssClientResponse
    {
        return $this->CancelTssClientResponse;
    }
    /**
     * Set CancelTssClientResponse value
     * @param \Pggns\MidocoApi\Order\StructType\CancelTssClientResponse $cancelTssClientResponse
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setCancelTssClientResponse(?\Pggns\MidocoApi\Order\StructType\CancelTssClientResponse $cancelTssClientResponse = null): self
    {
        $this->CancelTssClientResponse = $cancelTssClientResponse;
        
        return $this;
    }
    /**
     * Get CreateTssClientResponse value
     * @return \Pggns\MidocoApi\Order\StructType\CreateTssClientResponse|null
     */
    public function getCreateTssClientResponse(): ?\Pggns\MidocoApi\Order\StructType\CreateTssClientResponse
    {
        return $this->CreateTssClientResponse;
    }
    /**
     * Set CreateTssClientResponse value
     * @param \Pggns\MidocoApi\Order\StructType\CreateTssClientResponse $createTssClientResponse
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setCreateTssClientResponse(?\Pggns\MidocoApi\Order\StructType\CreateTssClientResponse $createTssClientResponse = null): self
    {
        $this->CreateTssClientResponse = $createTssClientResponse;
        
        return $this;
    }
    /**
     * Get SendTssPukMailResponse value
     * @return \Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse|null
     */
    public function getSendTssPukMailResponse(): ?\Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse
    {
        return $this->SendTssPukMailResponse;
    }
    /**
     * Set SendTssPukMailResponse value
     * @param \Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse $sendTssPukMailResponse
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setSendTssPukMailResponse(?\Pggns\MidocoApi\Order\StructType\SendTssPukMailResponse $sendTssPukMailResponse = null): self
    {
        $this->SendTssPukMailResponse = $sendTssPukMailResponse;
        
        return $this;
    }
    /**
     * Get Error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Get UnitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->UnitName;
    }
    /**
     * Set UnitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->UnitName = $unitName;
        
        return $this;
    }
    /**
     * Get Successful value
     * @return bool|null
     */
    public function getSuccessful(): ?bool
    {
        return $this->Successful;
    }
    /**
     * Set Successful value
     * @param bool $successful
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setSuccessful(?bool $successful = false): self
    {
        // validation for constraint: boolean
        if (!is_null($successful) && !is_bool($successful)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($successful, true), gettype($successful)), __LINE__);
        }
        $this->Successful = $successful;
        
        return $this;
    }
    /**
     * Get Ignore_Reason value
     * @return string|null
     */
    public function getIgnore_Reason(): ?string
    {
        return $this->{'Ignore-Reason'};
    }
    /**
     * Set Ignore_Reason value
     * @param string $ignore_Reason
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setIgnore_Reason(?string $ignore_Reason = null): self
    {
        // validation for constraint: string
        if (!is_null($ignore_Reason) && !is_string($ignore_Reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ignore_Reason, true), gettype($ignore_Reason)), __LINE__);
        }
        $this->Ignore_Reason = $this->{'Ignore-Reason'} = $ignore_Reason;
        
        return $this;
    }
    /**
     * Get TSSv1_ID value
     * @return string|null
     */
    public function getTSSv1_ID(): ?string
    {
        return $this->{'TSSv1-ID'};
    }
    /**
     * Set TSSv1_ID value
     * @param string $tSSv1_ID
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setTSSv1_ID(?string $tSSv1_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($tSSv1_ID) && !is_string($tSSv1_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tSSv1_ID, true), gettype($tSSv1_ID)), __LINE__);
        }
        $this->TSSv1_ID = $this->{'TSSv1-ID'} = $tSSv1_ID;
        
        return $this;
    }
    /**
     * Get TSSv2_ID value
     * @return string|null
     */
    public function getTSSv2_ID(): ?string
    {
        return $this->{'TSSv2-ID'};
    }
    /**
     * Set TSSv2_ID value
     * @param string $tSSv2_ID
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setTSSv2_ID(?string $tSSv2_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($tSSv2_ID) && !is_string($tSSv2_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tSSv2_ID, true), gettype($tSSv2_ID)), __LINE__);
        }
        $this->TSSv2_ID = $this->{'TSSv2-ID'} = $tSSv2_ID;
        
        return $this;
    }
    /**
     * Get PukMailSent value
     * @return bool|null
     */
    public function getPukMailSent(): ?bool
    {
        return $this->PukMailSent;
    }
    /**
     * Set PukMailSent value
     * @param bool $pukMailSent
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setPukMailSent(?bool $pukMailSent = false): self
    {
        // validation for constraint: boolean
        if (!is_null($pukMailSent) && !is_bool($pukMailSent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pukMailSent, true), gettype($pukMailSent)), __LINE__);
        }
        $this->PukMailSent = $pukMailSent;
        
        return $this;
    }
    /**
     * Get AdminName value
     * @return string|null
     */
    public function getAdminName(): ?string
    {
        return $this->AdminName;
    }
    /**
     * Set AdminName value
     * @param string $adminName
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setAdminName(?string $adminName = null): self
    {
        // validation for constraint: string
        if (!is_null($adminName) && !is_string($adminName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminName, true), gettype($adminName)), __LINE__);
        }
        $this->AdminName = $adminName;
        
        return $this;
    }
    /**
     * Get AdminMail value
     * @return string|null
     */
    public function getAdminMail(): ?string
    {
        return $this->AdminMail;
    }
    /**
     * Set AdminMail value
     * @param string $adminMail
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log
     */
    public function setAdminMail(?string $adminMail = null): self
    {
        // validation for constraint: string
        if (!is_null($adminMail) && !is_string($adminMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminMail, true), gettype($adminMail)), __LINE__);
        }
        $this->AdminMail = $adminMail;
        
        return $this;
    }
}

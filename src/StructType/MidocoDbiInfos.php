<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDbiInfos StructType
 * @subpackage Structs
 */
class MidocoDbiInfos extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * The AE
     * @var string|null
     */
    protected ?string $AE = null;
    /**
     * The AK
     * @var string|null
     */
    protected ?string $AK = null;
    /**
     * The AU
     * @var string|null
     */
    protected ?string $AU = null;
    /**
     * The BD
     * @var string|null
     */
    protected ?string $BD = null;
    /**
     * The DS
     * @var string|null
     */
    protected ?string $DS = null;
    /**
     * The IK
     * @var string|null
     */
    protected ?string $IK = null;
    /**
     * The KS
     * @var string|null
     */
    protected ?string $KS = null;
    /**
     * The PK
     * @var string|null
     */
    protected ?string $PK = null;
    /**
     * The PR
     * @var string|null
     */
    protected ?string $PR = null;
    /**
     * The RZ
     * @var string|null
     */
    protected ?string $RZ = null;
    /**
     * The RD
     * @var string|null
     */
    protected ?string $RD = null;
    /**
     * The US
     * @var string|null
     */
    protected ?string $US = null;
    /**
     * The BS
     * @var string|null
     */
    protected ?string $BS = null;
    /**
     * The F1
     * @var string|null
     */
    protected ?string $F1 = null;
    /**
     * The F2
     * @var string|null
     */
    protected ?string $F2 = null;
    /**
     * The F3
     * @var string|null
     */
    protected ?string $F3 = null;
    /**
     * The F4
     * @var string|null
     */
    protected ?string $F4 = null;
    /**
     * The F5
     * @var string|null
     */
    protected ?string $F5 = null;
    /**
     * The F6
     * @var string|null
     */
    protected ?string $F6 = null;
    /**
     * The F7
     * @var string|null
     */
    protected ?string $F7 = null;
    /**
     * The F8
     * @var string|null
     */
    protected ?string $F8 = null;
    /**
     * The F9
     * @var string|null
     */
    protected ?string $F9 = null;
    /**
     * The F10
     * @var string|null
     */
    protected ?string $F10 = null;
    /**
     * The KSDB
     * @var string|null
     */
    protected ?string $KSDB = null;
    /**
     * The PKDB
     * @var string|null
     */
    protected ?string $PKDB = null;
    /**
     * The RDDB
     * @var string|null
     */
    protected ?string $RDDB = null;
    /**
     * The USDB
     * @var string|null
     */
    protected ?string $USDB = null;
    /**
     * The RZDB
     * @var string|null
     */
    protected ?string $RZDB = null;
    /**
     * The BSDB
     * @var string|null
     */
    protected ?string $BSDB = null;
    /**
     * The F1DB
     * @var string|null
     */
    protected ?string $F1DB = null;
    /**
     * The F2DB
     * @var string|null
     */
    protected ?string $F2DB = null;
    /**
     * The F3DB
     * @var string|null
     */
    protected ?string $F3DB = null;
    /**
     * The F4DB
     * @var string|null
     */
    protected ?string $F4DB = null;
    /**
     * The MidocoDbiDefValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiDefValue
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[]
     */
    protected array $MidocoDbiDefValue = [];
    /**
     * Constructor method for MidocoDbiInfos
     * @uses MidocoDbiInfos::setOrderId()
     * @uses MidocoDbiInfos::setItemId()
     * @uses MidocoDbiInfos::setPassengerAssignment()
     * @uses MidocoDbiInfos::setAE()
     * @uses MidocoDbiInfos::setAK()
     * @uses MidocoDbiInfos::setAU()
     * @uses MidocoDbiInfos::setBD()
     * @uses MidocoDbiInfos::setDS()
     * @uses MidocoDbiInfos::setIK()
     * @uses MidocoDbiInfos::setKS()
     * @uses MidocoDbiInfos::setPK()
     * @uses MidocoDbiInfos::setPR()
     * @uses MidocoDbiInfos::setRZ()
     * @uses MidocoDbiInfos::setRD()
     * @uses MidocoDbiInfos::setUS()
     * @uses MidocoDbiInfos::setBS()
     * @uses MidocoDbiInfos::setF1()
     * @uses MidocoDbiInfos::setF2()
     * @uses MidocoDbiInfos::setF3()
     * @uses MidocoDbiInfos::setF4()
     * @uses MidocoDbiInfos::setF5()
     * @uses MidocoDbiInfos::setF6()
     * @uses MidocoDbiInfos::setF7()
     * @uses MidocoDbiInfos::setF8()
     * @uses MidocoDbiInfos::setF9()
     * @uses MidocoDbiInfos::setF10()
     * @uses MidocoDbiInfos::setKSDB()
     * @uses MidocoDbiInfos::setPKDB()
     * @uses MidocoDbiInfos::setRDDB()
     * @uses MidocoDbiInfos::setUSDB()
     * @uses MidocoDbiInfos::setRZDB()
     * @uses MidocoDbiInfos::setBSDB()
     * @uses MidocoDbiInfos::setF1DB()
     * @uses MidocoDbiInfos::setF2DB()
     * @uses MidocoDbiInfos::setF3DB()
     * @uses MidocoDbiInfos::setF4DB()
     * @uses MidocoDbiInfos::setMidocoDbiDefValue()
     * @param int $orderId
     * @param int $itemId
     * @param int $passengerAssignment
     * @param string $aE
     * @param string $aK
     * @param string $aU
     * @param string $bD
     * @param string $dS
     * @param string $iK
     * @param string $kS
     * @param string $pK
     * @param string $pR
     * @param string $rZ
     * @param string $rD
     * @param string $uS
     * @param string $bS
     * @param string $f1
     * @param string $f2
     * @param string $f3
     * @param string $f4
     * @param string $f5
     * @param string $f6
     * @param string $f7
     * @param string $f8
     * @param string $f9
     * @param string $f10
     * @param string $kSDB
     * @param string $pKDB
     * @param string $rDDB
     * @param string $uSDB
     * @param string $rZDB
     * @param string $bSDB
     * @param string $f1DB
     * @param string $f2DB
     * @param string $f3DB
     * @param string $f4DB
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[] $midocoDbiDefValue
     */
    public function __construct(?int $orderId = null, ?int $itemId = null, ?int $passengerAssignment = null, ?string $aE = null, ?string $aK = null, ?string $aU = null, ?string $bD = null, ?string $dS = null, ?string $iK = null, ?string $kS = null, ?string $pK = null, ?string $pR = null, ?string $rZ = null, ?string $rD = null, ?string $uS = null, ?string $bS = null, ?string $f1 = null, ?string $f2 = null, ?string $f3 = null, ?string $f4 = null, ?string $f5 = null, ?string $f6 = null, ?string $f7 = null, ?string $f8 = null, ?string $f9 = null, ?string $f10 = null, ?string $kSDB = null, ?string $pKDB = null, ?string $rDDB = null, ?string $uSDB = null, ?string $rZDB = null, ?string $bSDB = null, ?string $f1DB = null, ?string $f2DB = null, ?string $f3DB = null, ?string $f4DB = null, array $midocoDbiDefValue = [])
    {
        $this
            ->setOrderId($orderId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setAE($aE)
            ->setAK($aK)
            ->setAU($aU)
            ->setBD($bD)
            ->setDS($dS)
            ->setIK($iK)
            ->setKS($kS)
            ->setPK($pK)
            ->setPR($pR)
            ->setRZ($rZ)
            ->setRD($rD)
            ->setUS($uS)
            ->setBS($bS)
            ->setF1($f1)
            ->setF2($f2)
            ->setF3($f3)
            ->setF4($f4)
            ->setF5($f5)
            ->setF6($f6)
            ->setF7($f7)
            ->setF8($f8)
            ->setF9($f9)
            ->setF10($f10)
            ->setKSDB($kSDB)
            ->setPKDB($pKDB)
            ->setRDDB($rDDB)
            ->setUSDB($uSDB)
            ->setRZDB($rZDB)
            ->setBSDB($bSDB)
            ->setF1DB($f1DB)
            ->setF2DB($f2DB)
            ->setF3DB($f3DB)
            ->setF4DB($f4DB)
            ->setMidocoDbiDefValue($midocoDbiDefValue);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get AE value
     * @return string|null
     */
    public function getAE(): ?string
    {
        return $this->AE;
    }
    /**
     * Set AE value
     * @param string $aE
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setAE(?string $aE = null): self
    {
        // validation for constraint: string
        if (!is_null($aE) && !is_string($aE)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aE, true), gettype($aE)), __LINE__);
        }
        $this->AE = $aE;
        
        return $this;
    }
    /**
     * Get AK value
     * @return string|null
     */
    public function getAK(): ?string
    {
        return $this->AK;
    }
    /**
     * Set AK value
     * @param string $aK
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setAK(?string $aK = null): self
    {
        // validation for constraint: string
        if (!is_null($aK) && !is_string($aK)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aK, true), gettype($aK)), __LINE__);
        }
        $this->AK = $aK;
        
        return $this;
    }
    /**
     * Get AU value
     * @return string|null
     */
    public function getAU(): ?string
    {
        return $this->AU;
    }
    /**
     * Set AU value
     * @param string $aU
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setAU(?string $aU = null): self
    {
        // validation for constraint: string
        if (!is_null($aU) && !is_string($aU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aU, true), gettype($aU)), __LINE__);
        }
        $this->AU = $aU;
        
        return $this;
    }
    /**
     * Get BD value
     * @return string|null
     */
    public function getBD(): ?string
    {
        return $this->BD;
    }
    /**
     * Set BD value
     * @param string $bD
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setBD(?string $bD = null): self
    {
        // validation for constraint: string
        if (!is_null($bD) && !is_string($bD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bD, true), gettype($bD)), __LINE__);
        }
        $this->BD = $bD;
        
        return $this;
    }
    /**
     * Get DS value
     * @return string|null
     */
    public function getDS(): ?string
    {
        return $this->DS;
    }
    /**
     * Set DS value
     * @param string $dS
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setDS(?string $dS = null): self
    {
        // validation for constraint: string
        if (!is_null($dS) && !is_string($dS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dS, true), gettype($dS)), __LINE__);
        }
        $this->DS = $dS;
        
        return $this;
    }
    /**
     * Get IK value
     * @return string|null
     */
    public function getIK(): ?string
    {
        return $this->IK;
    }
    /**
     * Set IK value
     * @param string $iK
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setIK(?string $iK = null): self
    {
        // validation for constraint: string
        if (!is_null($iK) && !is_string($iK)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iK, true), gettype($iK)), __LINE__);
        }
        $this->IK = $iK;
        
        return $this;
    }
    /**
     * Get KS value
     * @return string|null
     */
    public function getKS(): ?string
    {
        return $this->KS;
    }
    /**
     * Set KS value
     * @param string $kS
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setKS(?string $kS = null): self
    {
        // validation for constraint: string
        if (!is_null($kS) && !is_string($kS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kS, true), gettype($kS)), __LINE__);
        }
        $this->KS = $kS;
        
        return $this;
    }
    /**
     * Get PK value
     * @return string|null
     */
    public function getPK(): ?string
    {
        return $this->PK;
    }
    /**
     * Set PK value
     * @param string $pK
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setPK(?string $pK = null): self
    {
        // validation for constraint: string
        if (!is_null($pK) && !is_string($pK)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pK, true), gettype($pK)), __LINE__);
        }
        $this->PK = $pK;
        
        return $this;
    }
    /**
     * Get PR value
     * @return string|null
     */
    public function getPR(): ?string
    {
        return $this->PR;
    }
    /**
     * Set PR value
     * @param string $pR
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setPR(?string $pR = null): self
    {
        // validation for constraint: string
        if (!is_null($pR) && !is_string($pR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pR, true), gettype($pR)), __LINE__);
        }
        $this->PR = $pR;
        
        return $this;
    }
    /**
     * Get RZ value
     * @return string|null
     */
    public function getRZ(): ?string
    {
        return $this->RZ;
    }
    /**
     * Set RZ value
     * @param string $rZ
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setRZ(?string $rZ = null): self
    {
        // validation for constraint: string
        if (!is_null($rZ) && !is_string($rZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rZ, true), gettype($rZ)), __LINE__);
        }
        $this->RZ = $rZ;
        
        return $this;
    }
    /**
     * Get RD value
     * @return string|null
     */
    public function getRD(): ?string
    {
        return $this->RD;
    }
    /**
     * Set RD value
     * @param string $rD
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setRD(?string $rD = null): self
    {
        // validation for constraint: string
        if (!is_null($rD) && !is_string($rD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rD, true), gettype($rD)), __LINE__);
        }
        $this->RD = $rD;
        
        return $this;
    }
    /**
     * Get US value
     * @return string|null
     */
    public function getUS(): ?string
    {
        return $this->US;
    }
    /**
     * Set US value
     * @param string $uS
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setUS(?string $uS = null): self
    {
        // validation for constraint: string
        if (!is_null($uS) && !is_string($uS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uS, true), gettype($uS)), __LINE__);
        }
        $this->US = $uS;
        
        return $this;
    }
    /**
     * Get BS value
     * @return string|null
     */
    public function getBS(): ?string
    {
        return $this->BS;
    }
    /**
     * Set BS value
     * @param string $bS
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setBS(?string $bS = null): self
    {
        // validation for constraint: string
        if (!is_null($bS) && !is_string($bS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bS, true), gettype($bS)), __LINE__);
        }
        $this->BS = $bS;
        
        return $this;
    }
    /**
     * Get F1 value
     * @return string|null
     */
    public function getF1(): ?string
    {
        return $this->F1;
    }
    /**
     * Set F1 value
     * @param string $f1
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF1(?string $f1 = null): self
    {
        // validation for constraint: string
        if (!is_null($f1) && !is_string($f1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f1, true), gettype($f1)), __LINE__);
        }
        $this->F1 = $f1;
        
        return $this;
    }
    /**
     * Get F2 value
     * @return string|null
     */
    public function getF2(): ?string
    {
        return $this->F2;
    }
    /**
     * Set F2 value
     * @param string $f2
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF2(?string $f2 = null): self
    {
        // validation for constraint: string
        if (!is_null($f2) && !is_string($f2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f2, true), gettype($f2)), __LINE__);
        }
        $this->F2 = $f2;
        
        return $this;
    }
    /**
     * Get F3 value
     * @return string|null
     */
    public function getF3(): ?string
    {
        return $this->F3;
    }
    /**
     * Set F3 value
     * @param string $f3
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF3(?string $f3 = null): self
    {
        // validation for constraint: string
        if (!is_null($f3) && !is_string($f3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f3, true), gettype($f3)), __LINE__);
        }
        $this->F3 = $f3;
        
        return $this;
    }
    /**
     * Get F4 value
     * @return string|null
     */
    public function getF4(): ?string
    {
        return $this->F4;
    }
    /**
     * Set F4 value
     * @param string $f4
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF4(?string $f4 = null): self
    {
        // validation for constraint: string
        if (!is_null($f4) && !is_string($f4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f4, true), gettype($f4)), __LINE__);
        }
        $this->F4 = $f4;
        
        return $this;
    }
    /**
     * Get F5 value
     * @return string|null
     */
    public function getF5(): ?string
    {
        return $this->F5;
    }
    /**
     * Set F5 value
     * @param string $f5
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF5(?string $f5 = null): self
    {
        // validation for constraint: string
        if (!is_null($f5) && !is_string($f5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f5, true), gettype($f5)), __LINE__);
        }
        $this->F5 = $f5;
        
        return $this;
    }
    /**
     * Get F6 value
     * @return string|null
     */
    public function getF6(): ?string
    {
        return $this->F6;
    }
    /**
     * Set F6 value
     * @param string $f6
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF6(?string $f6 = null): self
    {
        // validation for constraint: string
        if (!is_null($f6) && !is_string($f6)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f6, true), gettype($f6)), __LINE__);
        }
        $this->F6 = $f6;
        
        return $this;
    }
    /**
     * Get F7 value
     * @return string|null
     */
    public function getF7(): ?string
    {
        return $this->F7;
    }
    /**
     * Set F7 value
     * @param string $f7
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF7(?string $f7 = null): self
    {
        // validation for constraint: string
        if (!is_null($f7) && !is_string($f7)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f7, true), gettype($f7)), __LINE__);
        }
        $this->F7 = $f7;
        
        return $this;
    }
    /**
     * Get F8 value
     * @return string|null
     */
    public function getF8(): ?string
    {
        return $this->F8;
    }
    /**
     * Set F8 value
     * @param string $f8
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF8(?string $f8 = null): self
    {
        // validation for constraint: string
        if (!is_null($f8) && !is_string($f8)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f8, true), gettype($f8)), __LINE__);
        }
        $this->F8 = $f8;
        
        return $this;
    }
    /**
     * Get F9 value
     * @return string|null
     */
    public function getF9(): ?string
    {
        return $this->F9;
    }
    /**
     * Set F9 value
     * @param string $f9
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF9(?string $f9 = null): self
    {
        // validation for constraint: string
        if (!is_null($f9) && !is_string($f9)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f9, true), gettype($f9)), __LINE__);
        }
        $this->F9 = $f9;
        
        return $this;
    }
    /**
     * Get F10 value
     * @return string|null
     */
    public function getF10(): ?string
    {
        return $this->F10;
    }
    /**
     * Set F10 value
     * @param string $f10
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF10(?string $f10 = null): self
    {
        // validation for constraint: string
        if (!is_null($f10) && !is_string($f10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f10, true), gettype($f10)), __LINE__);
        }
        $this->F10 = $f10;
        
        return $this;
    }
    /**
     * Get KSDB value
     * @return string|null
     */
    public function getKSDB(): ?string
    {
        return $this->KSDB;
    }
    /**
     * Set KSDB value
     * @param string $kSDB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setKSDB(?string $kSDB = null): self
    {
        // validation for constraint: string
        if (!is_null($kSDB) && !is_string($kSDB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kSDB, true), gettype($kSDB)), __LINE__);
        }
        $this->KSDB = $kSDB;
        
        return $this;
    }
    /**
     * Get PKDB value
     * @return string|null
     */
    public function getPKDB(): ?string
    {
        return $this->PKDB;
    }
    /**
     * Set PKDB value
     * @param string $pKDB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setPKDB(?string $pKDB = null): self
    {
        // validation for constraint: string
        if (!is_null($pKDB) && !is_string($pKDB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pKDB, true), gettype($pKDB)), __LINE__);
        }
        $this->PKDB = $pKDB;
        
        return $this;
    }
    /**
     * Get RDDB value
     * @return string|null
     */
    public function getRDDB(): ?string
    {
        return $this->RDDB;
    }
    /**
     * Set RDDB value
     * @param string $rDDB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setRDDB(?string $rDDB = null): self
    {
        // validation for constraint: string
        if (!is_null($rDDB) && !is_string($rDDB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rDDB, true), gettype($rDDB)), __LINE__);
        }
        $this->RDDB = $rDDB;
        
        return $this;
    }
    /**
     * Get USDB value
     * @return string|null
     */
    public function getUSDB(): ?string
    {
        return $this->USDB;
    }
    /**
     * Set USDB value
     * @param string $uSDB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setUSDB(?string $uSDB = null): self
    {
        // validation for constraint: string
        if (!is_null($uSDB) && !is_string($uSDB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uSDB, true), gettype($uSDB)), __LINE__);
        }
        $this->USDB = $uSDB;
        
        return $this;
    }
    /**
     * Get RZDB value
     * @return string|null
     */
    public function getRZDB(): ?string
    {
        return $this->RZDB;
    }
    /**
     * Set RZDB value
     * @param string $rZDB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setRZDB(?string $rZDB = null): self
    {
        // validation for constraint: string
        if (!is_null($rZDB) && !is_string($rZDB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rZDB, true), gettype($rZDB)), __LINE__);
        }
        $this->RZDB = $rZDB;
        
        return $this;
    }
    /**
     * Get BSDB value
     * @return string|null
     */
    public function getBSDB(): ?string
    {
        return $this->BSDB;
    }
    /**
     * Set BSDB value
     * @param string $bSDB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setBSDB(?string $bSDB = null): self
    {
        // validation for constraint: string
        if (!is_null($bSDB) && !is_string($bSDB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bSDB, true), gettype($bSDB)), __LINE__);
        }
        $this->BSDB = $bSDB;
        
        return $this;
    }
    /**
     * Get F1DB value
     * @return string|null
     */
    public function getF1DB(): ?string
    {
        return $this->F1DB;
    }
    /**
     * Set F1DB value
     * @param string $f1DB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF1DB(?string $f1DB = null): self
    {
        // validation for constraint: string
        if (!is_null($f1DB) && !is_string($f1DB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f1DB, true), gettype($f1DB)), __LINE__);
        }
        $this->F1DB = $f1DB;
        
        return $this;
    }
    /**
     * Get F2DB value
     * @return string|null
     */
    public function getF2DB(): ?string
    {
        return $this->F2DB;
    }
    /**
     * Set F2DB value
     * @param string $f2DB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF2DB(?string $f2DB = null): self
    {
        // validation for constraint: string
        if (!is_null($f2DB) && !is_string($f2DB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f2DB, true), gettype($f2DB)), __LINE__);
        }
        $this->F2DB = $f2DB;
        
        return $this;
    }
    /**
     * Get F3DB value
     * @return string|null
     */
    public function getF3DB(): ?string
    {
        return $this->F3DB;
    }
    /**
     * Set F3DB value
     * @param string $f3DB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF3DB(?string $f3DB = null): self
    {
        // validation for constraint: string
        if (!is_null($f3DB) && !is_string($f3DB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f3DB, true), gettype($f3DB)), __LINE__);
        }
        $this->F3DB = $f3DB;
        
        return $this;
    }
    /**
     * Get F4DB value
     * @return string|null
     */
    public function getF4DB(): ?string
    {
        return $this->F4DB;
    }
    /**
     * Set F4DB value
     * @param string $f4DB
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setF4DB(?string $f4DB = null): self
    {
        // validation for constraint: string
        if (!is_null($f4DB) && !is_string($f4DB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($f4DB, true), gettype($f4DB)), __LINE__);
        }
        $this->F4DB = $f4DB;
        
        return $this;
    }
    /**
     * Get MidocoDbiDefValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[]
     */
    public function getMidocoDbiDefValue(): array
    {
        return $this->MidocoDbiDefValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDbiDefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiDefValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiDefValueForArrayConstraintsFromSetMidocoDbiDefValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDbiInfosMidocoDbiDefValueItem) {
            // validation for constraint: itemType
            if (!$midocoDbiInfosMidocoDbiDefValueItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue) {
                $invalidValues[] = is_object($midocoDbiInfosMidocoDbiDefValueItem) ? get_class($midocoDbiInfosMidocoDbiDefValueItem) : sprintf('%s(%s)', gettype($midocoDbiInfosMidocoDbiDefValueItem), var_export($midocoDbiInfosMidocoDbiDefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiDefValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiDefValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue[] $midocoDbiDefValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function setMidocoDbiDefValue(array $midocoDbiDefValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiDefValueArrayErrorMessage = self::validateMidocoDbiDefValueForArrayConstraintsFromSetMidocoDbiDefValue($midocoDbiDefValue))) {
            throw new InvalidArgumentException($midocoDbiDefValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiDefValue = $midocoDbiDefValue;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiDefValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiInfos
     */
    public function addToMidocoDbiDefValue(\Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiDefValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDbiDefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiDefValue[] = $item;
        
        return $this;
    }
}

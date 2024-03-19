<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JETFIBUBelegKopf StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JETFIBUBelegKopf extends AbstractStructBase
{
    /**
     * The Satzart
     * @var string|null
     */
    protected ?string $Satzart = null;
    /**
     * The mandnr_ms
     * @var string|null
     */
    protected ?string $mandnr_ms = null;
    /**
     * The bereich
     * @var string|null
     */
    protected ?string $bereich = null;
    /**
     * The bereichlfd
     * @var string|null
     */
    protected ?string $bereichlfd = null;
    /**
     * The belegkat
     * @var string|null
     */
    protected ?string $belegkat = null;
    /**
     * The kz_sv
     * @var string|null
     */
    protected ?string $kz_sv = null;
    /**
     * The belnr
     * @var string|null
     */
    protected ?string $belnr = null;
    /**
     * The beldat
     * @var string|null
     */
    protected ?string $beldat = null;
    /**
     * The frbelnr
     * @var string|null
     */
    protected ?string $frbelnr = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The perdat
     * @var string|null
     */
    protected ?string $perdat = null;
    /**
     * The perdat_uva
     * @var string|null
     */
    protected ?string $perdat_uva = null;
    /**
     * The kz_sy
     * @var string|null
     */
    protected ?string $kz_sy = null;
    /**
     * The kz_fw
     * @var string|null
     */
    protected ?string $kz_fw = null;
    /**
     * The kz_gw
     * @var string|null
     */
    protected ?string $kz_gw = null;
    /**
     * The fwfaktor
     * @var string|null
     */
    protected ?string $fwfaktor = null;
    /**
     * The fwkurs
     * @var string|null
     */
    protected ?string $fwkurs = null;
    /**
     * The fwvariante
     * @var string|null
     */
    protected ?string $fwvariante = null;
    /**
     * The kz_ustart
     * @var string|null
     */
    protected ?string $kz_ustart = null;
    /**
     * The kz_zibuch
     * @var string|null
     */
    protected ?string $kz_zibuch = null;
    /**
     * The zm_art
     * @var string|null
     */
    protected ?string $zm_art = null;
    /**
     * The bereichsart
     * @var string|null
     */
    protected ?string $bereichsart = null;
    /**
     * The bauvorhaben
     * @var string|null
     */
    protected ?string $bauvorhaben = null;
    /**
     * The bauteil
     * @var string|null
     */
    protected ?string $bauteil = null;
    /**
     * The dokuid
     * @var string|null
     */
    protected ?string $dokuid = null;
    /**
     * The ustid
     * @var string|null
     */
    protected ?string $ustid = null;
    /**
     * The notiz
     * @var string|null
     */
    protected ?string $notiz = null;
    /**
     * Constructor method for JETFIBUBelegKopf
     * @uses JETFIBUBelegKopf::setSatzart()
     * @uses JETFIBUBelegKopf::setMandnr_ms()
     * @uses JETFIBUBelegKopf::setBereich()
     * @uses JETFIBUBelegKopf::setBereichlfd()
     * @uses JETFIBUBelegKopf::setBelegkat()
     * @uses JETFIBUBelegKopf::setKz_sv()
     * @uses JETFIBUBelegKopf::setBelnr()
     * @uses JETFIBUBelegKopf::setBeldat()
     * @uses JETFIBUBelegKopf::setFrbelnr()
     * @uses JETFIBUBelegKopf::setText()
     * @uses JETFIBUBelegKopf::setPerdat()
     * @uses JETFIBUBelegKopf::setPerdat_uva()
     * @uses JETFIBUBelegKopf::setKz_sy()
     * @uses JETFIBUBelegKopf::setKz_fw()
     * @uses JETFIBUBelegKopf::setKz_gw()
     * @uses JETFIBUBelegKopf::setFwfaktor()
     * @uses JETFIBUBelegKopf::setFwkurs()
     * @uses JETFIBUBelegKopf::setFwvariante()
     * @uses JETFIBUBelegKopf::setKz_ustart()
     * @uses JETFIBUBelegKopf::setKz_zibuch()
     * @uses JETFIBUBelegKopf::setZm_art()
     * @uses JETFIBUBelegKopf::setBereichsart()
     * @uses JETFIBUBelegKopf::setBauvorhaben()
     * @uses JETFIBUBelegKopf::setBauteil()
     * @uses JETFIBUBelegKopf::setDokuid()
     * @uses JETFIBUBelegKopf::setUstid()
     * @uses JETFIBUBelegKopf::setNotiz()
     * @param string $satzart
     * @param string $mandnr_ms
     * @param string $bereich
     * @param string $bereichlfd
     * @param string $belegkat
     * @param string $kz_sv
     * @param string $belnr
     * @param string $beldat
     * @param string $frbelnr
     * @param string $text
     * @param string $perdat
     * @param string $perdat_uva
     * @param string $kz_sy
     * @param string $kz_fw
     * @param string $kz_gw
     * @param string $fwfaktor
     * @param string $fwkurs
     * @param string $fwvariante
     * @param string $kz_ustart
     * @param string $kz_zibuch
     * @param string $zm_art
     * @param string $bereichsart
     * @param string $bauvorhaben
     * @param string $bauteil
     * @param string $dokuid
     * @param string $ustid
     * @param string $notiz
     */
    public function __construct(?string $satzart = null, ?string $mandnr_ms = null, ?string $bereich = null, ?string $bereichlfd = null, ?string $belegkat = null, ?string $kz_sv = null, ?string $belnr = null, ?string $beldat = null, ?string $frbelnr = null, ?string $text = null, ?string $perdat = null, ?string $perdat_uva = null, ?string $kz_sy = null, ?string $kz_fw = null, ?string $kz_gw = null, ?string $fwfaktor = null, ?string $fwkurs = null, ?string $fwvariante = null, ?string $kz_ustart = null, ?string $kz_zibuch = null, ?string $zm_art = null, ?string $bereichsart = null, ?string $bauvorhaben = null, ?string $bauteil = null, ?string $dokuid = null, ?string $ustid = null, ?string $notiz = null)
    {
        $this
            ->setSatzart($satzart)
            ->setMandnr_ms($mandnr_ms)
            ->setBereich($bereich)
            ->setBereichlfd($bereichlfd)
            ->setBelegkat($belegkat)
            ->setKz_sv($kz_sv)
            ->setBelnr($belnr)
            ->setBeldat($beldat)
            ->setFrbelnr($frbelnr)
            ->setText($text)
            ->setPerdat($perdat)
            ->setPerdat_uva($perdat_uva)
            ->setKz_sy($kz_sy)
            ->setKz_fw($kz_fw)
            ->setKz_gw($kz_gw)
            ->setFwfaktor($fwfaktor)
            ->setFwkurs($fwkurs)
            ->setFwvariante($fwvariante)
            ->setKz_ustart($kz_ustart)
            ->setKz_zibuch($kz_zibuch)
            ->setZm_art($zm_art)
            ->setBereichsart($bereichsart)
            ->setBauvorhaben($bauvorhaben)
            ->setBauteil($bauteil)
            ->setDokuid($dokuid)
            ->setUstid($ustid)
            ->setNotiz($notiz);
    }
    /**
     * Get Satzart value
     * @return string|null
     */
    public function getSatzart(): ?string
    {
        return $this->Satzart;
    }
    /**
     * Set Satzart value
     * @param string $satzart
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setSatzart(?string $satzart = null): self
    {
        // validation for constraint: string
        if (!is_null($satzart) && !is_string($satzart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($satzart, true), gettype($satzart)), __LINE__);
        }
        $this->Satzart = $satzart;
        
        return $this;
    }
    /**
     * Get mandnr_ms value
     * @return string|null
     */
    public function getMandnr_ms(): ?string
    {
        return $this->mandnr_ms;
    }
    /**
     * Set mandnr_ms value
     * @param string $mandnr_ms
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setMandnr_ms(?string $mandnr_ms = null): self
    {
        // validation for constraint: string
        if (!is_null($mandnr_ms) && !is_string($mandnr_ms)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandnr_ms, true), gettype($mandnr_ms)), __LINE__);
        }
        $this->mandnr_ms = $mandnr_ms;
        
        return $this;
    }
    /**
     * Get bereich value
     * @return string|null
     */
    public function getBereich(): ?string
    {
        return $this->bereich;
    }
    /**
     * Set bereich value
     * @param string $bereich
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBereich(?string $bereich = null): self
    {
        // validation for constraint: string
        if (!is_null($bereich) && !is_string($bereich)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bereich, true), gettype($bereich)), __LINE__);
        }
        $this->bereich = $bereich;
        
        return $this;
    }
    /**
     * Get bereichlfd value
     * @return string|null
     */
    public function getBereichlfd(): ?string
    {
        return $this->bereichlfd;
    }
    /**
     * Set bereichlfd value
     * @param string $bereichlfd
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBereichlfd(?string $bereichlfd = null): self
    {
        // validation for constraint: string
        if (!is_null($bereichlfd) && !is_string($bereichlfd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bereichlfd, true), gettype($bereichlfd)), __LINE__);
        }
        $this->bereichlfd = $bereichlfd;
        
        return $this;
    }
    /**
     * Get belegkat value
     * @return string|null
     */
    public function getBelegkat(): ?string
    {
        return $this->belegkat;
    }
    /**
     * Set belegkat value
     * @param string $belegkat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBelegkat(?string $belegkat = null): self
    {
        // validation for constraint: string
        if (!is_null($belegkat) && !is_string($belegkat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($belegkat, true), gettype($belegkat)), __LINE__);
        }
        $this->belegkat = $belegkat;
        
        return $this;
    }
    /**
     * Get kz_sv value
     * @return string|null
     */
    public function getKz_sv(): ?string
    {
        return $this->kz_sv;
    }
    /**
     * Set kz_sv value
     * @param string $kz_sv
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setKz_sv(?string $kz_sv = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_sv) && !is_string($kz_sv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_sv, true), gettype($kz_sv)), __LINE__);
        }
        $this->kz_sv = $kz_sv;
        
        return $this;
    }
    /**
     * Get belnr value
     * @return string|null
     */
    public function getBelnr(): ?string
    {
        return $this->belnr;
    }
    /**
     * Set belnr value
     * @param string $belnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBelnr(?string $belnr = null): self
    {
        // validation for constraint: string
        if (!is_null($belnr) && !is_string($belnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($belnr, true), gettype($belnr)), __LINE__);
        }
        $this->belnr = $belnr;
        
        return $this;
    }
    /**
     * Get beldat value
     * @return string|null
     */
    public function getBeldat(): ?string
    {
        return $this->beldat;
    }
    /**
     * Set beldat value
     * @param string $beldat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBeldat(?string $beldat = null): self
    {
        // validation for constraint: string
        if (!is_null($beldat) && !is_string($beldat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beldat, true), gettype($beldat)), __LINE__);
        }
        $this->beldat = $beldat;
        
        return $this;
    }
    /**
     * Get frbelnr value
     * @return string|null
     */
    public function getFrbelnr(): ?string
    {
        return $this->frbelnr;
    }
    /**
     * Set frbelnr value
     * @param string $frbelnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setFrbelnr(?string $frbelnr = null): self
    {
        // validation for constraint: string
        if (!is_null($frbelnr) && !is_string($frbelnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frbelnr, true), gettype($frbelnr)), __LINE__);
        }
        $this->frbelnr = $frbelnr;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
    /**
     * Get perdat value
     * @return string|null
     */
    public function getPerdat(): ?string
    {
        return $this->perdat;
    }
    /**
     * Set perdat value
     * @param string $perdat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setPerdat(?string $perdat = null): self
    {
        // validation for constraint: string
        if (!is_null($perdat) && !is_string($perdat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($perdat, true), gettype($perdat)), __LINE__);
        }
        $this->perdat = $perdat;
        
        return $this;
    }
    /**
     * Get perdat_uva value
     * @return string|null
     */
    public function getPerdat_uva(): ?string
    {
        return $this->perdat_uva;
    }
    /**
     * Set perdat_uva value
     * @param string $perdat_uva
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setPerdat_uva(?string $perdat_uva = null): self
    {
        // validation for constraint: string
        if (!is_null($perdat_uva) && !is_string($perdat_uva)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($perdat_uva, true), gettype($perdat_uva)), __LINE__);
        }
        $this->perdat_uva = $perdat_uva;
        
        return $this;
    }
    /**
     * Get kz_sy value
     * @return string|null
     */
    public function getKz_sy(): ?string
    {
        return $this->kz_sy;
    }
    /**
     * Set kz_sy value
     * @param string $kz_sy
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setKz_sy(?string $kz_sy = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_sy) && !is_string($kz_sy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_sy, true), gettype($kz_sy)), __LINE__);
        }
        $this->kz_sy = $kz_sy;
        
        return $this;
    }
    /**
     * Get kz_fw value
     * @return string|null
     */
    public function getKz_fw(): ?string
    {
        return $this->kz_fw;
    }
    /**
     * Set kz_fw value
     * @param string $kz_fw
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setKz_fw(?string $kz_fw = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_fw) && !is_string($kz_fw)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_fw, true), gettype($kz_fw)), __LINE__);
        }
        $this->kz_fw = $kz_fw;
        
        return $this;
    }
    /**
     * Get kz_gw value
     * @return string|null
     */
    public function getKz_gw(): ?string
    {
        return $this->kz_gw;
    }
    /**
     * Set kz_gw value
     * @param string $kz_gw
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setKz_gw(?string $kz_gw = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_gw) && !is_string($kz_gw)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_gw, true), gettype($kz_gw)), __LINE__);
        }
        $this->kz_gw = $kz_gw;
        
        return $this;
    }
    /**
     * Get fwfaktor value
     * @return string|null
     */
    public function getFwfaktor(): ?string
    {
        return $this->fwfaktor;
    }
    /**
     * Set fwfaktor value
     * @param string $fwfaktor
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setFwfaktor(?string $fwfaktor = null): self
    {
        // validation for constraint: string
        if (!is_null($fwfaktor) && !is_string($fwfaktor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fwfaktor, true), gettype($fwfaktor)), __LINE__);
        }
        $this->fwfaktor = $fwfaktor;
        
        return $this;
    }
    /**
     * Get fwkurs value
     * @return string|null
     */
    public function getFwkurs(): ?string
    {
        return $this->fwkurs;
    }
    /**
     * Set fwkurs value
     * @param string $fwkurs
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setFwkurs(?string $fwkurs = null): self
    {
        // validation for constraint: string
        if (!is_null($fwkurs) && !is_string($fwkurs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fwkurs, true), gettype($fwkurs)), __LINE__);
        }
        $this->fwkurs = $fwkurs;
        
        return $this;
    }
    /**
     * Get fwvariante value
     * @return string|null
     */
    public function getFwvariante(): ?string
    {
        return $this->fwvariante;
    }
    /**
     * Set fwvariante value
     * @param string $fwvariante
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setFwvariante(?string $fwvariante = null): self
    {
        // validation for constraint: string
        if (!is_null($fwvariante) && !is_string($fwvariante)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fwvariante, true), gettype($fwvariante)), __LINE__);
        }
        $this->fwvariante = $fwvariante;
        
        return $this;
    }
    /**
     * Get kz_ustart value
     * @return string|null
     */
    public function getKz_ustart(): ?string
    {
        return $this->kz_ustart;
    }
    /**
     * Set kz_ustart value
     * @param string $kz_ustart
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setKz_ustart(?string $kz_ustart = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_ustart) && !is_string($kz_ustart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_ustart, true), gettype($kz_ustart)), __LINE__);
        }
        $this->kz_ustart = $kz_ustart;
        
        return $this;
    }
    /**
     * Get kz_zibuch value
     * @return string|null
     */
    public function getKz_zibuch(): ?string
    {
        return $this->kz_zibuch;
    }
    /**
     * Set kz_zibuch value
     * @param string $kz_zibuch
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setKz_zibuch(?string $kz_zibuch = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_zibuch) && !is_string($kz_zibuch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_zibuch, true), gettype($kz_zibuch)), __LINE__);
        }
        $this->kz_zibuch = $kz_zibuch;
        
        return $this;
    }
    /**
     * Get zm_art value
     * @return string|null
     */
    public function getZm_art(): ?string
    {
        return $this->zm_art;
    }
    /**
     * Set zm_art value
     * @param string $zm_art
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setZm_art(?string $zm_art = null): self
    {
        // validation for constraint: string
        if (!is_null($zm_art) && !is_string($zm_art)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zm_art, true), gettype($zm_art)), __LINE__);
        }
        $this->zm_art = $zm_art;
        
        return $this;
    }
    /**
     * Get bereichsart value
     * @return string|null
     */
    public function getBereichsart(): ?string
    {
        return $this->bereichsart;
    }
    /**
     * Set bereichsart value
     * @param string $bereichsart
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBereichsart(?string $bereichsart = null): self
    {
        // validation for constraint: string
        if (!is_null($bereichsart) && !is_string($bereichsart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bereichsart, true), gettype($bereichsart)), __LINE__);
        }
        $this->bereichsart = $bereichsart;
        
        return $this;
    }
    /**
     * Get bauvorhaben value
     * @return string|null
     */
    public function getBauvorhaben(): ?string
    {
        return $this->bauvorhaben;
    }
    /**
     * Set bauvorhaben value
     * @param string $bauvorhaben
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBauvorhaben(?string $bauvorhaben = null): self
    {
        // validation for constraint: string
        if (!is_null($bauvorhaben) && !is_string($bauvorhaben)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bauvorhaben, true), gettype($bauvorhaben)), __LINE__);
        }
        $this->bauvorhaben = $bauvorhaben;
        
        return $this;
    }
    /**
     * Get bauteil value
     * @return string|null
     */
    public function getBauteil(): ?string
    {
        return $this->bauteil;
    }
    /**
     * Set bauteil value
     * @param string $bauteil
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setBauteil(?string $bauteil = null): self
    {
        // validation for constraint: string
        if (!is_null($bauteil) && !is_string($bauteil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bauteil, true), gettype($bauteil)), __LINE__);
        }
        $this->bauteil = $bauteil;
        
        return $this;
    }
    /**
     * Get dokuid value
     * @return string|null
     */
    public function getDokuid(): ?string
    {
        return $this->dokuid;
    }
    /**
     * Set dokuid value
     * @param string $dokuid
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setDokuid(?string $dokuid = null): self
    {
        // validation for constraint: string
        if (!is_null($dokuid) && !is_string($dokuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dokuid, true), gettype($dokuid)), __LINE__);
        }
        $this->dokuid = $dokuid;
        
        return $this;
    }
    /**
     * Get ustid value
     * @return string|null
     */
    public function getUstid(): ?string
    {
        return $this->ustid;
    }
    /**
     * Set ustid value
     * @param string $ustid
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setUstid(?string $ustid = null): self
    {
        // validation for constraint: string
        if (!is_null($ustid) && !is_string($ustid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ustid, true), gettype($ustid)), __LINE__);
        }
        $this->ustid = $ustid;
        
        return $this;
    }
    /**
     * Get notiz value
     * @return string|null
     */
    public function getNotiz(): ?string
    {
        return $this->notiz;
    }
    /**
     * Set notiz value
     * @param string $notiz
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKopf
     */
    public function setNotiz(?string $notiz = null): self
    {
        // validation for constraint: string
        if (!is_null($notiz) && !is_string($notiz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notiz, true), gettype($notiz)), __LINE__);
        }
        $this->notiz = $notiz;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMDFiBuBuchungsSatz StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BMDFiBuBuchungsSatz extends AbstractStructBase
{
    /**
     * The satzart
     * @var string|null
     */
    protected ?string $satzart = null;
    /**
     * The konto
     * @var string|null
     */
    protected ?string $konto = null;
    /**
     * The gkto
     * @var string|null
     */
    protected ?string $gkto = null;
    /**
     * The belegnr
     * @var string|null
     */
    protected ?string $belegnr = null;
    /**
     * The belegdat
     * @var string|null
     */
    protected ?string $belegdat = null;
    /**
     * The buchdat
     * @var string|null
     */
    protected ?string $buchdat = null;
    /**
     * The valutadatum
     * @var string|null
     */
    protected ?string $valutadatum = null;
    /**
     * The kost
     * @var string|null
     */
    protected ?string $kost = null;
    /**
     * The mwst
     * @var string|null
     */
    protected ?string $mwst = null;
    /**
     * The steucod
     * @var string|null
     */
    protected ?string $steucod = null;
    /**
     * The bucod
     * @var string|null
     */
    protected ?string $bucod = null;
    /**
     * The betrag
     * @var string|null
     */
    protected ?string $betrag = null;
    /**
     * The steuer
     * @var string|null
     */
    protected ?string $steuer = null;
    /**
     * The opbetrag
     * @var string|null
     */
    protected ?string $opbetrag = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The symbol
     * @var string|null
     */
    protected ?string $symbol = null;
    /**
     * The zziel
     * @var string|null
     */
    protected ?string $zziel = null;
    /**
     * The skontopz
     * @var string|null
     */
    protected ?string $skontopz = null;
    /**
     * The skontotage
     * @var string|null
     */
    protected ?string $skontotage = null;
    /**
     * The gegenbuchkz
     * @var string|null
     */
    protected ?string $gegenbuchkz = null;
    /**
     * The verbuchkz
     * @var string|null
     */
    protected ?string $verbuchkz = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The beruf
     * @var string|null
     */
    protected ?string $beruf = null;
    /**
     * The strasse
     * @var string|null
     */
    protected ?string $strasse = null;
    /**
     * The plz
     * @var string|null
     */
    protected ?string $plz = null;
    /**
     * The ort
     * @var string|null
     */
    protected ?string $ort = null;
    /**
     * The kontakt
     * @var string|null
     */
    protected ?string $kontakt = null;
    /**
     * The persanrede
     * @var string|null
     */
    protected ?string $persanrede = null;
    /**
     * The blz
     * @var string|null
     */
    protected ?string $blz = null;
    /**
     * The bkontonr
     * @var string|null
     */
    protected ?string $bkontonr = null;
    /**
     * The bankname
     * @var string|null
     */
    protected ?string $bankname = null;
    /**
     * The iban_nr
     * @var string|null
     */
    protected ?string $iban_nr = null;
    /**
     * The betreff
     * @var string|null
     */
    protected ?string $betreff = null;
    /**
     * The staat
     * @var string|null
     */
    protected ?string $staat = null;
    /**
     * The Postkonto
     * @var string|null
     */
    protected ?string $Postkonto = null;
    /**
     * The teilnehmernr
     * @var string|null
     */
    protected ?string $teilnehmernr = null;
    /**
     * The spesen
     * @var string|null
     */
    protected ?string $spesen = null;
    /**
     * The zahlart
     * @var string|null
     */
    protected ?string $zahlart = null;
    /**
     * The prioritaet
     * @var string|null
     */
    protected ?string $prioritaet = null;
    /**
     * The swiftcode
     * @var string|null
     */
    protected ?string $swiftcode = null;
    /**
     * Constructor method for BMDFiBuBuchungsSatz
     * @uses BMDFiBuBuchungsSatz::setSatzart()
     * @uses BMDFiBuBuchungsSatz::setKonto()
     * @uses BMDFiBuBuchungsSatz::setGkto()
     * @uses BMDFiBuBuchungsSatz::setBelegnr()
     * @uses BMDFiBuBuchungsSatz::setBelegdat()
     * @uses BMDFiBuBuchungsSatz::setBuchdat()
     * @uses BMDFiBuBuchungsSatz::setValutadatum()
     * @uses BMDFiBuBuchungsSatz::setKost()
     * @uses BMDFiBuBuchungsSatz::setMwst()
     * @uses BMDFiBuBuchungsSatz::setSteucod()
     * @uses BMDFiBuBuchungsSatz::setBucod()
     * @uses BMDFiBuBuchungsSatz::setBetrag()
     * @uses BMDFiBuBuchungsSatz::setSteuer()
     * @uses BMDFiBuBuchungsSatz::setOpbetrag()
     * @uses BMDFiBuBuchungsSatz::setText()
     * @uses BMDFiBuBuchungsSatz::setSymbol()
     * @uses BMDFiBuBuchungsSatz::setZziel()
     * @uses BMDFiBuBuchungsSatz::setSkontopz()
     * @uses BMDFiBuBuchungsSatz::setSkontotage()
     * @uses BMDFiBuBuchungsSatz::setGegenbuchkz()
     * @uses BMDFiBuBuchungsSatz::setVerbuchkz()
     * @uses BMDFiBuBuchungsSatz::setName()
     * @uses BMDFiBuBuchungsSatz::setBeruf()
     * @uses BMDFiBuBuchungsSatz::setStrasse()
     * @uses BMDFiBuBuchungsSatz::setPlz()
     * @uses BMDFiBuBuchungsSatz::setOrt()
     * @uses BMDFiBuBuchungsSatz::setKontakt()
     * @uses BMDFiBuBuchungsSatz::setPersanrede()
     * @uses BMDFiBuBuchungsSatz::setBlz()
     * @uses BMDFiBuBuchungsSatz::setBkontonr()
     * @uses BMDFiBuBuchungsSatz::setBankname()
     * @uses BMDFiBuBuchungsSatz::setIban_nr()
     * @uses BMDFiBuBuchungsSatz::setBetreff()
     * @uses BMDFiBuBuchungsSatz::setStaat()
     * @uses BMDFiBuBuchungsSatz::setPostkonto()
     * @uses BMDFiBuBuchungsSatz::setTeilnehmernr()
     * @uses BMDFiBuBuchungsSatz::setSpesen()
     * @uses BMDFiBuBuchungsSatz::setZahlart()
     * @uses BMDFiBuBuchungsSatz::setPrioritaet()
     * @uses BMDFiBuBuchungsSatz::setSwiftcode()
     * @param string $satzart
     * @param string $konto
     * @param string $gkto
     * @param string $belegnr
     * @param string $belegdat
     * @param string $buchdat
     * @param string $valutadatum
     * @param string $kost
     * @param string $mwst
     * @param string $steucod
     * @param string $bucod
     * @param string $betrag
     * @param string $steuer
     * @param string $opbetrag
     * @param string $text
     * @param string $symbol
     * @param string $zziel
     * @param string $skontopz
     * @param string $skontotage
     * @param string $gegenbuchkz
     * @param string $verbuchkz
     * @param string $name
     * @param string $beruf
     * @param string $strasse
     * @param string $plz
     * @param string $ort
     * @param string $kontakt
     * @param string $persanrede
     * @param string $blz
     * @param string $bkontonr
     * @param string $bankname
     * @param string $iban_nr
     * @param string $betreff
     * @param string $staat
     * @param string $postkonto
     * @param string $teilnehmernr
     * @param string $spesen
     * @param string $zahlart
     * @param string $prioritaet
     * @param string $swiftcode
     */
    public function __construct(?string $satzart = null, ?string $konto = null, ?string $gkto = null, ?string $belegnr = null, ?string $belegdat = null, ?string $buchdat = null, ?string $valutadatum = null, ?string $kost = null, ?string $mwst = null, ?string $steucod = null, ?string $bucod = null, ?string $betrag = null, ?string $steuer = null, ?string $opbetrag = null, ?string $text = null, ?string $symbol = null, ?string $zziel = null, ?string $skontopz = null, ?string $skontotage = null, ?string $gegenbuchkz = null, ?string $verbuchkz = null, ?string $name = null, ?string $beruf = null, ?string $strasse = null, ?string $plz = null, ?string $ort = null, ?string $kontakt = null, ?string $persanrede = null, ?string $blz = null, ?string $bkontonr = null, ?string $bankname = null, ?string $iban_nr = null, ?string $betreff = null, ?string $staat = null, ?string $postkonto = null, ?string $teilnehmernr = null, ?string $spesen = null, ?string $zahlart = null, ?string $prioritaet = null, ?string $swiftcode = null)
    {
        $this
            ->setSatzart($satzart)
            ->setKonto($konto)
            ->setGkto($gkto)
            ->setBelegnr($belegnr)
            ->setBelegdat($belegdat)
            ->setBuchdat($buchdat)
            ->setValutadatum($valutadatum)
            ->setKost($kost)
            ->setMwst($mwst)
            ->setSteucod($steucod)
            ->setBucod($bucod)
            ->setBetrag($betrag)
            ->setSteuer($steuer)
            ->setOpbetrag($opbetrag)
            ->setText($text)
            ->setSymbol($symbol)
            ->setZziel($zziel)
            ->setSkontopz($skontopz)
            ->setSkontotage($skontotage)
            ->setGegenbuchkz($gegenbuchkz)
            ->setVerbuchkz($verbuchkz)
            ->setName($name)
            ->setBeruf($beruf)
            ->setStrasse($strasse)
            ->setPlz($plz)
            ->setOrt($ort)
            ->setKontakt($kontakt)
            ->setPersanrede($persanrede)
            ->setBlz($blz)
            ->setBkontonr($bkontonr)
            ->setBankname($bankname)
            ->setIban_nr($iban_nr)
            ->setBetreff($betreff)
            ->setStaat($staat)
            ->setPostkonto($postkonto)
            ->setTeilnehmernr($teilnehmernr)
            ->setSpesen($spesen)
            ->setZahlart($zahlart)
            ->setPrioritaet($prioritaet)
            ->setSwiftcode($swiftcode);
    }
    /**
     * Get satzart value
     * @return string|null
     */
    public function getSatzart(): ?string
    {
        return $this->satzart;
    }
    /**
     * Set satzart value
     * @param string $satzart
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSatzart(?string $satzart = null): self
    {
        // validation for constraint: string
        if (!is_null($satzart) && !is_string($satzart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($satzart, true), gettype($satzart)), __LINE__);
        }
        $this->satzart = $satzart;
        
        return $this;
    }
    /**
     * Get konto value
     * @return string|null
     */
    public function getKonto(): ?string
    {
        return $this->konto;
    }
    /**
     * Set konto value
     * @param string $konto
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setKonto(?string $konto = null): self
    {
        // validation for constraint: string
        if (!is_null($konto) && !is_string($konto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($konto, true), gettype($konto)), __LINE__);
        }
        $this->konto = $konto;
        
        return $this;
    }
    /**
     * Get gkto value
     * @return string|null
     */
    public function getGkto(): ?string
    {
        return $this->gkto;
    }
    /**
     * Set gkto value
     * @param string $gkto
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setGkto(?string $gkto = null): self
    {
        // validation for constraint: string
        if (!is_null($gkto) && !is_string($gkto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gkto, true), gettype($gkto)), __LINE__);
        }
        $this->gkto = $gkto;
        
        return $this;
    }
    /**
     * Get belegnr value
     * @return string|null
     */
    public function getBelegnr(): ?string
    {
        return $this->belegnr;
    }
    /**
     * Set belegnr value
     * @param string $belegnr
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBelegnr(?string $belegnr = null): self
    {
        // validation for constraint: string
        if (!is_null($belegnr) && !is_string($belegnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($belegnr, true), gettype($belegnr)), __LINE__);
        }
        $this->belegnr = $belegnr;
        
        return $this;
    }
    /**
     * Get belegdat value
     * @return string|null
     */
    public function getBelegdat(): ?string
    {
        return $this->belegdat;
    }
    /**
     * Set belegdat value
     * @param string $belegdat
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBelegdat(?string $belegdat = null): self
    {
        // validation for constraint: string
        if (!is_null($belegdat) && !is_string($belegdat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($belegdat, true), gettype($belegdat)), __LINE__);
        }
        $this->belegdat = $belegdat;
        
        return $this;
    }
    /**
     * Get buchdat value
     * @return string|null
     */
    public function getBuchdat(): ?string
    {
        return $this->buchdat;
    }
    /**
     * Set buchdat value
     * @param string $buchdat
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBuchdat(?string $buchdat = null): self
    {
        // validation for constraint: string
        if (!is_null($buchdat) && !is_string($buchdat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buchdat, true), gettype($buchdat)), __LINE__);
        }
        $this->buchdat = $buchdat;
        
        return $this;
    }
    /**
     * Get valutadatum value
     * @return string|null
     */
    public function getValutadatum(): ?string
    {
        return $this->valutadatum;
    }
    /**
     * Set valutadatum value
     * @param string $valutadatum
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setValutadatum(?string $valutadatum = null): self
    {
        // validation for constraint: string
        if (!is_null($valutadatum) && !is_string($valutadatum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valutadatum, true), gettype($valutadatum)), __LINE__);
        }
        $this->valutadatum = $valutadatum;
        
        return $this;
    }
    /**
     * Get kost value
     * @return string|null
     */
    public function getKost(): ?string
    {
        return $this->kost;
    }
    /**
     * Set kost value
     * @param string $kost
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setKost(?string $kost = null): self
    {
        // validation for constraint: string
        if (!is_null($kost) && !is_string($kost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kost, true), gettype($kost)), __LINE__);
        }
        $this->kost = $kost;
        
        return $this;
    }
    /**
     * Get mwst value
     * @return string|null
     */
    public function getMwst(): ?string
    {
        return $this->mwst;
    }
    /**
     * Set mwst value
     * @param string $mwst
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setMwst(?string $mwst = null): self
    {
        // validation for constraint: string
        if (!is_null($mwst) && !is_string($mwst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mwst, true), gettype($mwst)), __LINE__);
        }
        $this->mwst = $mwst;
        
        return $this;
    }
    /**
     * Get steucod value
     * @return string|null
     */
    public function getSteucod(): ?string
    {
        return $this->steucod;
    }
    /**
     * Set steucod value
     * @param string $steucod
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSteucod(?string $steucod = null): self
    {
        // validation for constraint: string
        if (!is_null($steucod) && !is_string($steucod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($steucod, true), gettype($steucod)), __LINE__);
        }
        $this->steucod = $steucod;
        
        return $this;
    }
    /**
     * Get bucod value
     * @return string|null
     */
    public function getBucod(): ?string
    {
        return $this->bucod;
    }
    /**
     * Set bucod value
     * @param string $bucod
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBucod(?string $bucod = null): self
    {
        // validation for constraint: string
        if (!is_null($bucod) && !is_string($bucod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bucod, true), gettype($bucod)), __LINE__);
        }
        $this->bucod = $bucod;
        
        return $this;
    }
    /**
     * Get betrag value
     * @return string|null
     */
    public function getBetrag(): ?string
    {
        return $this->betrag;
    }
    /**
     * Set betrag value
     * @param string $betrag
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBetrag(?string $betrag = null): self
    {
        // validation for constraint: string
        if (!is_null($betrag) && !is_string($betrag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($betrag, true), gettype($betrag)), __LINE__);
        }
        $this->betrag = $betrag;
        
        return $this;
    }
    /**
     * Get steuer value
     * @return string|null
     */
    public function getSteuer(): ?string
    {
        return $this->steuer;
    }
    /**
     * Set steuer value
     * @param string $steuer
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSteuer(?string $steuer = null): self
    {
        // validation for constraint: string
        if (!is_null($steuer) && !is_string($steuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($steuer, true), gettype($steuer)), __LINE__);
        }
        $this->steuer = $steuer;
        
        return $this;
    }
    /**
     * Get opbetrag value
     * @return string|null
     */
    public function getOpbetrag(): ?string
    {
        return $this->opbetrag;
    }
    /**
     * Set opbetrag value
     * @param string $opbetrag
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setOpbetrag(?string $opbetrag = null): self
    {
        // validation for constraint: string
        if (!is_null($opbetrag) && !is_string($opbetrag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opbetrag, true), gettype($opbetrag)), __LINE__);
        }
        $this->opbetrag = $opbetrag;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
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
     * Get symbol value
     * @return string|null
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }
    /**
     * Set symbol value
     * @param string $symbol
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSymbol(?string $symbol = null): self
    {
        // validation for constraint: string
        if (!is_null($symbol) && !is_string($symbol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($symbol, true), gettype($symbol)), __LINE__);
        }
        $this->symbol = $symbol;
        
        return $this;
    }
    /**
     * Get zziel value
     * @return string|null
     */
    public function getZziel(): ?string
    {
        return $this->zziel;
    }
    /**
     * Set zziel value
     * @param string $zziel
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setZziel(?string $zziel = null): self
    {
        // validation for constraint: string
        if (!is_null($zziel) && !is_string($zziel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zziel, true), gettype($zziel)), __LINE__);
        }
        $this->zziel = $zziel;
        
        return $this;
    }
    /**
     * Get skontopz value
     * @return string|null
     */
    public function getSkontopz(): ?string
    {
        return $this->skontopz;
    }
    /**
     * Set skontopz value
     * @param string $skontopz
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSkontopz(?string $skontopz = null): self
    {
        // validation for constraint: string
        if (!is_null($skontopz) && !is_string($skontopz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skontopz, true), gettype($skontopz)), __LINE__);
        }
        $this->skontopz = $skontopz;
        
        return $this;
    }
    /**
     * Get skontotage value
     * @return string|null
     */
    public function getSkontotage(): ?string
    {
        return $this->skontotage;
    }
    /**
     * Set skontotage value
     * @param string $skontotage
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSkontotage(?string $skontotage = null): self
    {
        // validation for constraint: string
        if (!is_null($skontotage) && !is_string($skontotage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skontotage, true), gettype($skontotage)), __LINE__);
        }
        $this->skontotage = $skontotage;
        
        return $this;
    }
    /**
     * Get gegenbuchkz value
     * @return string|null
     */
    public function getGegenbuchkz(): ?string
    {
        return $this->gegenbuchkz;
    }
    /**
     * Set gegenbuchkz value
     * @param string $gegenbuchkz
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setGegenbuchkz(?string $gegenbuchkz = null): self
    {
        // validation for constraint: string
        if (!is_null($gegenbuchkz) && !is_string($gegenbuchkz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gegenbuchkz, true), gettype($gegenbuchkz)), __LINE__);
        }
        $this->gegenbuchkz = $gegenbuchkz;
        
        return $this;
    }
    /**
     * Get verbuchkz value
     * @return string|null
     */
    public function getVerbuchkz(): ?string
    {
        return $this->verbuchkz;
    }
    /**
     * Set verbuchkz value
     * @param string $verbuchkz
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setVerbuchkz(?string $verbuchkz = null): self
    {
        // validation for constraint: string
        if (!is_null($verbuchkz) && !is_string($verbuchkz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verbuchkz, true), gettype($verbuchkz)), __LINE__);
        }
        $this->verbuchkz = $verbuchkz;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get beruf value
     * @return string|null
     */
    public function getBeruf(): ?string
    {
        return $this->beruf;
    }
    /**
     * Set beruf value
     * @param string $beruf
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBeruf(?string $beruf = null): self
    {
        // validation for constraint: string
        if (!is_null($beruf) && !is_string($beruf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beruf, true), gettype($beruf)), __LINE__);
        }
        $this->beruf = $beruf;
        
        return $this;
    }
    /**
     * Get strasse value
     * @return string|null
     */
    public function getStrasse(): ?string
    {
        return $this->strasse;
    }
    /**
     * Set strasse value
     * @param string $strasse
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setStrasse(?string $strasse = null): self
    {
        // validation for constraint: string
        if (!is_null($strasse) && !is_string($strasse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($strasse, true), gettype($strasse)), __LINE__);
        }
        $this->strasse = $strasse;
        
        return $this;
    }
    /**
     * Get plz value
     * @return string|null
     */
    public function getPlz(): ?string
    {
        return $this->plz;
    }
    /**
     * Set plz value
     * @param string $plz
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setPlz(?string $plz = null): self
    {
        // validation for constraint: string
        if (!is_null($plz) && !is_string($plz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plz, true), gettype($plz)), __LINE__);
        }
        $this->plz = $plz;
        
        return $this;
    }
    /**
     * Get ort value
     * @return string|null
     */
    public function getOrt(): ?string
    {
        return $this->ort;
    }
    /**
     * Set ort value
     * @param string $ort
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setOrt(?string $ort = null): self
    {
        // validation for constraint: string
        if (!is_null($ort) && !is_string($ort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ort, true), gettype($ort)), __LINE__);
        }
        $this->ort = $ort;
        
        return $this;
    }
    /**
     * Get kontakt value
     * @return string|null
     */
    public function getKontakt(): ?string
    {
        return $this->kontakt;
    }
    /**
     * Set kontakt value
     * @param string $kontakt
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setKontakt(?string $kontakt = null): self
    {
        // validation for constraint: string
        if (!is_null($kontakt) && !is_string($kontakt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kontakt, true), gettype($kontakt)), __LINE__);
        }
        $this->kontakt = $kontakt;
        
        return $this;
    }
    /**
     * Get persanrede value
     * @return string|null
     */
    public function getPersanrede(): ?string
    {
        return $this->persanrede;
    }
    /**
     * Set persanrede value
     * @param string $persanrede
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setPersanrede(?string $persanrede = null): self
    {
        // validation for constraint: string
        if (!is_null($persanrede) && !is_string($persanrede)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($persanrede, true), gettype($persanrede)), __LINE__);
        }
        $this->persanrede = $persanrede;
        
        return $this;
    }
    /**
     * Get blz value
     * @return string|null
     */
    public function getBlz(): ?string
    {
        return $this->blz;
    }
    /**
     * Set blz value
     * @param string $blz
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBlz(?string $blz = null): self
    {
        // validation for constraint: string
        if (!is_null($blz) && !is_string($blz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blz, true), gettype($blz)), __LINE__);
        }
        $this->blz = $blz;
        
        return $this;
    }
    /**
     * Get bkontonr value
     * @return string|null
     */
    public function getBkontonr(): ?string
    {
        return $this->bkontonr;
    }
    /**
     * Set bkontonr value
     * @param string $bkontonr
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBkontonr(?string $bkontonr = null): self
    {
        // validation for constraint: string
        if (!is_null($bkontonr) && !is_string($bkontonr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bkontonr, true), gettype($bkontonr)), __LINE__);
        }
        $this->bkontonr = $bkontonr;
        
        return $this;
    }
    /**
     * Get bankname value
     * @return string|null
     */
    public function getBankname(): ?string
    {
        return $this->bankname;
    }
    /**
     * Set bankname value
     * @param string $bankname
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBankname(?string $bankname = null): self
    {
        // validation for constraint: string
        if (!is_null($bankname) && !is_string($bankname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankname, true), gettype($bankname)), __LINE__);
        }
        $this->bankname = $bankname;
        
        return $this;
    }
    /**
     * Get iban_nr value
     * @return string|null
     */
    public function getIban_nr(): ?string
    {
        return $this->{'iban-nr'};
    }
    /**
     * Set iban_nr value
     * @param string $iban_nr
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setIban_nr(?string $iban_nr = null): self
    {
        // validation for constraint: string
        if (!is_null($iban_nr) && !is_string($iban_nr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban_nr, true), gettype($iban_nr)), __LINE__);
        }
        $this->iban_nr = $this->{'iban-nr'} = $iban_nr;
        
        return $this;
    }
    /**
     * Get betreff value
     * @return string|null
     */
    public function getBetreff(): ?string
    {
        return $this->betreff;
    }
    /**
     * Set betreff value
     * @param string $betreff
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setBetreff(?string $betreff = null): self
    {
        // validation for constraint: string
        if (!is_null($betreff) && !is_string($betreff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($betreff, true), gettype($betreff)), __LINE__);
        }
        $this->betreff = $betreff;
        
        return $this;
    }
    /**
     * Get staat value
     * @return string|null
     */
    public function getStaat(): ?string
    {
        return $this->staat;
    }
    /**
     * Set staat value
     * @param string $staat
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setStaat(?string $staat = null): self
    {
        // validation for constraint: string
        if (!is_null($staat) && !is_string($staat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($staat, true), gettype($staat)), __LINE__);
        }
        $this->staat = $staat;
        
        return $this;
    }
    /**
     * Get Postkonto value
     * @return string|null
     */
    public function getPostkonto(): ?string
    {
        return $this->Postkonto;
    }
    /**
     * Set Postkonto value
     * @param string $postkonto
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setPostkonto(?string $postkonto = null): self
    {
        // validation for constraint: string
        if (!is_null($postkonto) && !is_string($postkonto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postkonto, true), gettype($postkonto)), __LINE__);
        }
        $this->Postkonto = $postkonto;
        
        return $this;
    }
    /**
     * Get teilnehmernr value
     * @return string|null
     */
    public function getTeilnehmernr(): ?string
    {
        return $this->teilnehmernr;
    }
    /**
     * Set teilnehmernr value
     * @param string $teilnehmernr
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setTeilnehmernr(?string $teilnehmernr = null): self
    {
        // validation for constraint: string
        if (!is_null($teilnehmernr) && !is_string($teilnehmernr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($teilnehmernr, true), gettype($teilnehmernr)), __LINE__);
        }
        $this->teilnehmernr = $teilnehmernr;
        
        return $this;
    }
    /**
     * Get spesen value
     * @return string|null
     */
    public function getSpesen(): ?string
    {
        return $this->spesen;
    }
    /**
     * Set spesen value
     * @param string $spesen
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSpesen(?string $spesen = null): self
    {
        // validation for constraint: string
        if (!is_null($spesen) && !is_string($spesen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spesen, true), gettype($spesen)), __LINE__);
        }
        $this->spesen = $spesen;
        
        return $this;
    }
    /**
     * Get zahlart value
     * @return string|null
     */
    public function getZahlart(): ?string
    {
        return $this->zahlart;
    }
    /**
     * Set zahlart value
     * @param string $zahlart
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setZahlart(?string $zahlart = null): self
    {
        // validation for constraint: string
        if (!is_null($zahlart) && !is_string($zahlart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zahlart, true), gettype($zahlart)), __LINE__);
        }
        $this->zahlart = $zahlart;
        
        return $this;
    }
    /**
     * Get prioritaet value
     * @return string|null
     */
    public function getPrioritaet(): ?string
    {
        return $this->prioritaet;
    }
    /**
     * Set prioritaet value
     * @param string $prioritaet
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setPrioritaet(?string $prioritaet = null): self
    {
        // validation for constraint: string
        if (!is_null($prioritaet) && !is_string($prioritaet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prioritaet, true), gettype($prioritaet)), __LINE__);
        }
        $this->prioritaet = $prioritaet;
        
        return $this;
    }
    /**
     * Get swiftcode value
     * @return string|null
     */
    public function getSwiftcode(): ?string
    {
        return $this->swiftcode;
    }
    /**
     * Set swiftcode value
     * @param string $swiftcode
     * @return \Pggns\MidocoApi\Order\StructType\BMDFiBuBuchungsSatz
     */
    public function setSwiftcode(?string $swiftcode = null): self
    {
        // validation for constraint: string
        if (!is_null($swiftcode) && !is_string($swiftcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiftcode, true), gettype($swiftcode)), __LINE__);
        }
        $this->swiftcode = $swiftcode;
        
        return $this;
    }
}

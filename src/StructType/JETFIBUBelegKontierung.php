<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JETFIBUBelegKontierung StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JETFIBUBelegKontierung extends AbstractStructBase
{
    /**
     * The Satzart
     * @var string|null
     */
    protected ?string $Satzart = null;
    /**
     * The mandnr_bib
     * @var string|null
     */
    protected ?string $mandnr_bib = null;
    /**
     * The bereich_bib
     * @var string|null
     */
    protected ?string $bereich_bib = null;
    /**
     * The bereichlfd_bib
     * @var string|null
     */
    protected ?string $bereichlfd_bib = null;
    /**
     * The biktlfd
     * @var string|null
     */
    protected ?string $biktlfd = null;
    /**
     * The kz_kt
     * @var string|null
     */
    protected ?string $kz_kt = null;
    /**
     * The mandnr_kto
     * @var string|null
     */
    protected ?string $mandnr_kto = null;
    /**
     * The ktonr
     * @var string|null
     */
    protected ?string $ktonr = null;
    /**
     * The kz_buart
     * @var string|null
     */
    protected ?string $kz_buart = null;
    /**
     * The kz_sh
     * @var string|null
     */
    protected ?string $kz_sh = null;
    /**
     * The kz_storno
     * @var string|null
     */
    protected ?string $kz_storno = null;
    /**
     * The kz_svkategorie
     * @var string|null
     */
    protected ?string $kz_svkategorie = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The kz_ustbuch
     * @var string|null
     */
    protected ?string $kz_ustbuch = null;
    /**
     * The kz_ust
     * @var string|null
     */
    protected ?string $kz_ust = null;
    /**
     * The ustdat
     * @var string|null
     */
    protected ?string $ustdat = null;
    /**
     * The kz_ustart
     * @var string|null
     */
    protected ?string $kz_ustart = null;
    /**
     * The kz_fw
     * @var string|null
     */
    protected ?string $kz_fw = null;
    /**
     * The fwvariante
     * @var string|null
     */
    protected ?string $fwvariante = null;
    /**
     * The fwbetr
     * @var string|null
     */
    protected ?string $fwbetr = null;
    /**
     * The betr
     * @var string|null
     */
    protected ?string $betr = null;
    /**
     * The fwustbetr
     * @var string|null
     */
    protected ?string $fwustbetr = null;
    /**
     * The ustbetr
     * @var string|null
     */
    protected ?string $ustbetr = null;
    /**
     * The skbetr
     * @var string|null
     */
    protected ?string $skbetr = null;
    /**
     * The skfaebetr
     * @var string|null
     */
    protected ?string $skfaebetr = null;
    /**
     * The fwzinsbetr
     * @var string|null
     */
    protected ?string $fwzinsbetr = null;
    /**
     * The zinsbetr
     * @var string|null
     */
    protected ?string $zinsbetr = null;
    /**
     * The fwnaustbetr
     * @var string|null
     */
    protected ?string $fwnaustbetr = null;
    /**
     * The naustbetr
     * @var string|null
     */
    protected ?string $naustbetr = null;
    /**
     * The valdat
     * @var string|null
     */
    protected ?string $valdat = null;
    /**
     * The scrita
     * @var string|null
     */
    protected ?string $scrita = null;
    /**
     * The scritb
     * @var string|null
     */
    protected ?string $scritb = null;
    /**
     * The scritc
     * @var string|null
     */
    protected ?string $scritc = null;
    /**
     * The scritd
     * @var string|null
     */
    protected ?string $scritd = null;
    /**
     * The scrite
     * @var string|null
     */
    protected ?string $scrite = null;
    /**
     * The scritf
     * @var string|null
     */
    protected ?string $scritf = null;
    /**
     * The perdat_uva
     * @var string|null
     */
    protected ?string $perdat_uva = null;
    /**
     * The notiz
     * @var string|null
     */
    protected ?string $notiz = null;
    /**
     * The op_nr
     * @var string|null
     */
    protected ?string $op_nr = null;
    /**
     * The op_subopnr
     * @var string|null
     */
    protected ?string $op_subopnr = null;
    /**
     * The op_ratennr
     * @var string|null
     */
    protected ?string $op_ratennr = null;
    /**
     * The op_skbetr_max
     * @var string|null
     */
    protected ?string $op_skbetr_max = null;
    /**
     * The op_zlgkond
     * @var string|null
     */
    protected ?string $op_zlgkond = null;
    /**
     * The op_przsk1
     * @var string|null
     */
    protected ?string $op_przsk1 = null;
    /**
     * The op_tage1
     * @var string|null
     */
    protected ?string $op_tage1 = null;
    /**
     * The op_przsk2
     * @var string|null
     */
    protected ?string $op_przsk2 = null;
    /**
     * The op_tage2
     * @var string|null
     */
    protected ?string $op_tage2 = null;
    /**
     * The op_tage_ntto
     * @var string|null
     */
    protected ?string $op_tage_ntto = null;
    /**
     * The op_mhstuf
     * @var string|null
     */
    protected ?string $op_mhstuf = null;
    /**
     * The op_mhsperre
     * @var string|null
     */
    protected ?string $op_mhsperre = null;
    /**
     * The op_zvksperre
     * @var string|null
     */
    protected ?string $op_zvksperre = null;
    /**
     * The op_mhanschr
     * @var string|null
     */
    protected ?string $op_mhanschr = null;
    /**
     * The op_text
     * @var string|null
     */
    protected ?string $op_text = null;
    /**
     * The op_refnr_vesr
     * @var string|null
     */
    protected ?string $op_refnr_vesr = null;
    /**
     * The op_vesr_tnr
     * @var string|null
     */
    protected ?string $op_vesr_tnr = null;
    /**
     * The op_ma_anrede
     * @var string|null
     */
    protected ?string $op_ma_anrede = null;
    /**
     * The op_ma_name1
     * @var string|null
     */
    protected ?string $op_ma_name1 = null;
    /**
     * The op_ma_name2
     * @var string|null
     */
    protected ?string $op_ma_name2 = null;
    /**
     * The op_ma_name3
     * @var string|null
     */
    protected ?string $op_ma_name3 = null;
    /**
     * The op_ma_emailadr1
     * @var string|null
     */
    protected ?string $op_ma_emailadr1 = null;
    /**
     * The op_ma_emailname1
     * @var string|null
     */
    protected ?string $op_ma_emailname1 = null;
    /**
     * The op_ma_emailadr2
     * @var string|null
     */
    protected ?string $op_ma_emailadr2 = null;
    /**
     * The op_ma_emailname2
     * @var string|null
     */
    protected ?string $op_ma_emailname2 = null;
    /**
     * The op_ma_www_adresse
     * @var string|null
     */
    protected ?string $op_ma_www_adresse = null;
    /**
     * The op_ma_telnr1
     * @var string|null
     */
    protected ?string $op_ma_telnr1 = null;
    /**
     * The op_ma_telnr2
     * @var string|null
     */
    protected ?string $op_ma_telnr2 = null;
    /**
     * The op_ma_telefaxnr
     * @var string|null
     */
    protected ?string $op_ma_telefaxnr = null;
    /**
     * The op_ma_telefaxnr2
     * @var string|null
     */
    protected ?string $op_ma_telefaxnr2 = null;
    /**
     * The op_ma_strasse
     * @var string|null
     */
    protected ?string $op_ma_strasse = null;
    /**
     * The op_ma_strasse2
     * @var string|null
     */
    protected ?string $op_ma_strasse2 = null;
    /**
     * The op_ma_kz_land
     * @var string|null
     */
    protected ?string $op_ma_kz_land = null;
    /**
     * The op_ma_landbez
     * @var string|null
     */
    protected ?string $op_ma_landbez = null;
    /**
     * The op_ma_plz
     * @var string|null
     */
    protected ?string $op_ma_plz = null;
    /**
     * The op_ma_ort
     * @var string|null
     */
    protected ?string $op_ma_ort = null;
    /**
     * The op_za_anrede
     * @var string|null
     */
    protected ?string $op_za_anrede = null;
    /**
     * The op_za_name1
     * @var string|null
     */
    protected ?string $op_za_name1 = null;
    /**
     * The op_za_name2
     * @var string|null
     */
    protected ?string $op_za_name2 = null;
    /**
     * The op_za_name3
     * @var string|null
     */
    protected ?string $op_za_name3 = null;
    /**
     * The op_za_emailadr1
     * @var string|null
     */
    protected ?string $op_za_emailadr1 = null;
    /**
     * The op_za_emailname1
     * @var string|null
     */
    protected ?string $op_za_emailname1 = null;
    /**
     * The op_za_emailadr2
     * @var string|null
     */
    protected ?string $op_za_emailadr2 = null;
    /**
     * The op_za_emailname2
     * @var string|null
     */
    protected ?string $op_za_emailname2 = null;
    /**
     * The op_za_www_adresse
     * @var string|null
     */
    protected ?string $op_za_www_adresse = null;
    /**
     * The op_za_telnr1
     * @var string|null
     */
    protected ?string $op_za_telnr1 = null;
    /**
     * The op_za_telnr2
     * @var string|null
     */
    protected ?string $op_za_telnr2 = null;
    /**
     * The op_za_telefaxnr
     * @var string|null
     */
    protected ?string $op_za_telefaxnr = null;
    /**
     * The op_za_telefaxnr2
     * @var string|null
     */
    protected ?string $op_za_telefaxnr2 = null;
    /**
     * The op_za_strasse
     * @var string|null
     */
    protected ?string $op_za_strasse = null;
    /**
     * The op_za_strasse2
     * @var string|null
     */
    protected ?string $op_za_strasse2 = null;
    /**
     * The op_za_kz_land
     * @var string|null
     */
    protected ?string $op_za_kz_land = null;
    /**
     * The op_za_landbez
     * @var string|null
     */
    protected ?string $op_za_landbez = null;
    /**
     * The op_za_plz
     * @var string|null
     */
    protected ?string $op_za_plz = null;
    /**
     * The op_za_ort
     * @var string|null
     */
    protected ?string $op_za_ort = null;
    /**
     * The op_frktonr
     * @var string|null
     */
    protected ?string $op_frktonr = null;
    /**
     * The op_zvanschr
     * @var string|null
     */
    protected ?string $op_zvanschr = null;
    /**
     * The op_bk_kz_land
     * @var string|null
     */
    protected ?string $op_bk_kz_land = null;
    /**
     * The op_bk_blz
     * @var string|null
     */
    protected ?string $op_bk_blz = null;
    /**
     * The op_bk_bankktonr
     * @var string|null
     */
    protected ?string $op_bk_bankktonr = null;
    /**
     * The op_banknr
     * @var string|null
     */
    protected ?string $op_banknr = null;
    /**
     * The op_notiz
     * @var string|null
     */
    protected ?string $op_notiz = null;
    /**
     * The kr_buch
     * @var string|null
     */
    protected ?string $kr_buch = null;
    /**
     * The kr_art
     * @var string|null
     */
    protected ?string $kr_art = null;
    /**
     * The kr_kstnr
     * @var string|null
     */
    protected ?string $kr_kstnr = null;
    /**
     * The kr_buart
     * @var string|null
     */
    protected ?string $kr_buart = null;
    /**
     * The kr_kstnr_zd
     * @var string|null
     */
    protected ?string $kr_kstnr_zd = null;
    /**
     * The kr_koanr
     * @var string|null
     */
    protected ?string $kr_koanr = null;
    /**
     * The kr_koanr_extern
     * @var string|null
     */
    protected ?string $kr_koanr_extern = null;
    /**
     * The kr_perdat
     * @var string|null
     */
    protected ?string $kr_perdat = null;
    /**
     * The kr_fwbetr
     * @var string|null
     */
    protected ?string $kr_fwbetr = null;
    /**
     * The kr_betr
     * @var string|null
     */
    protected ?string $kr_betr = null;
    /**
     * The kr_menge
     * @var string|null
     */
    protected ?string $kr_menge = null;
    /**
     * The kr_text
     * @var string|null
     */
    protected ?string $kr_text = null;
    /**
     * The ev_nr
     * @var string|null
     */
    protected ?string $ev_nr = null;
    /**
     * The ev_faedat
     * @var string|null
     */
    protected ?string $ev_faedat = null;
    /**
     * The ev_prol
     * @var string|null
     */
    protected ?string $ev_prol = null;
    /**
     * The ev_text
     * @var string|null
     */
    protected ?string $ev_text = null;
    /**
     * The ev_aussteller
     * @var string|null
     */
    protected ?string $ev_aussteller = null;
    /**
     * The ev_bezogener
     * @var string|null
     */
    protected ?string $ev_bezogener = null;
    /**
     * The ev_zahlstelle
     * @var string|null
     */
    protected ?string $ev_zahlstelle = null;
    /**
     * The ts_dhrlbetr
     * @var string|null
     */
    protected ?string $ts_dhrlbetr = null;
    /**
     * The ts_dhrlfaedat
     * @var string|null
     */
    protected ?string $ts_dhrlfaedat = null;
    /**
     * The ts_kz_drl_ber
     * @var string|null
     */
    protected ?string $ts_kz_drl_ber = null;
    /**
     * The eust_ktonr
     * @var string|null
     */
    protected ?string $eust_ktonr = null;
    /**
     * The eust_opnr
     * @var string|null
     */
    protected ?string $eust_opnr = null;
    /**
     * Constructor method for JETFIBUBelegKontierung
     * @uses JETFIBUBelegKontierung::setSatzart()
     * @uses JETFIBUBelegKontierung::setMandnr_bib()
     * @uses JETFIBUBelegKontierung::setBereich_bib()
     * @uses JETFIBUBelegKontierung::setBereichlfd_bib()
     * @uses JETFIBUBelegKontierung::setBiktlfd()
     * @uses JETFIBUBelegKontierung::setKz_kt()
     * @uses JETFIBUBelegKontierung::setMandnr_kto()
     * @uses JETFIBUBelegKontierung::setKtonr()
     * @uses JETFIBUBelegKontierung::setKz_buart()
     * @uses JETFIBUBelegKontierung::setKz_sh()
     * @uses JETFIBUBelegKontierung::setKz_storno()
     * @uses JETFIBUBelegKontierung::setKz_svkategorie()
     * @uses JETFIBUBelegKontierung::setText()
     * @uses JETFIBUBelegKontierung::setKz_ustbuch()
     * @uses JETFIBUBelegKontierung::setKz_ust()
     * @uses JETFIBUBelegKontierung::setUstdat()
     * @uses JETFIBUBelegKontierung::setKz_ustart()
     * @uses JETFIBUBelegKontierung::setKz_fw()
     * @uses JETFIBUBelegKontierung::setFwvariante()
     * @uses JETFIBUBelegKontierung::setFwbetr()
     * @uses JETFIBUBelegKontierung::setBetr()
     * @uses JETFIBUBelegKontierung::setFwustbetr()
     * @uses JETFIBUBelegKontierung::setUstbetr()
     * @uses JETFIBUBelegKontierung::setSkbetr()
     * @uses JETFIBUBelegKontierung::setSkfaebetr()
     * @uses JETFIBUBelegKontierung::setFwzinsbetr()
     * @uses JETFIBUBelegKontierung::setZinsbetr()
     * @uses JETFIBUBelegKontierung::setFwnaustbetr()
     * @uses JETFIBUBelegKontierung::setNaustbetr()
     * @uses JETFIBUBelegKontierung::setValdat()
     * @uses JETFIBUBelegKontierung::setScrita()
     * @uses JETFIBUBelegKontierung::setScritb()
     * @uses JETFIBUBelegKontierung::setScritc()
     * @uses JETFIBUBelegKontierung::setScritd()
     * @uses JETFIBUBelegKontierung::setScrite()
     * @uses JETFIBUBelegKontierung::setScritf()
     * @uses JETFIBUBelegKontierung::setPerdat_uva()
     * @uses JETFIBUBelegKontierung::setNotiz()
     * @uses JETFIBUBelegKontierung::setOp_nr()
     * @uses JETFIBUBelegKontierung::setOp_subopnr()
     * @uses JETFIBUBelegKontierung::setOp_ratennr()
     * @uses JETFIBUBelegKontierung::setOp_skbetr_max()
     * @uses JETFIBUBelegKontierung::setOp_zlgkond()
     * @uses JETFIBUBelegKontierung::setOp_przsk1()
     * @uses JETFIBUBelegKontierung::setOp_tage1()
     * @uses JETFIBUBelegKontierung::setOp_przsk2()
     * @uses JETFIBUBelegKontierung::setOp_tage2()
     * @uses JETFIBUBelegKontierung::setOp_tage_ntto()
     * @uses JETFIBUBelegKontierung::setOp_mhstuf()
     * @uses JETFIBUBelegKontierung::setOp_mhsperre()
     * @uses JETFIBUBelegKontierung::setOp_zvksperre()
     * @uses JETFIBUBelegKontierung::setOp_mhanschr()
     * @uses JETFIBUBelegKontierung::setOp_text()
     * @uses JETFIBUBelegKontierung::setOp_refnr_vesr()
     * @uses JETFIBUBelegKontierung::setOp_vesr_tnr()
     * @uses JETFIBUBelegKontierung::setOp_ma_anrede()
     * @uses JETFIBUBelegKontierung::setOp_ma_name1()
     * @uses JETFIBUBelegKontierung::setOp_ma_name2()
     * @uses JETFIBUBelegKontierung::setOp_ma_name3()
     * @uses JETFIBUBelegKontierung::setOp_ma_emailadr1()
     * @uses JETFIBUBelegKontierung::setOp_ma_emailname1()
     * @uses JETFIBUBelegKontierung::setOp_ma_emailadr2()
     * @uses JETFIBUBelegKontierung::setOp_ma_emailname2()
     * @uses JETFIBUBelegKontierung::setOp_ma_www_adresse()
     * @uses JETFIBUBelegKontierung::setOp_ma_telnr1()
     * @uses JETFIBUBelegKontierung::setOp_ma_telnr2()
     * @uses JETFIBUBelegKontierung::setOp_ma_telefaxnr()
     * @uses JETFIBUBelegKontierung::setOp_ma_telefaxnr2()
     * @uses JETFIBUBelegKontierung::setOp_ma_strasse()
     * @uses JETFIBUBelegKontierung::setOp_ma_strasse2()
     * @uses JETFIBUBelegKontierung::setOp_ma_kz_land()
     * @uses JETFIBUBelegKontierung::setOp_ma_landbez()
     * @uses JETFIBUBelegKontierung::setOp_ma_plz()
     * @uses JETFIBUBelegKontierung::setOp_ma_ort()
     * @uses JETFIBUBelegKontierung::setOp_za_anrede()
     * @uses JETFIBUBelegKontierung::setOp_za_name1()
     * @uses JETFIBUBelegKontierung::setOp_za_name2()
     * @uses JETFIBUBelegKontierung::setOp_za_name3()
     * @uses JETFIBUBelegKontierung::setOp_za_emailadr1()
     * @uses JETFIBUBelegKontierung::setOp_za_emailname1()
     * @uses JETFIBUBelegKontierung::setOp_za_emailadr2()
     * @uses JETFIBUBelegKontierung::setOp_za_emailname2()
     * @uses JETFIBUBelegKontierung::setOp_za_www_adresse()
     * @uses JETFIBUBelegKontierung::setOp_za_telnr1()
     * @uses JETFIBUBelegKontierung::setOp_za_telnr2()
     * @uses JETFIBUBelegKontierung::setOp_za_telefaxnr()
     * @uses JETFIBUBelegKontierung::setOp_za_telefaxnr2()
     * @uses JETFIBUBelegKontierung::setOp_za_strasse()
     * @uses JETFIBUBelegKontierung::setOp_za_strasse2()
     * @uses JETFIBUBelegKontierung::setOp_za_kz_land()
     * @uses JETFIBUBelegKontierung::setOp_za_landbez()
     * @uses JETFIBUBelegKontierung::setOp_za_plz()
     * @uses JETFIBUBelegKontierung::setOp_za_ort()
     * @uses JETFIBUBelegKontierung::setOp_frktonr()
     * @uses JETFIBUBelegKontierung::setOp_zvanschr()
     * @uses JETFIBUBelegKontierung::setOp_bk_kz_land()
     * @uses JETFIBUBelegKontierung::setOp_bk_blz()
     * @uses JETFIBUBelegKontierung::setOp_bk_bankktonr()
     * @uses JETFIBUBelegKontierung::setOp_banknr()
     * @uses JETFIBUBelegKontierung::setOp_notiz()
     * @uses JETFIBUBelegKontierung::setKr_buch()
     * @uses JETFIBUBelegKontierung::setKr_art()
     * @uses JETFIBUBelegKontierung::setKr_kstnr()
     * @uses JETFIBUBelegKontierung::setKr_buart()
     * @uses JETFIBUBelegKontierung::setKr_kstnr_zd()
     * @uses JETFIBUBelegKontierung::setKr_koanr()
     * @uses JETFIBUBelegKontierung::setKr_koanr_extern()
     * @uses JETFIBUBelegKontierung::setKr_perdat()
     * @uses JETFIBUBelegKontierung::setKr_fwbetr()
     * @uses JETFIBUBelegKontierung::setKr_betr()
     * @uses JETFIBUBelegKontierung::setKr_menge()
     * @uses JETFIBUBelegKontierung::setKr_text()
     * @uses JETFIBUBelegKontierung::setEv_nr()
     * @uses JETFIBUBelegKontierung::setEv_faedat()
     * @uses JETFIBUBelegKontierung::setEv_prol()
     * @uses JETFIBUBelegKontierung::setEv_text()
     * @uses JETFIBUBelegKontierung::setEv_aussteller()
     * @uses JETFIBUBelegKontierung::setEv_bezogener()
     * @uses JETFIBUBelegKontierung::setEv_zahlstelle()
     * @uses JETFIBUBelegKontierung::setTs_dhrlbetr()
     * @uses JETFIBUBelegKontierung::setTs_dhrlfaedat()
     * @uses JETFIBUBelegKontierung::setTs_kz_drl_ber()
     * @uses JETFIBUBelegKontierung::setEust_ktonr()
     * @uses JETFIBUBelegKontierung::setEust_opnr()
     * @param string $satzart
     * @param string $mandnr_bib
     * @param string $bereich_bib
     * @param string $bereichlfd_bib
     * @param string $biktlfd
     * @param string $kz_kt
     * @param string $mandnr_kto
     * @param string $ktonr
     * @param string $kz_buart
     * @param string $kz_sh
     * @param string $kz_storno
     * @param string $kz_svkategorie
     * @param string $text
     * @param string $kz_ustbuch
     * @param string $kz_ust
     * @param string $ustdat
     * @param string $kz_ustart
     * @param string $kz_fw
     * @param string $fwvariante
     * @param string $fwbetr
     * @param string $betr
     * @param string $fwustbetr
     * @param string $ustbetr
     * @param string $skbetr
     * @param string $skfaebetr
     * @param string $fwzinsbetr
     * @param string $zinsbetr
     * @param string $fwnaustbetr
     * @param string $naustbetr
     * @param string $valdat
     * @param string $scrita
     * @param string $scritb
     * @param string $scritc
     * @param string $scritd
     * @param string $scrite
     * @param string $scritf
     * @param string $perdat_uva
     * @param string $notiz
     * @param string $op_nr
     * @param string $op_subopnr
     * @param string $op_ratennr
     * @param string $op_skbetr_max
     * @param string $op_zlgkond
     * @param string $op_przsk1
     * @param string $op_tage1
     * @param string $op_przsk2
     * @param string $op_tage2
     * @param string $op_tage_ntto
     * @param string $op_mhstuf
     * @param string $op_mhsperre
     * @param string $op_zvksperre
     * @param string $op_mhanschr
     * @param string $op_text
     * @param string $op_refnr_vesr
     * @param string $op_vesr_tnr
     * @param string $op_ma_anrede
     * @param string $op_ma_name1
     * @param string $op_ma_name2
     * @param string $op_ma_name3
     * @param string $op_ma_emailadr1
     * @param string $op_ma_emailname1
     * @param string $op_ma_emailadr2
     * @param string $op_ma_emailname2
     * @param string $op_ma_www_adresse
     * @param string $op_ma_telnr1
     * @param string $op_ma_telnr2
     * @param string $op_ma_telefaxnr
     * @param string $op_ma_telefaxnr2
     * @param string $op_ma_strasse
     * @param string $op_ma_strasse2
     * @param string $op_ma_kz_land
     * @param string $op_ma_landbez
     * @param string $op_ma_plz
     * @param string $op_ma_ort
     * @param string $op_za_anrede
     * @param string $op_za_name1
     * @param string $op_za_name2
     * @param string $op_za_name3
     * @param string $op_za_emailadr1
     * @param string $op_za_emailname1
     * @param string $op_za_emailadr2
     * @param string $op_za_emailname2
     * @param string $op_za_www_adresse
     * @param string $op_za_telnr1
     * @param string $op_za_telnr2
     * @param string $op_za_telefaxnr
     * @param string $op_za_telefaxnr2
     * @param string $op_za_strasse
     * @param string $op_za_strasse2
     * @param string $op_za_kz_land
     * @param string $op_za_landbez
     * @param string $op_za_plz
     * @param string $op_za_ort
     * @param string $op_frktonr
     * @param string $op_zvanschr
     * @param string $op_bk_kz_land
     * @param string $op_bk_blz
     * @param string $op_bk_bankktonr
     * @param string $op_banknr
     * @param string $op_notiz
     * @param string $kr_buch
     * @param string $kr_art
     * @param string $kr_kstnr
     * @param string $kr_buart
     * @param string $kr_kstnr_zd
     * @param string $kr_koanr
     * @param string $kr_koanr_extern
     * @param string $kr_perdat
     * @param string $kr_fwbetr
     * @param string $kr_betr
     * @param string $kr_menge
     * @param string $kr_text
     * @param string $ev_nr
     * @param string $ev_faedat
     * @param string $ev_prol
     * @param string $ev_text
     * @param string $ev_aussteller
     * @param string $ev_bezogener
     * @param string $ev_zahlstelle
     * @param string $ts_dhrlbetr
     * @param string $ts_dhrlfaedat
     * @param string $ts_kz_drl_ber
     * @param string $eust_ktonr
     * @param string $eust_opnr
     */
    public function __construct(?string $satzart = null, ?string $mandnr_bib = null, ?string $bereich_bib = null, ?string $bereichlfd_bib = null, ?string $biktlfd = null, ?string $kz_kt = null, ?string $mandnr_kto = null, ?string $ktonr = null, ?string $kz_buart = null, ?string $kz_sh = null, ?string $kz_storno = null, ?string $kz_svkategorie = null, ?string $text = null, ?string $kz_ustbuch = null, ?string $kz_ust = null, ?string $ustdat = null, ?string $kz_ustart = null, ?string $kz_fw = null, ?string $fwvariante = null, ?string $fwbetr = null, ?string $betr = null, ?string $fwustbetr = null, ?string $ustbetr = null, ?string $skbetr = null, ?string $skfaebetr = null, ?string $fwzinsbetr = null, ?string $zinsbetr = null, ?string $fwnaustbetr = null, ?string $naustbetr = null, ?string $valdat = null, ?string $scrita = null, ?string $scritb = null, ?string $scritc = null, ?string $scritd = null, ?string $scrite = null, ?string $scritf = null, ?string $perdat_uva = null, ?string $notiz = null, ?string $op_nr = null, ?string $op_subopnr = null, ?string $op_ratennr = null, ?string $op_skbetr_max = null, ?string $op_zlgkond = null, ?string $op_przsk1 = null, ?string $op_tage1 = null, ?string $op_przsk2 = null, ?string $op_tage2 = null, ?string $op_tage_ntto = null, ?string $op_mhstuf = null, ?string $op_mhsperre = null, ?string $op_zvksperre = null, ?string $op_mhanschr = null, ?string $op_text = null, ?string $op_refnr_vesr = null, ?string $op_vesr_tnr = null, ?string $op_ma_anrede = null, ?string $op_ma_name1 = null, ?string $op_ma_name2 = null, ?string $op_ma_name3 = null, ?string $op_ma_emailadr1 = null, ?string $op_ma_emailname1 = null, ?string $op_ma_emailadr2 = null, ?string $op_ma_emailname2 = null, ?string $op_ma_www_adresse = null, ?string $op_ma_telnr1 = null, ?string $op_ma_telnr2 = null, ?string $op_ma_telefaxnr = null, ?string $op_ma_telefaxnr2 = null, ?string $op_ma_strasse = null, ?string $op_ma_strasse2 = null, ?string $op_ma_kz_land = null, ?string $op_ma_landbez = null, ?string $op_ma_plz = null, ?string $op_ma_ort = null, ?string $op_za_anrede = null, ?string $op_za_name1 = null, ?string $op_za_name2 = null, ?string $op_za_name3 = null, ?string $op_za_emailadr1 = null, ?string $op_za_emailname1 = null, ?string $op_za_emailadr2 = null, ?string $op_za_emailname2 = null, ?string $op_za_www_adresse = null, ?string $op_za_telnr1 = null, ?string $op_za_telnr2 = null, ?string $op_za_telefaxnr = null, ?string $op_za_telefaxnr2 = null, ?string $op_za_strasse = null, ?string $op_za_strasse2 = null, ?string $op_za_kz_land = null, ?string $op_za_landbez = null, ?string $op_za_plz = null, ?string $op_za_ort = null, ?string $op_frktonr = null, ?string $op_zvanschr = null, ?string $op_bk_kz_land = null, ?string $op_bk_blz = null, ?string $op_bk_bankktonr = null, ?string $op_banknr = null, ?string $op_notiz = null, ?string $kr_buch = null, ?string $kr_art = null, ?string $kr_kstnr = null, ?string $kr_buart = null, ?string $kr_kstnr_zd = null, ?string $kr_koanr = null, ?string $kr_koanr_extern = null, ?string $kr_perdat = null, ?string $kr_fwbetr = null, ?string $kr_betr = null, ?string $kr_menge = null, ?string $kr_text = null, ?string $ev_nr = null, ?string $ev_faedat = null, ?string $ev_prol = null, ?string $ev_text = null, ?string $ev_aussteller = null, ?string $ev_bezogener = null, ?string $ev_zahlstelle = null, ?string $ts_dhrlbetr = null, ?string $ts_dhrlfaedat = null, ?string $ts_kz_drl_ber = null, ?string $eust_ktonr = null, ?string $eust_opnr = null)
    {
        $this
            ->setSatzart($satzart)
            ->setMandnr_bib($mandnr_bib)
            ->setBereich_bib($bereich_bib)
            ->setBereichlfd_bib($bereichlfd_bib)
            ->setBiktlfd($biktlfd)
            ->setKz_kt($kz_kt)
            ->setMandnr_kto($mandnr_kto)
            ->setKtonr($ktonr)
            ->setKz_buart($kz_buart)
            ->setKz_sh($kz_sh)
            ->setKz_storno($kz_storno)
            ->setKz_svkategorie($kz_svkategorie)
            ->setText($text)
            ->setKz_ustbuch($kz_ustbuch)
            ->setKz_ust($kz_ust)
            ->setUstdat($ustdat)
            ->setKz_ustart($kz_ustart)
            ->setKz_fw($kz_fw)
            ->setFwvariante($fwvariante)
            ->setFwbetr($fwbetr)
            ->setBetr($betr)
            ->setFwustbetr($fwustbetr)
            ->setUstbetr($ustbetr)
            ->setSkbetr($skbetr)
            ->setSkfaebetr($skfaebetr)
            ->setFwzinsbetr($fwzinsbetr)
            ->setZinsbetr($zinsbetr)
            ->setFwnaustbetr($fwnaustbetr)
            ->setNaustbetr($naustbetr)
            ->setValdat($valdat)
            ->setScrita($scrita)
            ->setScritb($scritb)
            ->setScritc($scritc)
            ->setScritd($scritd)
            ->setScrite($scrite)
            ->setScritf($scritf)
            ->setPerdat_uva($perdat_uva)
            ->setNotiz($notiz)
            ->setOp_nr($op_nr)
            ->setOp_subopnr($op_subopnr)
            ->setOp_ratennr($op_ratennr)
            ->setOp_skbetr_max($op_skbetr_max)
            ->setOp_zlgkond($op_zlgkond)
            ->setOp_przsk1($op_przsk1)
            ->setOp_tage1($op_tage1)
            ->setOp_przsk2($op_przsk2)
            ->setOp_tage2($op_tage2)
            ->setOp_tage_ntto($op_tage_ntto)
            ->setOp_mhstuf($op_mhstuf)
            ->setOp_mhsperre($op_mhsperre)
            ->setOp_zvksperre($op_zvksperre)
            ->setOp_mhanschr($op_mhanschr)
            ->setOp_text($op_text)
            ->setOp_refnr_vesr($op_refnr_vesr)
            ->setOp_vesr_tnr($op_vesr_tnr)
            ->setOp_ma_anrede($op_ma_anrede)
            ->setOp_ma_name1($op_ma_name1)
            ->setOp_ma_name2($op_ma_name2)
            ->setOp_ma_name3($op_ma_name3)
            ->setOp_ma_emailadr1($op_ma_emailadr1)
            ->setOp_ma_emailname1($op_ma_emailname1)
            ->setOp_ma_emailadr2($op_ma_emailadr2)
            ->setOp_ma_emailname2($op_ma_emailname2)
            ->setOp_ma_www_adresse($op_ma_www_adresse)
            ->setOp_ma_telnr1($op_ma_telnr1)
            ->setOp_ma_telnr2($op_ma_telnr2)
            ->setOp_ma_telefaxnr($op_ma_telefaxnr)
            ->setOp_ma_telefaxnr2($op_ma_telefaxnr2)
            ->setOp_ma_strasse($op_ma_strasse)
            ->setOp_ma_strasse2($op_ma_strasse2)
            ->setOp_ma_kz_land($op_ma_kz_land)
            ->setOp_ma_landbez($op_ma_landbez)
            ->setOp_ma_plz($op_ma_plz)
            ->setOp_ma_ort($op_ma_ort)
            ->setOp_za_anrede($op_za_anrede)
            ->setOp_za_name1($op_za_name1)
            ->setOp_za_name2($op_za_name2)
            ->setOp_za_name3($op_za_name3)
            ->setOp_za_emailadr1($op_za_emailadr1)
            ->setOp_za_emailname1($op_za_emailname1)
            ->setOp_za_emailadr2($op_za_emailadr2)
            ->setOp_za_emailname2($op_za_emailname2)
            ->setOp_za_www_adresse($op_za_www_adresse)
            ->setOp_za_telnr1($op_za_telnr1)
            ->setOp_za_telnr2($op_za_telnr2)
            ->setOp_za_telefaxnr($op_za_telefaxnr)
            ->setOp_za_telefaxnr2($op_za_telefaxnr2)
            ->setOp_za_strasse($op_za_strasse)
            ->setOp_za_strasse2($op_za_strasse2)
            ->setOp_za_kz_land($op_za_kz_land)
            ->setOp_za_landbez($op_za_landbez)
            ->setOp_za_plz($op_za_plz)
            ->setOp_za_ort($op_za_ort)
            ->setOp_frktonr($op_frktonr)
            ->setOp_zvanschr($op_zvanschr)
            ->setOp_bk_kz_land($op_bk_kz_land)
            ->setOp_bk_blz($op_bk_blz)
            ->setOp_bk_bankktonr($op_bk_bankktonr)
            ->setOp_banknr($op_banknr)
            ->setOp_notiz($op_notiz)
            ->setKr_buch($kr_buch)
            ->setKr_art($kr_art)
            ->setKr_kstnr($kr_kstnr)
            ->setKr_buart($kr_buart)
            ->setKr_kstnr_zd($kr_kstnr_zd)
            ->setKr_koanr($kr_koanr)
            ->setKr_koanr_extern($kr_koanr_extern)
            ->setKr_perdat($kr_perdat)
            ->setKr_fwbetr($kr_fwbetr)
            ->setKr_betr($kr_betr)
            ->setKr_menge($kr_menge)
            ->setKr_text($kr_text)
            ->setEv_nr($ev_nr)
            ->setEv_faedat($ev_faedat)
            ->setEv_prol($ev_prol)
            ->setEv_text($ev_text)
            ->setEv_aussteller($ev_aussteller)
            ->setEv_bezogener($ev_bezogener)
            ->setEv_zahlstelle($ev_zahlstelle)
            ->setTs_dhrlbetr($ts_dhrlbetr)
            ->setTs_dhrlfaedat($ts_dhrlfaedat)
            ->setTs_kz_drl_ber($ts_kz_drl_ber)
            ->setEust_ktonr($eust_ktonr)
            ->setEust_opnr($eust_opnr);
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
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
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
     * Get mandnr_bib value
     * @return string|null
     */
    public function getMandnr_bib(): ?string
    {
        return $this->mandnr_bib;
    }
    /**
     * Set mandnr_bib value
     * @param string $mandnr_bib
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setMandnr_bib(?string $mandnr_bib = null): self
    {
        // validation for constraint: string
        if (!is_null($mandnr_bib) && !is_string($mandnr_bib)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandnr_bib, true), gettype($mandnr_bib)), __LINE__);
        }
        $this->mandnr_bib = $mandnr_bib;
        
        return $this;
    }
    /**
     * Get bereich_bib value
     * @return string|null
     */
    public function getBereich_bib(): ?string
    {
        return $this->bereich_bib;
    }
    /**
     * Set bereich_bib value
     * @param string $bereich_bib
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setBereich_bib(?string $bereich_bib = null): self
    {
        // validation for constraint: string
        if (!is_null($bereich_bib) && !is_string($bereich_bib)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bereich_bib, true), gettype($bereich_bib)), __LINE__);
        }
        $this->bereich_bib = $bereich_bib;
        
        return $this;
    }
    /**
     * Get bereichlfd_bib value
     * @return string|null
     */
    public function getBereichlfd_bib(): ?string
    {
        return $this->bereichlfd_bib;
    }
    /**
     * Set bereichlfd_bib value
     * @param string $bereichlfd_bib
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setBereichlfd_bib(?string $bereichlfd_bib = null): self
    {
        // validation for constraint: string
        if (!is_null($bereichlfd_bib) && !is_string($bereichlfd_bib)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bereichlfd_bib, true), gettype($bereichlfd_bib)), __LINE__);
        }
        $this->bereichlfd_bib = $bereichlfd_bib;
        
        return $this;
    }
    /**
     * Get biktlfd value
     * @return string|null
     */
    public function getBiktlfd(): ?string
    {
        return $this->biktlfd;
    }
    /**
     * Set biktlfd value
     * @param string $biktlfd
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setBiktlfd(?string $biktlfd = null): self
    {
        // validation for constraint: string
        if (!is_null($biktlfd) && !is_string($biktlfd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($biktlfd, true), gettype($biktlfd)), __LINE__);
        }
        $this->biktlfd = $biktlfd;
        
        return $this;
    }
    /**
     * Get kz_kt value
     * @return string|null
     */
    public function getKz_kt(): ?string
    {
        return $this->kz_kt;
    }
    /**
     * Set kz_kt value
     * @param string $kz_kt
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKz_kt(?string $kz_kt = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_kt) && !is_string($kz_kt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_kt, true), gettype($kz_kt)), __LINE__);
        }
        $this->kz_kt = $kz_kt;
        
        return $this;
    }
    /**
     * Get mandnr_kto value
     * @return string|null
     */
    public function getMandnr_kto(): ?string
    {
        return $this->mandnr_kto;
    }
    /**
     * Set mandnr_kto value
     * @param string $mandnr_kto
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setMandnr_kto(?string $mandnr_kto = null): self
    {
        // validation for constraint: string
        if (!is_null($mandnr_kto) && !is_string($mandnr_kto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandnr_kto, true), gettype($mandnr_kto)), __LINE__);
        }
        $this->mandnr_kto = $mandnr_kto;
        
        return $this;
    }
    /**
     * Get ktonr value
     * @return string|null
     */
    public function getKtonr(): ?string
    {
        return $this->ktonr;
    }
    /**
     * Set ktonr value
     * @param string $ktonr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKtonr(?string $ktonr = null): self
    {
        // validation for constraint: string
        if (!is_null($ktonr) && !is_string($ktonr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ktonr, true), gettype($ktonr)), __LINE__);
        }
        $this->ktonr = $ktonr;
        
        return $this;
    }
    /**
     * Get kz_buart value
     * @return string|null
     */
    public function getKz_buart(): ?string
    {
        return $this->kz_buart;
    }
    /**
     * Set kz_buart value
     * @param string $kz_buart
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKz_buart(?string $kz_buart = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_buart) && !is_string($kz_buart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_buart, true), gettype($kz_buart)), __LINE__);
        }
        $this->kz_buart = $kz_buart;
        
        return $this;
    }
    /**
     * Get kz_sh value
     * @return string|null
     */
    public function getKz_sh(): ?string
    {
        return $this->kz_sh;
    }
    /**
     * Set kz_sh value
     * @param string $kz_sh
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKz_sh(?string $kz_sh = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_sh) && !is_string($kz_sh)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_sh, true), gettype($kz_sh)), __LINE__);
        }
        $this->kz_sh = $kz_sh;
        
        return $this;
    }
    /**
     * Get kz_storno value
     * @return string|null
     */
    public function getKz_storno(): ?string
    {
        return $this->kz_storno;
    }
    /**
     * Set kz_storno value
     * @param string $kz_storno
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKz_storno(?string $kz_storno = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_storno) && !is_string($kz_storno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_storno, true), gettype($kz_storno)), __LINE__);
        }
        $this->kz_storno = $kz_storno;
        
        return $this;
    }
    /**
     * Get kz_svkategorie value
     * @return string|null
     */
    public function getKz_svkategorie(): ?string
    {
        return $this->kz_svkategorie;
    }
    /**
     * Set kz_svkategorie value
     * @param string $kz_svkategorie
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKz_svkategorie(?string $kz_svkategorie = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_svkategorie) && !is_string($kz_svkategorie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_svkategorie, true), gettype($kz_svkategorie)), __LINE__);
        }
        $this->kz_svkategorie = $kz_svkategorie;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
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
     * Get kz_ustbuch value
     * @return string|null
     */
    public function getKz_ustbuch(): ?string
    {
        return $this->kz_ustbuch;
    }
    /**
     * Set kz_ustbuch value
     * @param string $kz_ustbuch
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKz_ustbuch(?string $kz_ustbuch = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_ustbuch) && !is_string($kz_ustbuch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_ustbuch, true), gettype($kz_ustbuch)), __LINE__);
        }
        $this->kz_ustbuch = $kz_ustbuch;
        
        return $this;
    }
    /**
     * Get kz_ust value
     * @return string|null
     */
    public function getKz_ust(): ?string
    {
        return $this->kz_ust;
    }
    /**
     * Set kz_ust value
     * @param string $kz_ust
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKz_ust(?string $kz_ust = null): self
    {
        // validation for constraint: string
        if (!is_null($kz_ust) && !is_string($kz_ust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kz_ust, true), gettype($kz_ust)), __LINE__);
        }
        $this->kz_ust = $kz_ust;
        
        return $this;
    }
    /**
     * Get ustdat value
     * @return string|null
     */
    public function getUstdat(): ?string
    {
        return $this->ustdat;
    }
    /**
     * Set ustdat value
     * @param string $ustdat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setUstdat(?string $ustdat = null): self
    {
        // validation for constraint: string
        if (!is_null($ustdat) && !is_string($ustdat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ustdat, true), gettype($ustdat)), __LINE__);
        }
        $this->ustdat = $ustdat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
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
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
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
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
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
     * Get fwbetr value
     * @return string|null
     */
    public function getFwbetr(): ?string
    {
        return $this->fwbetr;
    }
    /**
     * Set fwbetr value
     * @param string $fwbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setFwbetr(?string $fwbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($fwbetr) && !is_string($fwbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fwbetr, true), gettype($fwbetr)), __LINE__);
        }
        $this->fwbetr = $fwbetr;
        
        return $this;
    }
    /**
     * Get betr value
     * @return string|null
     */
    public function getBetr(): ?string
    {
        return $this->betr;
    }
    /**
     * Set betr value
     * @param string $betr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setBetr(?string $betr = null): self
    {
        // validation for constraint: string
        if (!is_null($betr) && !is_string($betr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($betr, true), gettype($betr)), __LINE__);
        }
        $this->betr = $betr;
        
        return $this;
    }
    /**
     * Get fwustbetr value
     * @return string|null
     */
    public function getFwustbetr(): ?string
    {
        return $this->fwustbetr;
    }
    /**
     * Set fwustbetr value
     * @param string $fwustbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setFwustbetr(?string $fwustbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($fwustbetr) && !is_string($fwustbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fwustbetr, true), gettype($fwustbetr)), __LINE__);
        }
        $this->fwustbetr = $fwustbetr;
        
        return $this;
    }
    /**
     * Get ustbetr value
     * @return string|null
     */
    public function getUstbetr(): ?string
    {
        return $this->ustbetr;
    }
    /**
     * Set ustbetr value
     * @param string $ustbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setUstbetr(?string $ustbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($ustbetr) && !is_string($ustbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ustbetr, true), gettype($ustbetr)), __LINE__);
        }
        $this->ustbetr = $ustbetr;
        
        return $this;
    }
    /**
     * Get skbetr value
     * @return string|null
     */
    public function getSkbetr(): ?string
    {
        return $this->skbetr;
    }
    /**
     * Set skbetr value
     * @param string $skbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setSkbetr(?string $skbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($skbetr) && !is_string($skbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skbetr, true), gettype($skbetr)), __LINE__);
        }
        $this->skbetr = $skbetr;
        
        return $this;
    }
    /**
     * Get skfaebetr value
     * @return string|null
     */
    public function getSkfaebetr(): ?string
    {
        return $this->skfaebetr;
    }
    /**
     * Set skfaebetr value
     * @param string $skfaebetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setSkfaebetr(?string $skfaebetr = null): self
    {
        // validation for constraint: string
        if (!is_null($skfaebetr) && !is_string($skfaebetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skfaebetr, true), gettype($skfaebetr)), __LINE__);
        }
        $this->skfaebetr = $skfaebetr;
        
        return $this;
    }
    /**
     * Get fwzinsbetr value
     * @return string|null
     */
    public function getFwzinsbetr(): ?string
    {
        return $this->fwzinsbetr;
    }
    /**
     * Set fwzinsbetr value
     * @param string $fwzinsbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setFwzinsbetr(?string $fwzinsbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($fwzinsbetr) && !is_string($fwzinsbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fwzinsbetr, true), gettype($fwzinsbetr)), __LINE__);
        }
        $this->fwzinsbetr = $fwzinsbetr;
        
        return $this;
    }
    /**
     * Get zinsbetr value
     * @return string|null
     */
    public function getZinsbetr(): ?string
    {
        return $this->zinsbetr;
    }
    /**
     * Set zinsbetr value
     * @param string $zinsbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setZinsbetr(?string $zinsbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($zinsbetr) && !is_string($zinsbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zinsbetr, true), gettype($zinsbetr)), __LINE__);
        }
        $this->zinsbetr = $zinsbetr;
        
        return $this;
    }
    /**
     * Get fwnaustbetr value
     * @return string|null
     */
    public function getFwnaustbetr(): ?string
    {
        return $this->fwnaustbetr;
    }
    /**
     * Set fwnaustbetr value
     * @param string $fwnaustbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setFwnaustbetr(?string $fwnaustbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($fwnaustbetr) && !is_string($fwnaustbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fwnaustbetr, true), gettype($fwnaustbetr)), __LINE__);
        }
        $this->fwnaustbetr = $fwnaustbetr;
        
        return $this;
    }
    /**
     * Get naustbetr value
     * @return string|null
     */
    public function getNaustbetr(): ?string
    {
        return $this->naustbetr;
    }
    /**
     * Set naustbetr value
     * @param string $naustbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setNaustbetr(?string $naustbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($naustbetr) && !is_string($naustbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($naustbetr, true), gettype($naustbetr)), __LINE__);
        }
        $this->naustbetr = $naustbetr;
        
        return $this;
    }
    /**
     * Get valdat value
     * @return string|null
     */
    public function getValdat(): ?string
    {
        return $this->valdat;
    }
    /**
     * Set valdat value
     * @param string $valdat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setValdat(?string $valdat = null): self
    {
        // validation for constraint: string
        if (!is_null($valdat) && !is_string($valdat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valdat, true), gettype($valdat)), __LINE__);
        }
        $this->valdat = $valdat;
        
        return $this;
    }
    /**
     * Get scrita value
     * @return string|null
     */
    public function getScrita(): ?string
    {
        return $this->scrita;
    }
    /**
     * Set scrita value
     * @param string $scrita
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setScrita(?string $scrita = null): self
    {
        // validation for constraint: string
        if (!is_null($scrita) && !is_string($scrita)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scrita, true), gettype($scrita)), __LINE__);
        }
        $this->scrita = $scrita;
        
        return $this;
    }
    /**
     * Get scritb value
     * @return string|null
     */
    public function getScritb(): ?string
    {
        return $this->scritb;
    }
    /**
     * Set scritb value
     * @param string $scritb
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setScritb(?string $scritb = null): self
    {
        // validation for constraint: string
        if (!is_null($scritb) && !is_string($scritb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scritb, true), gettype($scritb)), __LINE__);
        }
        $this->scritb = $scritb;
        
        return $this;
    }
    /**
     * Get scritc value
     * @return string|null
     */
    public function getScritc(): ?string
    {
        return $this->scritc;
    }
    /**
     * Set scritc value
     * @param string $scritc
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setScritc(?string $scritc = null): self
    {
        // validation for constraint: string
        if (!is_null($scritc) && !is_string($scritc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scritc, true), gettype($scritc)), __LINE__);
        }
        $this->scritc = $scritc;
        
        return $this;
    }
    /**
     * Get scritd value
     * @return string|null
     */
    public function getScritd(): ?string
    {
        return $this->scritd;
    }
    /**
     * Set scritd value
     * @param string $scritd
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setScritd(?string $scritd = null): self
    {
        // validation for constraint: string
        if (!is_null($scritd) && !is_string($scritd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scritd, true), gettype($scritd)), __LINE__);
        }
        $this->scritd = $scritd;
        
        return $this;
    }
    /**
     * Get scrite value
     * @return string|null
     */
    public function getScrite(): ?string
    {
        return $this->scrite;
    }
    /**
     * Set scrite value
     * @param string $scrite
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setScrite(?string $scrite = null): self
    {
        // validation for constraint: string
        if (!is_null($scrite) && !is_string($scrite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scrite, true), gettype($scrite)), __LINE__);
        }
        $this->scrite = $scrite;
        
        return $this;
    }
    /**
     * Get scritf value
     * @return string|null
     */
    public function getScritf(): ?string
    {
        return $this->scritf;
    }
    /**
     * Set scritf value
     * @param string $scritf
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setScritf(?string $scritf = null): self
    {
        // validation for constraint: string
        if (!is_null($scritf) && !is_string($scritf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scritf, true), gettype($scritf)), __LINE__);
        }
        $this->scritf = $scritf;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
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
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
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
    /**
     * Get op_nr value
     * @return string|null
     */
    public function getOp_nr(): ?string
    {
        return $this->op_nr;
    }
    /**
     * Set op_nr value
     * @param string $op_nr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_nr(?string $op_nr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_nr) && !is_string($op_nr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_nr, true), gettype($op_nr)), __LINE__);
        }
        $this->op_nr = $op_nr;
        
        return $this;
    }
    /**
     * Get op_subopnr value
     * @return string|null
     */
    public function getOp_subopnr(): ?string
    {
        return $this->op_subopnr;
    }
    /**
     * Set op_subopnr value
     * @param string $op_subopnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_subopnr(?string $op_subopnr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_subopnr) && !is_string($op_subopnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_subopnr, true), gettype($op_subopnr)), __LINE__);
        }
        $this->op_subopnr = $op_subopnr;
        
        return $this;
    }
    /**
     * Get op_ratennr value
     * @return string|null
     */
    public function getOp_ratennr(): ?string
    {
        return $this->op_ratennr;
    }
    /**
     * Set op_ratennr value
     * @param string $op_ratennr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ratennr(?string $op_ratennr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ratennr) && !is_string($op_ratennr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ratennr, true), gettype($op_ratennr)), __LINE__);
        }
        $this->op_ratennr = $op_ratennr;
        
        return $this;
    }
    /**
     * Get op_skbetr_max value
     * @return string|null
     */
    public function getOp_skbetr_max(): ?string
    {
        return $this->op_skbetr_max;
    }
    /**
     * Set op_skbetr_max value
     * @param string $op_skbetr_max
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_skbetr_max(?string $op_skbetr_max = null): self
    {
        // validation for constraint: string
        if (!is_null($op_skbetr_max) && !is_string($op_skbetr_max)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_skbetr_max, true), gettype($op_skbetr_max)), __LINE__);
        }
        $this->op_skbetr_max = $op_skbetr_max;
        
        return $this;
    }
    /**
     * Get op_zlgkond value
     * @return string|null
     */
    public function getOp_zlgkond(): ?string
    {
        return $this->op_zlgkond;
    }
    /**
     * Set op_zlgkond value
     * @param string $op_zlgkond
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_zlgkond(?string $op_zlgkond = null): self
    {
        // validation for constraint: string
        if (!is_null($op_zlgkond) && !is_string($op_zlgkond)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_zlgkond, true), gettype($op_zlgkond)), __LINE__);
        }
        $this->op_zlgkond = $op_zlgkond;
        
        return $this;
    }
    /**
     * Get op_przsk1 value
     * @return string|null
     */
    public function getOp_przsk1(): ?string
    {
        return $this->op_przsk1;
    }
    /**
     * Set op_przsk1 value
     * @param string $op_przsk1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_przsk1(?string $op_przsk1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_przsk1) && !is_string($op_przsk1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_przsk1, true), gettype($op_przsk1)), __LINE__);
        }
        $this->op_przsk1 = $op_przsk1;
        
        return $this;
    }
    /**
     * Get op_tage1 value
     * @return string|null
     */
    public function getOp_tage1(): ?string
    {
        return $this->op_tage1;
    }
    /**
     * Set op_tage1 value
     * @param string $op_tage1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_tage1(?string $op_tage1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_tage1) && !is_string($op_tage1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_tage1, true), gettype($op_tage1)), __LINE__);
        }
        $this->op_tage1 = $op_tage1;
        
        return $this;
    }
    /**
     * Get op_przsk2 value
     * @return string|null
     */
    public function getOp_przsk2(): ?string
    {
        return $this->op_przsk2;
    }
    /**
     * Set op_przsk2 value
     * @param string $op_przsk2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_przsk2(?string $op_przsk2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_przsk2) && !is_string($op_przsk2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_przsk2, true), gettype($op_przsk2)), __LINE__);
        }
        $this->op_przsk2 = $op_przsk2;
        
        return $this;
    }
    /**
     * Get op_tage2 value
     * @return string|null
     */
    public function getOp_tage2(): ?string
    {
        return $this->op_tage2;
    }
    /**
     * Set op_tage2 value
     * @param string $op_tage2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_tage2(?string $op_tage2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_tage2) && !is_string($op_tage2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_tage2, true), gettype($op_tage2)), __LINE__);
        }
        $this->op_tage2 = $op_tage2;
        
        return $this;
    }
    /**
     * Get op_tage_ntto value
     * @return string|null
     */
    public function getOp_tage_ntto(): ?string
    {
        return $this->op_tage_ntto;
    }
    /**
     * Set op_tage_ntto value
     * @param string $op_tage_ntto
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_tage_ntto(?string $op_tage_ntto = null): self
    {
        // validation for constraint: string
        if (!is_null($op_tage_ntto) && !is_string($op_tage_ntto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_tage_ntto, true), gettype($op_tage_ntto)), __LINE__);
        }
        $this->op_tage_ntto = $op_tage_ntto;
        
        return $this;
    }
    /**
     * Get op_mhstuf value
     * @return string|null
     */
    public function getOp_mhstuf(): ?string
    {
        return $this->op_mhstuf;
    }
    /**
     * Set op_mhstuf value
     * @param string $op_mhstuf
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_mhstuf(?string $op_mhstuf = null): self
    {
        // validation for constraint: string
        if (!is_null($op_mhstuf) && !is_string($op_mhstuf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_mhstuf, true), gettype($op_mhstuf)), __LINE__);
        }
        $this->op_mhstuf = $op_mhstuf;
        
        return $this;
    }
    /**
     * Get op_mhsperre value
     * @return string|null
     */
    public function getOp_mhsperre(): ?string
    {
        return $this->op_mhsperre;
    }
    /**
     * Set op_mhsperre value
     * @param string $op_mhsperre
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_mhsperre(?string $op_mhsperre = null): self
    {
        // validation for constraint: string
        if (!is_null($op_mhsperre) && !is_string($op_mhsperre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_mhsperre, true), gettype($op_mhsperre)), __LINE__);
        }
        $this->op_mhsperre = $op_mhsperre;
        
        return $this;
    }
    /**
     * Get op_zvksperre value
     * @return string|null
     */
    public function getOp_zvksperre(): ?string
    {
        return $this->op_zvksperre;
    }
    /**
     * Set op_zvksperre value
     * @param string $op_zvksperre
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_zvksperre(?string $op_zvksperre = null): self
    {
        // validation for constraint: string
        if (!is_null($op_zvksperre) && !is_string($op_zvksperre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_zvksperre, true), gettype($op_zvksperre)), __LINE__);
        }
        $this->op_zvksperre = $op_zvksperre;
        
        return $this;
    }
    /**
     * Get op_mhanschr value
     * @return string|null
     */
    public function getOp_mhanschr(): ?string
    {
        return $this->op_mhanschr;
    }
    /**
     * Set op_mhanschr value
     * @param string $op_mhanschr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_mhanschr(?string $op_mhanschr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_mhanschr) && !is_string($op_mhanschr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_mhanschr, true), gettype($op_mhanschr)), __LINE__);
        }
        $this->op_mhanschr = $op_mhanschr;
        
        return $this;
    }
    /**
     * Get op_text value
     * @return string|null
     */
    public function getOp_text(): ?string
    {
        return $this->op_text;
    }
    /**
     * Set op_text value
     * @param string $op_text
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_text(?string $op_text = null): self
    {
        // validation for constraint: string
        if (!is_null($op_text) && !is_string($op_text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_text, true), gettype($op_text)), __LINE__);
        }
        $this->op_text = $op_text;
        
        return $this;
    }
    /**
     * Get op_refnr_vesr value
     * @return string|null
     */
    public function getOp_refnr_vesr(): ?string
    {
        return $this->op_refnr_vesr;
    }
    /**
     * Set op_refnr_vesr value
     * @param string $op_refnr_vesr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_refnr_vesr(?string $op_refnr_vesr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_refnr_vesr) && !is_string($op_refnr_vesr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_refnr_vesr, true), gettype($op_refnr_vesr)), __LINE__);
        }
        $this->op_refnr_vesr = $op_refnr_vesr;
        
        return $this;
    }
    /**
     * Get op_vesr_tnr value
     * @return string|null
     */
    public function getOp_vesr_tnr(): ?string
    {
        return $this->op_vesr_tnr;
    }
    /**
     * Set op_vesr_tnr value
     * @param string $op_vesr_tnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_vesr_tnr(?string $op_vesr_tnr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_vesr_tnr) && !is_string($op_vesr_tnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_vesr_tnr, true), gettype($op_vesr_tnr)), __LINE__);
        }
        $this->op_vesr_tnr = $op_vesr_tnr;
        
        return $this;
    }
    /**
     * Get op_ma_anrede value
     * @return string|null
     */
    public function getOp_ma_anrede(): ?string
    {
        return $this->op_ma_anrede;
    }
    /**
     * Set op_ma_anrede value
     * @param string $op_ma_anrede
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_anrede(?string $op_ma_anrede = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_anrede) && !is_string($op_ma_anrede)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_anrede, true), gettype($op_ma_anrede)), __LINE__);
        }
        $this->op_ma_anrede = $op_ma_anrede;
        
        return $this;
    }
    /**
     * Get op_ma_name1 value
     * @return string|null
     */
    public function getOp_ma_name1(): ?string
    {
        return $this->op_ma_name1;
    }
    /**
     * Set op_ma_name1 value
     * @param string $op_ma_name1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_name1(?string $op_ma_name1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_name1) && !is_string($op_ma_name1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_name1, true), gettype($op_ma_name1)), __LINE__);
        }
        $this->op_ma_name1 = $op_ma_name1;
        
        return $this;
    }
    /**
     * Get op_ma_name2 value
     * @return string|null
     */
    public function getOp_ma_name2(): ?string
    {
        return $this->op_ma_name2;
    }
    /**
     * Set op_ma_name2 value
     * @param string $op_ma_name2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_name2(?string $op_ma_name2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_name2) && !is_string($op_ma_name2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_name2, true), gettype($op_ma_name2)), __LINE__);
        }
        $this->op_ma_name2 = $op_ma_name2;
        
        return $this;
    }
    /**
     * Get op_ma_name3 value
     * @return string|null
     */
    public function getOp_ma_name3(): ?string
    {
        return $this->op_ma_name3;
    }
    /**
     * Set op_ma_name3 value
     * @param string $op_ma_name3
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_name3(?string $op_ma_name3 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_name3) && !is_string($op_ma_name3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_name3, true), gettype($op_ma_name3)), __LINE__);
        }
        $this->op_ma_name3 = $op_ma_name3;
        
        return $this;
    }
    /**
     * Get op_ma_emailadr1 value
     * @return string|null
     */
    public function getOp_ma_emailadr1(): ?string
    {
        return $this->op_ma_emailadr1;
    }
    /**
     * Set op_ma_emailadr1 value
     * @param string $op_ma_emailadr1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_emailadr1(?string $op_ma_emailadr1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_emailadr1) && !is_string($op_ma_emailadr1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_emailadr1, true), gettype($op_ma_emailadr1)), __LINE__);
        }
        $this->op_ma_emailadr1 = $op_ma_emailadr1;
        
        return $this;
    }
    /**
     * Get op_ma_emailname1 value
     * @return string|null
     */
    public function getOp_ma_emailname1(): ?string
    {
        return $this->op_ma_emailname1;
    }
    /**
     * Set op_ma_emailname1 value
     * @param string $op_ma_emailname1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_emailname1(?string $op_ma_emailname1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_emailname1) && !is_string($op_ma_emailname1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_emailname1, true), gettype($op_ma_emailname1)), __LINE__);
        }
        $this->op_ma_emailname1 = $op_ma_emailname1;
        
        return $this;
    }
    /**
     * Get op_ma_emailadr2 value
     * @return string|null
     */
    public function getOp_ma_emailadr2(): ?string
    {
        return $this->op_ma_emailadr2;
    }
    /**
     * Set op_ma_emailadr2 value
     * @param string $op_ma_emailadr2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_emailadr2(?string $op_ma_emailadr2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_emailadr2) && !is_string($op_ma_emailadr2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_emailadr2, true), gettype($op_ma_emailadr2)), __LINE__);
        }
        $this->op_ma_emailadr2 = $op_ma_emailadr2;
        
        return $this;
    }
    /**
     * Get op_ma_emailname2 value
     * @return string|null
     */
    public function getOp_ma_emailname2(): ?string
    {
        return $this->op_ma_emailname2;
    }
    /**
     * Set op_ma_emailname2 value
     * @param string $op_ma_emailname2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_emailname2(?string $op_ma_emailname2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_emailname2) && !is_string($op_ma_emailname2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_emailname2, true), gettype($op_ma_emailname2)), __LINE__);
        }
        $this->op_ma_emailname2 = $op_ma_emailname2;
        
        return $this;
    }
    /**
     * Get op_ma_www_adresse value
     * @return string|null
     */
    public function getOp_ma_www_adresse(): ?string
    {
        return $this->op_ma_www_adresse;
    }
    /**
     * Set op_ma_www_adresse value
     * @param string $op_ma_www_adresse
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_www_adresse(?string $op_ma_www_adresse = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_www_adresse) && !is_string($op_ma_www_adresse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_www_adresse, true), gettype($op_ma_www_adresse)), __LINE__);
        }
        $this->op_ma_www_adresse = $op_ma_www_adresse;
        
        return $this;
    }
    /**
     * Get op_ma_telnr1 value
     * @return string|null
     */
    public function getOp_ma_telnr1(): ?string
    {
        return $this->op_ma_telnr1;
    }
    /**
     * Set op_ma_telnr1 value
     * @param string $op_ma_telnr1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_telnr1(?string $op_ma_telnr1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_telnr1) && !is_string($op_ma_telnr1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_telnr1, true), gettype($op_ma_telnr1)), __LINE__);
        }
        $this->op_ma_telnr1 = $op_ma_telnr1;
        
        return $this;
    }
    /**
     * Get op_ma_telnr2 value
     * @return string|null
     */
    public function getOp_ma_telnr2(): ?string
    {
        return $this->op_ma_telnr2;
    }
    /**
     * Set op_ma_telnr2 value
     * @param string $op_ma_telnr2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_telnr2(?string $op_ma_telnr2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_telnr2) && !is_string($op_ma_telnr2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_telnr2, true), gettype($op_ma_telnr2)), __LINE__);
        }
        $this->op_ma_telnr2 = $op_ma_telnr2;
        
        return $this;
    }
    /**
     * Get op_ma_telefaxnr value
     * @return string|null
     */
    public function getOp_ma_telefaxnr(): ?string
    {
        return $this->op_ma_telefaxnr;
    }
    /**
     * Set op_ma_telefaxnr value
     * @param string $op_ma_telefaxnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_telefaxnr(?string $op_ma_telefaxnr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_telefaxnr) && !is_string($op_ma_telefaxnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_telefaxnr, true), gettype($op_ma_telefaxnr)), __LINE__);
        }
        $this->op_ma_telefaxnr = $op_ma_telefaxnr;
        
        return $this;
    }
    /**
     * Get op_ma_telefaxnr2 value
     * @return string|null
     */
    public function getOp_ma_telefaxnr2(): ?string
    {
        return $this->op_ma_telefaxnr2;
    }
    /**
     * Set op_ma_telefaxnr2 value
     * @param string $op_ma_telefaxnr2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_telefaxnr2(?string $op_ma_telefaxnr2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_telefaxnr2) && !is_string($op_ma_telefaxnr2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_telefaxnr2, true), gettype($op_ma_telefaxnr2)), __LINE__);
        }
        $this->op_ma_telefaxnr2 = $op_ma_telefaxnr2;
        
        return $this;
    }
    /**
     * Get op_ma_strasse value
     * @return string|null
     */
    public function getOp_ma_strasse(): ?string
    {
        return $this->op_ma_strasse;
    }
    /**
     * Set op_ma_strasse value
     * @param string $op_ma_strasse
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_strasse(?string $op_ma_strasse = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_strasse) && !is_string($op_ma_strasse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_strasse, true), gettype($op_ma_strasse)), __LINE__);
        }
        $this->op_ma_strasse = $op_ma_strasse;
        
        return $this;
    }
    /**
     * Get op_ma_strasse2 value
     * @return string|null
     */
    public function getOp_ma_strasse2(): ?string
    {
        return $this->op_ma_strasse2;
    }
    /**
     * Set op_ma_strasse2 value
     * @param string $op_ma_strasse2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_strasse2(?string $op_ma_strasse2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_strasse2) && !is_string($op_ma_strasse2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_strasse2, true), gettype($op_ma_strasse2)), __LINE__);
        }
        $this->op_ma_strasse2 = $op_ma_strasse2;
        
        return $this;
    }
    /**
     * Get op_ma_kz_land value
     * @return string|null
     */
    public function getOp_ma_kz_land(): ?string
    {
        return $this->op_ma_kz_land;
    }
    /**
     * Set op_ma_kz_land value
     * @param string $op_ma_kz_land
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_kz_land(?string $op_ma_kz_land = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_kz_land) && !is_string($op_ma_kz_land)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_kz_land, true), gettype($op_ma_kz_land)), __LINE__);
        }
        $this->op_ma_kz_land = $op_ma_kz_land;
        
        return $this;
    }
    /**
     * Get op_ma_landbez value
     * @return string|null
     */
    public function getOp_ma_landbez(): ?string
    {
        return $this->op_ma_landbez;
    }
    /**
     * Set op_ma_landbez value
     * @param string $op_ma_landbez
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_landbez(?string $op_ma_landbez = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_landbez) && !is_string($op_ma_landbez)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_landbez, true), gettype($op_ma_landbez)), __LINE__);
        }
        $this->op_ma_landbez = $op_ma_landbez;
        
        return $this;
    }
    /**
     * Get op_ma_plz value
     * @return string|null
     */
    public function getOp_ma_plz(): ?string
    {
        return $this->op_ma_plz;
    }
    /**
     * Set op_ma_plz value
     * @param string $op_ma_plz
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_plz(?string $op_ma_plz = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_plz) && !is_string($op_ma_plz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_plz, true), gettype($op_ma_plz)), __LINE__);
        }
        $this->op_ma_plz = $op_ma_plz;
        
        return $this;
    }
    /**
     * Get op_ma_ort value
     * @return string|null
     */
    public function getOp_ma_ort(): ?string
    {
        return $this->op_ma_ort;
    }
    /**
     * Set op_ma_ort value
     * @param string $op_ma_ort
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_ma_ort(?string $op_ma_ort = null): self
    {
        // validation for constraint: string
        if (!is_null($op_ma_ort) && !is_string($op_ma_ort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_ma_ort, true), gettype($op_ma_ort)), __LINE__);
        }
        $this->op_ma_ort = $op_ma_ort;
        
        return $this;
    }
    /**
     * Get op_za_anrede value
     * @return string|null
     */
    public function getOp_za_anrede(): ?string
    {
        return $this->op_za_anrede;
    }
    /**
     * Set op_za_anrede value
     * @param string $op_za_anrede
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_anrede(?string $op_za_anrede = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_anrede) && !is_string($op_za_anrede)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_anrede, true), gettype($op_za_anrede)), __LINE__);
        }
        $this->op_za_anrede = $op_za_anrede;
        
        return $this;
    }
    /**
     * Get op_za_name1 value
     * @return string|null
     */
    public function getOp_za_name1(): ?string
    {
        return $this->op_za_name1;
    }
    /**
     * Set op_za_name1 value
     * @param string $op_za_name1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_name1(?string $op_za_name1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_name1) && !is_string($op_za_name1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_name1, true), gettype($op_za_name1)), __LINE__);
        }
        $this->op_za_name1 = $op_za_name1;
        
        return $this;
    }
    /**
     * Get op_za_name2 value
     * @return string|null
     */
    public function getOp_za_name2(): ?string
    {
        return $this->op_za_name2;
    }
    /**
     * Set op_za_name2 value
     * @param string $op_za_name2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_name2(?string $op_za_name2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_name2) && !is_string($op_za_name2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_name2, true), gettype($op_za_name2)), __LINE__);
        }
        $this->op_za_name2 = $op_za_name2;
        
        return $this;
    }
    /**
     * Get op_za_name3 value
     * @return string|null
     */
    public function getOp_za_name3(): ?string
    {
        return $this->op_za_name3;
    }
    /**
     * Set op_za_name3 value
     * @param string $op_za_name3
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_name3(?string $op_za_name3 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_name3) && !is_string($op_za_name3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_name3, true), gettype($op_za_name3)), __LINE__);
        }
        $this->op_za_name3 = $op_za_name3;
        
        return $this;
    }
    /**
     * Get op_za_emailadr1 value
     * @return string|null
     */
    public function getOp_za_emailadr1(): ?string
    {
        return $this->op_za_emailadr1;
    }
    /**
     * Set op_za_emailadr1 value
     * @param string $op_za_emailadr1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_emailadr1(?string $op_za_emailadr1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_emailadr1) && !is_string($op_za_emailadr1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_emailadr1, true), gettype($op_za_emailadr1)), __LINE__);
        }
        $this->op_za_emailadr1 = $op_za_emailadr1;
        
        return $this;
    }
    /**
     * Get op_za_emailname1 value
     * @return string|null
     */
    public function getOp_za_emailname1(): ?string
    {
        return $this->op_za_emailname1;
    }
    /**
     * Set op_za_emailname1 value
     * @param string $op_za_emailname1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_emailname1(?string $op_za_emailname1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_emailname1) && !is_string($op_za_emailname1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_emailname1, true), gettype($op_za_emailname1)), __LINE__);
        }
        $this->op_za_emailname1 = $op_za_emailname1;
        
        return $this;
    }
    /**
     * Get op_za_emailadr2 value
     * @return string|null
     */
    public function getOp_za_emailadr2(): ?string
    {
        return $this->op_za_emailadr2;
    }
    /**
     * Set op_za_emailadr2 value
     * @param string $op_za_emailadr2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_emailadr2(?string $op_za_emailadr2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_emailadr2) && !is_string($op_za_emailadr2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_emailadr2, true), gettype($op_za_emailadr2)), __LINE__);
        }
        $this->op_za_emailadr2 = $op_za_emailadr2;
        
        return $this;
    }
    /**
     * Get op_za_emailname2 value
     * @return string|null
     */
    public function getOp_za_emailname2(): ?string
    {
        return $this->op_za_emailname2;
    }
    /**
     * Set op_za_emailname2 value
     * @param string $op_za_emailname2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_emailname2(?string $op_za_emailname2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_emailname2) && !is_string($op_za_emailname2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_emailname2, true), gettype($op_za_emailname2)), __LINE__);
        }
        $this->op_za_emailname2 = $op_za_emailname2;
        
        return $this;
    }
    /**
     * Get op_za_www_adresse value
     * @return string|null
     */
    public function getOp_za_www_adresse(): ?string
    {
        return $this->op_za_www_adresse;
    }
    /**
     * Set op_za_www_adresse value
     * @param string $op_za_www_adresse
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_www_adresse(?string $op_za_www_adresse = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_www_adresse) && !is_string($op_za_www_adresse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_www_adresse, true), gettype($op_za_www_adresse)), __LINE__);
        }
        $this->op_za_www_adresse = $op_za_www_adresse;
        
        return $this;
    }
    /**
     * Get op_za_telnr1 value
     * @return string|null
     */
    public function getOp_za_telnr1(): ?string
    {
        return $this->op_za_telnr1;
    }
    /**
     * Set op_za_telnr1 value
     * @param string $op_za_telnr1
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_telnr1(?string $op_za_telnr1 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_telnr1) && !is_string($op_za_telnr1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_telnr1, true), gettype($op_za_telnr1)), __LINE__);
        }
        $this->op_za_telnr1 = $op_za_telnr1;
        
        return $this;
    }
    /**
     * Get op_za_telnr2 value
     * @return string|null
     */
    public function getOp_za_telnr2(): ?string
    {
        return $this->op_za_telnr2;
    }
    /**
     * Set op_za_telnr2 value
     * @param string $op_za_telnr2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_telnr2(?string $op_za_telnr2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_telnr2) && !is_string($op_za_telnr2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_telnr2, true), gettype($op_za_telnr2)), __LINE__);
        }
        $this->op_za_telnr2 = $op_za_telnr2;
        
        return $this;
    }
    /**
     * Get op_za_telefaxnr value
     * @return string|null
     */
    public function getOp_za_telefaxnr(): ?string
    {
        return $this->op_za_telefaxnr;
    }
    /**
     * Set op_za_telefaxnr value
     * @param string $op_za_telefaxnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_telefaxnr(?string $op_za_telefaxnr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_telefaxnr) && !is_string($op_za_telefaxnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_telefaxnr, true), gettype($op_za_telefaxnr)), __LINE__);
        }
        $this->op_za_telefaxnr = $op_za_telefaxnr;
        
        return $this;
    }
    /**
     * Get op_za_telefaxnr2 value
     * @return string|null
     */
    public function getOp_za_telefaxnr2(): ?string
    {
        return $this->op_za_telefaxnr2;
    }
    /**
     * Set op_za_telefaxnr2 value
     * @param string $op_za_telefaxnr2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_telefaxnr2(?string $op_za_telefaxnr2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_telefaxnr2) && !is_string($op_za_telefaxnr2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_telefaxnr2, true), gettype($op_za_telefaxnr2)), __LINE__);
        }
        $this->op_za_telefaxnr2 = $op_za_telefaxnr2;
        
        return $this;
    }
    /**
     * Get op_za_strasse value
     * @return string|null
     */
    public function getOp_za_strasse(): ?string
    {
        return $this->op_za_strasse;
    }
    /**
     * Set op_za_strasse value
     * @param string $op_za_strasse
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_strasse(?string $op_za_strasse = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_strasse) && !is_string($op_za_strasse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_strasse, true), gettype($op_za_strasse)), __LINE__);
        }
        $this->op_za_strasse = $op_za_strasse;
        
        return $this;
    }
    /**
     * Get op_za_strasse2 value
     * @return string|null
     */
    public function getOp_za_strasse2(): ?string
    {
        return $this->op_za_strasse2;
    }
    /**
     * Set op_za_strasse2 value
     * @param string $op_za_strasse2
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_strasse2(?string $op_za_strasse2 = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_strasse2) && !is_string($op_za_strasse2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_strasse2, true), gettype($op_za_strasse2)), __LINE__);
        }
        $this->op_za_strasse2 = $op_za_strasse2;
        
        return $this;
    }
    /**
     * Get op_za_kz_land value
     * @return string|null
     */
    public function getOp_za_kz_land(): ?string
    {
        return $this->op_za_kz_land;
    }
    /**
     * Set op_za_kz_land value
     * @param string $op_za_kz_land
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_kz_land(?string $op_za_kz_land = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_kz_land) && !is_string($op_za_kz_land)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_kz_land, true), gettype($op_za_kz_land)), __LINE__);
        }
        $this->op_za_kz_land = $op_za_kz_land;
        
        return $this;
    }
    /**
     * Get op_za_landbez value
     * @return string|null
     */
    public function getOp_za_landbez(): ?string
    {
        return $this->op_za_landbez;
    }
    /**
     * Set op_za_landbez value
     * @param string $op_za_landbez
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_landbez(?string $op_za_landbez = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_landbez) && !is_string($op_za_landbez)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_landbez, true), gettype($op_za_landbez)), __LINE__);
        }
        $this->op_za_landbez = $op_za_landbez;
        
        return $this;
    }
    /**
     * Get op_za_plz value
     * @return string|null
     */
    public function getOp_za_plz(): ?string
    {
        return $this->op_za_plz;
    }
    /**
     * Set op_za_plz value
     * @param string $op_za_plz
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_plz(?string $op_za_plz = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_plz) && !is_string($op_za_plz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_plz, true), gettype($op_za_plz)), __LINE__);
        }
        $this->op_za_plz = $op_za_plz;
        
        return $this;
    }
    /**
     * Get op_za_ort value
     * @return string|null
     */
    public function getOp_za_ort(): ?string
    {
        return $this->op_za_ort;
    }
    /**
     * Set op_za_ort value
     * @param string $op_za_ort
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_za_ort(?string $op_za_ort = null): self
    {
        // validation for constraint: string
        if (!is_null($op_za_ort) && !is_string($op_za_ort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_za_ort, true), gettype($op_za_ort)), __LINE__);
        }
        $this->op_za_ort = $op_za_ort;
        
        return $this;
    }
    /**
     * Get op_frktonr value
     * @return string|null
     */
    public function getOp_frktonr(): ?string
    {
        return $this->op_frktonr;
    }
    /**
     * Set op_frktonr value
     * @param string $op_frktonr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_frktonr(?string $op_frktonr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_frktonr) && !is_string($op_frktonr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_frktonr, true), gettype($op_frktonr)), __LINE__);
        }
        $this->op_frktonr = $op_frktonr;
        
        return $this;
    }
    /**
     * Get op_zvanschr value
     * @return string|null
     */
    public function getOp_zvanschr(): ?string
    {
        return $this->op_zvanschr;
    }
    /**
     * Set op_zvanschr value
     * @param string $op_zvanschr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_zvanschr(?string $op_zvanschr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_zvanschr) && !is_string($op_zvanschr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_zvanschr, true), gettype($op_zvanschr)), __LINE__);
        }
        $this->op_zvanschr = $op_zvanschr;
        
        return $this;
    }
    /**
     * Get op_bk_kz_land value
     * @return string|null
     */
    public function getOp_bk_kz_land(): ?string
    {
        return $this->op_bk_kz_land;
    }
    /**
     * Set op_bk_kz_land value
     * @param string $op_bk_kz_land
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_bk_kz_land(?string $op_bk_kz_land = null): self
    {
        // validation for constraint: string
        if (!is_null($op_bk_kz_land) && !is_string($op_bk_kz_land)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_bk_kz_land, true), gettype($op_bk_kz_land)), __LINE__);
        }
        $this->op_bk_kz_land = $op_bk_kz_land;
        
        return $this;
    }
    /**
     * Get op_bk_blz value
     * @return string|null
     */
    public function getOp_bk_blz(): ?string
    {
        return $this->op_bk_blz;
    }
    /**
     * Set op_bk_blz value
     * @param string $op_bk_blz
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_bk_blz(?string $op_bk_blz = null): self
    {
        // validation for constraint: string
        if (!is_null($op_bk_blz) && !is_string($op_bk_blz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_bk_blz, true), gettype($op_bk_blz)), __LINE__);
        }
        $this->op_bk_blz = $op_bk_blz;
        
        return $this;
    }
    /**
     * Get op_bk_bankktonr value
     * @return string|null
     */
    public function getOp_bk_bankktonr(): ?string
    {
        return $this->op_bk_bankktonr;
    }
    /**
     * Set op_bk_bankktonr value
     * @param string $op_bk_bankktonr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_bk_bankktonr(?string $op_bk_bankktonr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_bk_bankktonr) && !is_string($op_bk_bankktonr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_bk_bankktonr, true), gettype($op_bk_bankktonr)), __LINE__);
        }
        $this->op_bk_bankktonr = $op_bk_bankktonr;
        
        return $this;
    }
    /**
     * Get op_banknr value
     * @return string|null
     */
    public function getOp_banknr(): ?string
    {
        return $this->op_banknr;
    }
    /**
     * Set op_banknr value
     * @param string $op_banknr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_banknr(?string $op_banknr = null): self
    {
        // validation for constraint: string
        if (!is_null($op_banknr) && !is_string($op_banknr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_banknr, true), gettype($op_banknr)), __LINE__);
        }
        $this->op_banknr = $op_banknr;
        
        return $this;
    }
    /**
     * Get op_notiz value
     * @return string|null
     */
    public function getOp_notiz(): ?string
    {
        return $this->op_notiz;
    }
    /**
     * Set op_notiz value
     * @param string $op_notiz
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setOp_notiz(?string $op_notiz = null): self
    {
        // validation for constraint: string
        if (!is_null($op_notiz) && !is_string($op_notiz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($op_notiz, true), gettype($op_notiz)), __LINE__);
        }
        $this->op_notiz = $op_notiz;
        
        return $this;
    }
    /**
     * Get kr_buch value
     * @return string|null
     */
    public function getKr_buch(): ?string
    {
        return $this->kr_buch;
    }
    /**
     * Set kr_buch value
     * @param string $kr_buch
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_buch(?string $kr_buch = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_buch) && !is_string($kr_buch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_buch, true), gettype($kr_buch)), __LINE__);
        }
        $this->kr_buch = $kr_buch;
        
        return $this;
    }
    /**
     * Get kr_art value
     * @return string|null
     */
    public function getKr_art(): ?string
    {
        return $this->kr_art;
    }
    /**
     * Set kr_art value
     * @param string $kr_art
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_art(?string $kr_art = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_art) && !is_string($kr_art)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_art, true), gettype($kr_art)), __LINE__);
        }
        $this->kr_art = $kr_art;
        
        return $this;
    }
    /**
     * Get kr_kstnr value
     * @return string|null
     */
    public function getKr_kstnr(): ?string
    {
        return $this->kr_kstnr;
    }
    /**
     * Set kr_kstnr value
     * @param string $kr_kstnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_kstnr(?string $kr_kstnr = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_kstnr) && !is_string($kr_kstnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_kstnr, true), gettype($kr_kstnr)), __LINE__);
        }
        $this->kr_kstnr = $kr_kstnr;
        
        return $this;
    }
    /**
     * Get kr_buart value
     * @return string|null
     */
    public function getKr_buart(): ?string
    {
        return $this->kr_buart;
    }
    /**
     * Set kr_buart value
     * @param string $kr_buart
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_buart(?string $kr_buart = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_buart) && !is_string($kr_buart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_buart, true), gettype($kr_buart)), __LINE__);
        }
        $this->kr_buart = $kr_buart;
        
        return $this;
    }
    /**
     * Get kr_kstnr_zd value
     * @return string|null
     */
    public function getKr_kstnr_zd(): ?string
    {
        return $this->kr_kstnr_zd;
    }
    /**
     * Set kr_kstnr_zd value
     * @param string $kr_kstnr_zd
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_kstnr_zd(?string $kr_kstnr_zd = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_kstnr_zd) && !is_string($kr_kstnr_zd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_kstnr_zd, true), gettype($kr_kstnr_zd)), __LINE__);
        }
        $this->kr_kstnr_zd = $kr_kstnr_zd;
        
        return $this;
    }
    /**
     * Get kr_koanr value
     * @return string|null
     */
    public function getKr_koanr(): ?string
    {
        return $this->kr_koanr;
    }
    /**
     * Set kr_koanr value
     * @param string $kr_koanr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_koanr(?string $kr_koanr = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_koanr) && !is_string($kr_koanr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_koanr, true), gettype($kr_koanr)), __LINE__);
        }
        $this->kr_koanr = $kr_koanr;
        
        return $this;
    }
    /**
     * Get kr_koanr_extern value
     * @return string|null
     */
    public function getKr_koanr_extern(): ?string
    {
        return $this->kr_koanr_extern;
    }
    /**
     * Set kr_koanr_extern value
     * @param string $kr_koanr_extern
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_koanr_extern(?string $kr_koanr_extern = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_koanr_extern) && !is_string($kr_koanr_extern)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_koanr_extern, true), gettype($kr_koanr_extern)), __LINE__);
        }
        $this->kr_koanr_extern = $kr_koanr_extern;
        
        return $this;
    }
    /**
     * Get kr_perdat value
     * @return string|null
     */
    public function getKr_perdat(): ?string
    {
        return $this->kr_perdat;
    }
    /**
     * Set kr_perdat value
     * @param string $kr_perdat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_perdat(?string $kr_perdat = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_perdat) && !is_string($kr_perdat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_perdat, true), gettype($kr_perdat)), __LINE__);
        }
        $this->kr_perdat = $kr_perdat;
        
        return $this;
    }
    /**
     * Get kr_fwbetr value
     * @return string|null
     */
    public function getKr_fwbetr(): ?string
    {
        return $this->kr_fwbetr;
    }
    /**
     * Set kr_fwbetr value
     * @param string $kr_fwbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_fwbetr(?string $kr_fwbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_fwbetr) && !is_string($kr_fwbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_fwbetr, true), gettype($kr_fwbetr)), __LINE__);
        }
        $this->kr_fwbetr = $kr_fwbetr;
        
        return $this;
    }
    /**
     * Get kr_betr value
     * @return string|null
     */
    public function getKr_betr(): ?string
    {
        return $this->kr_betr;
    }
    /**
     * Set kr_betr value
     * @param string $kr_betr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_betr(?string $kr_betr = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_betr) && !is_string($kr_betr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_betr, true), gettype($kr_betr)), __LINE__);
        }
        $this->kr_betr = $kr_betr;
        
        return $this;
    }
    /**
     * Get kr_menge value
     * @return string|null
     */
    public function getKr_menge(): ?string
    {
        return $this->kr_menge;
    }
    /**
     * Set kr_menge value
     * @param string $kr_menge
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_menge(?string $kr_menge = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_menge) && !is_string($kr_menge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_menge, true), gettype($kr_menge)), __LINE__);
        }
        $this->kr_menge = $kr_menge;
        
        return $this;
    }
    /**
     * Get kr_text value
     * @return string|null
     */
    public function getKr_text(): ?string
    {
        return $this->kr_text;
    }
    /**
     * Set kr_text value
     * @param string $kr_text
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setKr_text(?string $kr_text = null): self
    {
        // validation for constraint: string
        if (!is_null($kr_text) && !is_string($kr_text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kr_text, true), gettype($kr_text)), __LINE__);
        }
        $this->kr_text = $kr_text;
        
        return $this;
    }
    /**
     * Get ev_nr value
     * @return string|null
     */
    public function getEv_nr(): ?string
    {
        return $this->ev_nr;
    }
    /**
     * Set ev_nr value
     * @param string $ev_nr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEv_nr(?string $ev_nr = null): self
    {
        // validation for constraint: string
        if (!is_null($ev_nr) && !is_string($ev_nr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ev_nr, true), gettype($ev_nr)), __LINE__);
        }
        $this->ev_nr = $ev_nr;
        
        return $this;
    }
    /**
     * Get ev_faedat value
     * @return string|null
     */
    public function getEv_faedat(): ?string
    {
        return $this->ev_faedat;
    }
    /**
     * Set ev_faedat value
     * @param string $ev_faedat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEv_faedat(?string $ev_faedat = null): self
    {
        // validation for constraint: string
        if (!is_null($ev_faedat) && !is_string($ev_faedat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ev_faedat, true), gettype($ev_faedat)), __LINE__);
        }
        $this->ev_faedat = $ev_faedat;
        
        return $this;
    }
    /**
     * Get ev_prol value
     * @return string|null
     */
    public function getEv_prol(): ?string
    {
        return $this->ev_prol;
    }
    /**
     * Set ev_prol value
     * @param string $ev_prol
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEv_prol(?string $ev_prol = null): self
    {
        // validation for constraint: string
        if (!is_null($ev_prol) && !is_string($ev_prol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ev_prol, true), gettype($ev_prol)), __LINE__);
        }
        $this->ev_prol = $ev_prol;
        
        return $this;
    }
    /**
     * Get ev_text value
     * @return string|null
     */
    public function getEv_text(): ?string
    {
        return $this->ev_text;
    }
    /**
     * Set ev_text value
     * @param string $ev_text
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEv_text(?string $ev_text = null): self
    {
        // validation for constraint: string
        if (!is_null($ev_text) && !is_string($ev_text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ev_text, true), gettype($ev_text)), __LINE__);
        }
        $this->ev_text = $ev_text;
        
        return $this;
    }
    /**
     * Get ev_aussteller value
     * @return string|null
     */
    public function getEv_aussteller(): ?string
    {
        return $this->ev_aussteller;
    }
    /**
     * Set ev_aussteller value
     * @param string $ev_aussteller
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEv_aussteller(?string $ev_aussteller = null): self
    {
        // validation for constraint: string
        if (!is_null($ev_aussteller) && !is_string($ev_aussteller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ev_aussteller, true), gettype($ev_aussteller)), __LINE__);
        }
        $this->ev_aussteller = $ev_aussteller;
        
        return $this;
    }
    /**
     * Get ev_bezogener value
     * @return string|null
     */
    public function getEv_bezogener(): ?string
    {
        return $this->ev_bezogener;
    }
    /**
     * Set ev_bezogener value
     * @param string $ev_bezogener
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEv_bezogener(?string $ev_bezogener = null): self
    {
        // validation for constraint: string
        if (!is_null($ev_bezogener) && !is_string($ev_bezogener)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ev_bezogener, true), gettype($ev_bezogener)), __LINE__);
        }
        $this->ev_bezogener = $ev_bezogener;
        
        return $this;
    }
    /**
     * Get ev_zahlstelle value
     * @return string|null
     */
    public function getEv_zahlstelle(): ?string
    {
        return $this->ev_zahlstelle;
    }
    /**
     * Set ev_zahlstelle value
     * @param string $ev_zahlstelle
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEv_zahlstelle(?string $ev_zahlstelle = null): self
    {
        // validation for constraint: string
        if (!is_null($ev_zahlstelle) && !is_string($ev_zahlstelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ev_zahlstelle, true), gettype($ev_zahlstelle)), __LINE__);
        }
        $this->ev_zahlstelle = $ev_zahlstelle;
        
        return $this;
    }
    /**
     * Get ts_dhrlbetr value
     * @return string|null
     */
    public function getTs_dhrlbetr(): ?string
    {
        return $this->ts_dhrlbetr;
    }
    /**
     * Set ts_dhrlbetr value
     * @param string $ts_dhrlbetr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setTs_dhrlbetr(?string $ts_dhrlbetr = null): self
    {
        // validation for constraint: string
        if (!is_null($ts_dhrlbetr) && !is_string($ts_dhrlbetr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ts_dhrlbetr, true), gettype($ts_dhrlbetr)), __LINE__);
        }
        $this->ts_dhrlbetr = $ts_dhrlbetr;
        
        return $this;
    }
    /**
     * Get ts_dhrlfaedat value
     * @return string|null
     */
    public function getTs_dhrlfaedat(): ?string
    {
        return $this->ts_dhrlfaedat;
    }
    /**
     * Set ts_dhrlfaedat value
     * @param string $ts_dhrlfaedat
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setTs_dhrlfaedat(?string $ts_dhrlfaedat = null): self
    {
        // validation for constraint: string
        if (!is_null($ts_dhrlfaedat) && !is_string($ts_dhrlfaedat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ts_dhrlfaedat, true), gettype($ts_dhrlfaedat)), __LINE__);
        }
        $this->ts_dhrlfaedat = $ts_dhrlfaedat;
        
        return $this;
    }
    /**
     * Get ts_kz_drl_ber value
     * @return string|null
     */
    public function getTs_kz_drl_ber(): ?string
    {
        return $this->ts_kz_drl_ber;
    }
    /**
     * Set ts_kz_drl_ber value
     * @param string $ts_kz_drl_ber
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setTs_kz_drl_ber(?string $ts_kz_drl_ber = null): self
    {
        // validation for constraint: string
        if (!is_null($ts_kz_drl_ber) && !is_string($ts_kz_drl_ber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ts_kz_drl_ber, true), gettype($ts_kz_drl_ber)), __LINE__);
        }
        $this->ts_kz_drl_ber = $ts_kz_drl_ber;
        
        return $this;
    }
    /**
     * Get eust_ktonr value
     * @return string|null
     */
    public function getEust_ktonr(): ?string
    {
        return $this->eust_ktonr;
    }
    /**
     * Set eust_ktonr value
     * @param string $eust_ktonr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEust_ktonr(?string $eust_ktonr = null): self
    {
        // validation for constraint: string
        if (!is_null($eust_ktonr) && !is_string($eust_ktonr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eust_ktonr, true), gettype($eust_ktonr)), __LINE__);
        }
        $this->eust_ktonr = $eust_ktonr;
        
        return $this;
    }
    /**
     * Get eust_opnr value
     * @return string|null
     */
    public function getEust_opnr(): ?string
    {
        return $this->eust_opnr;
    }
    /**
     * Set eust_opnr value
     * @param string $eust_opnr
     * @return \Pggns\MidocoApi\Order\StructType\JETFIBUBelegKontierung
     */
    public function setEust_opnr(?string $eust_opnr = null): self
    {
        // validation for constraint: string
        if (!is_null($eust_opnr) && !is_string($eust_opnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eust_opnr, true), gettype($eust_opnr)), __LINE__);
        }
        $this->eust_opnr = $eust_opnr;
        
        return $this;
    }
}

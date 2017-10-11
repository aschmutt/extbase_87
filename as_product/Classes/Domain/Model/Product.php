<?php
namespace Schmutt\AsProduct\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
    * @var int
     */
    protected $artikelnummer = 0;

    /**
    * @var string
     */
    protected $serie = "";

    /**
     * @var string
     */
    protected $bezeichnung = "";

    /**
     * @var int
     */
    protected $laenge = 0;

    /**
     * @var int
     */
    protected $breite = 0;

    /**
     * @var int
     */
    protected $hoehe = 0;

    /**
     * @return int
     */
    public function getArtikelnummer(): int
    {
        return $this->artikelnummer;
    }

    /**
     * @param int $artikelnummer
     */
    public function setArtikelnummer(int $artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;
    }

    /**
     * @return string
     */
    public function getSerie(): string
    {
        return $this->serie;
    }

    /**
     * @param string $serie
     */
    public function setSerie(string $serie)
    {
        $this->serie = $serie;
    }

    /**
     * @return string
     */
    public function getBezeichnung(): string
    {
        return $this->bezeichnung;
    }

    /**
     * @param string $bezeichnung
     */
    public function setBezeichnung(string $bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * @return int
     */
    public function getLaenge(): int
    {
        return $this->laenge;
    }

    /**
     * @param int $laenge
     */
    public function setLaenge(int $laenge)
    {
        $this->laenge = $laenge;
    }

    /**
     * @return int
     */
    public function getBreite(): int
    {
        return $this->breite;
    }

    /**
     * @param int $breite
     */
    public function setBreite(int $breite)
    {
        $this->breite = $breite;
    }

    /**
     * @return int
     */
    public function getHoehe(): int
    {
        return $this->hoehe;
    }

    /**
     * @param int $hoehe
     */
    public function setHoehe(int $hoehe)
    {
        $this->hoehe = $hoehe;
    }





}
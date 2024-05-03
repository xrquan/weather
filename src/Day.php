<?php

namespace Xrquan\Weather;

class Day
{
    private string $tag = '';

    public function getTag(): string
    {
        return $this->tag;
    }

    private function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    function __construct($tag, $beschreibung)
    {

        $this->setTag($tag);
        $this->setBeschreibung($beschreibung);
    }

    private string $beschreibung = '';

    /**
     * @return string
     */
    public function getBeschreibung(): string
    {
        return $this->beschreibung;
    }

    /**
     * @param string $beschreibung
     */
    public function setBeschreibung(string $beschreibung): void
    {
        $this->beschreibung = $beschreibung;
    }






}
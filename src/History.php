<?php

namespace Xrquan\Weather;


class History
{

    private $tage = [];

    public function addTag(Day $tag) : void {
        $this->tage[] = $tag;
    }

    public function getTage() {
        return $this->tage;
    }

    public function getDescriptionByDate($date)
    {
        foreach ($this->tage as $tag) {
            if ($tag->getTag() === $date) {
                return $tag->getBeschreibung();
            }
        }
        return null;
    }


}
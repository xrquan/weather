<?php

namespace Xrquan\Weather;

class History
{

    private $tage = [];

    public function addTag($tag) {
        $this->tage[] = $tag;
    }

    public function getTage() {
        return $this->tage;
    }


}
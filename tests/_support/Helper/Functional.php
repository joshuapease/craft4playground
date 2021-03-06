<?php

namespace Helper;

use Codeception\Module;

/**
 * Class Functional
 *
 * Here you can define custom actions.
 * All public methods declared in helper class will be available in $I
 *
 * @since 3.2.0
 */
class Functional extends Module
{
    public function postPage(string $page, array $params)
    {
        $this->getModule('\craft\test\Craft')->_loadPage('POST', $page, $params);
    }
}

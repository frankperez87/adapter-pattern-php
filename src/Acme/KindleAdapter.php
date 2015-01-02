<?php

namespace Acme;

/**
 * Class KindleAdapter
 * @package Acme
 */
class KindleAdapter implements BookInterface
{
    /**
     * @var Kindle
     */
    protected $kindle;

    /**
     * @param Kindle $kindle
     */
    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    /**
     * @return string
     */
    public function open()
    {
        return $this->kindle->turnOn();
    }

    /**
     * @return string
     */
    public function turnPage()
    {
        return $this->kindle->pressNextButton();
    }
}

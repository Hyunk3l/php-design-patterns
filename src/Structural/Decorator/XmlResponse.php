<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

/**
 * Class XmlResponse
 * @package Hyunk3l\PhpDesignPatterns\Structural\Decorator
 */
class XmlResponse extends Decorator
{
    /**
     * Transform output to json.
     *
     * @return string
     */
    public function render()
    {
        $output = $this->wrapper->render();
        $xml    = new \SimpleXMLElement("<root />");
        foreach ($output as $row_key => $row_value) {
            $xml->addChild($row_key, $row_value);
        }
        return $xml->asXml();
    }
}

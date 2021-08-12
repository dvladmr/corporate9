<?php

namespace App;

class Service
{
    public $name;
    public $image;
    public $description;

    /**
     * @param string $name
     * @param string $image
     * @param string $description
     */
    public function __construct($name, $image, $description)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    /**
     * Get all services
     */
    public static function all()
    {
        return [
            //
        ];
    }
}

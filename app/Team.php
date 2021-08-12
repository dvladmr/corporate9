<?php

namespace App;

class Team
{
    public $name;
    public $image;
    public $job;

    /**
     * @param string $name
     * @param string $image
     * @param string $job
     */
    public function __construct($name, $image, $job)
    {
        $this->name = $name;
        $this->image = $image;
        $this->job = $job;
    }

    /**
     * Get all team members
     */
    public static function all()
    {
        return [
            new self('test', '/images/team-1.jpg', 'CEO'),
        ];
    }
}

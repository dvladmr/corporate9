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
            new self('Umid Abdusattorov', '/images/team-member-1.jpg', 'CEO'),
            new self('Sayidazim Mahmudov', '/images/team-member-2.jpg', 'Backend developer'),
            new self('Shavkat Homidov', '/images/team-member-3.jpg', 'Project architecture'),
            new self('Madina Kaxxarova', '/images/team-member-4-2.jpg', 'Product owner'),
            new self('Bekzod Erkinov', '/images/team-member-5.jpg', 'Backend Developer'),
            new self('Azimjon Salimov', '/images/team-member-6.jpg', 'Android developer'),
            new self('Kamila Nazarova', '/images/team-member-7.jpg', 'Android developer'),
        ];
    }
}

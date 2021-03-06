<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity()
 * @ORM\Table("foo")
 */
class Foo
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Something else
     *
     * @ORM\Column
     */
    private $bar = '';

    public function getId()
    {
        return $this->id;
    }

    public function getBar() : string
    {
        return $this->bar;
    }

    public function setBar(string $bar)
    {
        $this->bar = $bar;
    }
}

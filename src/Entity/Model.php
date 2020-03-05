<?php

namespace App\Entity;
use Acme\TaskBundle\Form\DataTransformer\IssueToNumberTransformer;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ModelRepository")
 */

class Model
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $id;

    public function getId(): ?int
    {

        return $this->id;
    }

}

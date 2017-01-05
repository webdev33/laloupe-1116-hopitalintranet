<?php

namespace HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galerie
 */
class Galerie
{
    public $galerie1;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../web/' . $this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->galerie1 ? null : $this->getUploadDir() . '/' . $this->galerie1;

    }

    public function getAbsolutePath()
    {
        return null === $this->galerie1 ? null : $this->getUploadRootDir() . '/' . $this->galerie1;
    }


    /**code géréré
    /**
     * @var int
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}

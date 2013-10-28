<?php

namespace Checkpt\Bundle\AccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domain
 */
class Domain
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fqdn;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fqdn
     *
     * @param string $fqdn
     * @return Domain
     */
    public function setFqdn($fqdn)
    {
        $this->fqdn = $fqdn;
    
        return $this;
    }

    /**
     * Get fqdn
     *
     * @return string 
     */
    public function getFqdn()
    {
        return $this->fqdn;
    }
}

<?php

namespace Checkpt\Bundle\AccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Path
 */
class Path
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \stdClass
     */
    private $domain;

    /**
     * @var string
     */
    private $pattern;

    /**
     * @var boolean
     */
    private $pcre;


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
     * Set domain
     *
     * @param \stdClass $domain
     * @return Path
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    
        return $this;
    }

    /**
     * Get domain
     *
     * @return \stdClass 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set pattern
     *
     * @param string $pattern
     * @return Path
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    
        return $this;
    }

    /**
     * Get pattern
     *
     * @return string 
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Set isPcre
     *
     * @param boolean $isPcre
     * @return Path
     */
    public function setPcre($isPcre)
    {
        $this->pcre = $isPcre;
    
        return $this;
    }

    /**
     * Get isPcre
     *
     * @return boolean 
     */
    public function getPcre()
    {
        return $this->pcre;
    }
}

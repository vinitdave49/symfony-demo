<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemplateDetails
 *
 * @ORM\Table(name="template_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemplateDetailsRepository")
 */
class TemplateDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="object_type", type="string", length=255)
     */
    private $objectType;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_name", type="string", length=255)
     */
    private $attributeName;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_type", type="integer")
     */
    private $attributeType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     *
     * @return TemplateDetails
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get objectType
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set attributeName
     *
     * @param string $attributeName
     *
     * @return TemplateDetails
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * Get attributeName
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * Set attributeType
     *
     * @param integer $attributeType
     *
     * @return TemplateDetails
     */
    public function setAttributeType($attributeType)
    {
        $this->attributeType = $attributeType;

        return $this;
    }

    /**
     * Get attributeType
     *
     * @return int
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }
}

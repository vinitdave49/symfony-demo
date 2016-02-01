<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="projectname", type="string", length=255, unique=true)
     */
    private $projectname;

    /**
     * @var string
     *
     * @ORM\Column(name="workspaceid", type="string", length=255, unique=true)
     */
    private $workspaceid;


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
     * Set projectname
     *
     * @param string $projectname
     *
     * @return Project
     */
    public function setProjectname($projectname)
    {
        $this->projectname = $projectname;

        return $this;
    }

    /**
     * Get projectname
     *
     * @return string
     */
    public function getProjectname()
    {
        return $this->projectname;
    }

    /**
     * Set workspaceid
     *
     * @param string $workspaceid
     *
     * @return Project
     */
    public function setWorkspaceid($workspaceid)
    {
        $this->workspaceid = $workspaceid;

        return $this;
    }

    /**
     * Get workspaceid
     *
     * @return string
     */
    public function getWorkspaceid()
    {
        return $this->workspaceid;
    }
}

<?php

namespace Doctrine\Website\Projects;

class ProjectVersion
{
    /** @var string */
    private $name;

    /** @var string */
    private $branchName;

    /** @var string */
    private $slug;

    /** @var boolean */
    private $current = false;

    /** @var boolean */
    private $maintained = true;

    public function __construct(array $version)
    {
        $this->name = (string) ($version['name'] ?? '');
        $this->branchName = (string) ($version['branchName'] ?? '');
        $this->slug = (string) ($version['slug'] ?? '');
        $this->current = (bool) ($version['current'] ?? false);
        $this->maintained = (bool) ($version['maintained'] ?? true);
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getBranchName() : string
    {
        return $this->branchName;
    }

    public function getSlug() : string
    {
        return $this->slug;
    }

    public function isCurrent() : bool
    {
        return $this->current;
    }

    public function isMaintained() : bool
    {
        return $this->maintained;
    }
}

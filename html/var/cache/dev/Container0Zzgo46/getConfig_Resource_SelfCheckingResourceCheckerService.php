<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'config.resource.self_checking_resource_checker' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Resource/SelfCheckingResourceChecker.php';

return $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();

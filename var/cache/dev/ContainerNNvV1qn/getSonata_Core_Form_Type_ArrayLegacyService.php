<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.form.type.array_legacy' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\ImmutableArrayType.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\ImmutableArrayType.php';

return $this->services['sonata.core.form.type.array_legacy'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureValueRepository'] = new \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psdh_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Validate\\FeatureValueValidator'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Validate\\FeatureValueValidator'] = new \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator())));

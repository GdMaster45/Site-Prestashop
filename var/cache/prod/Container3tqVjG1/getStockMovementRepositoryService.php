<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockMovementRepository' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockMovementRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockMovementRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psdh_');

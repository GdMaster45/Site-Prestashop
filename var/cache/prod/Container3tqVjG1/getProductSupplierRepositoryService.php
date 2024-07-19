<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductSupplierRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psdh_', new \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductSupplierValidator(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Supplier\\Repository\\SupplierRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Supplier\\Repository\\SupplierRepository'] = new \PrestaShop\PrestaShop\Adapter\Supplier\Repository\SupplierRepository())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\Repository\\CurrencyRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\Repository\\CurrencyRepository'] = new \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository()))));

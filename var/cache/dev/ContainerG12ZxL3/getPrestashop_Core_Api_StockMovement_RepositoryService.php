<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.api.stock_movement.repository' shared service.

return $this->services['prestashop.core.api.stock_movement.repository'] = new \PrestaShopBundle\Entity\Repository\StockMovementRepository($this, ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\ImageManager'] ?? $this->load('getImageManagerService.php')), 'psdh_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguage()->date_format_full);

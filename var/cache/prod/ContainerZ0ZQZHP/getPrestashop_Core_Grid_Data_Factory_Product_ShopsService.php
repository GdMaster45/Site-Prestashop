<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data.factory.product.shops' shared service.

return $this->services['prestashop.core.grid.data.factory.product.shops'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(new \PrestaShop\PrestaShop\Core\Grid\Query\ProductShopsQueryBuilder(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'psdh_', ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] ?? ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id, ($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] ?? ($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicator())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopGroupRepository'] ?? $this->load('getShopGroupRepositoryService.php')), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.core.grid.query.doctrine_query_parser'] ?? ($this->services['prestashop.core.grid.query.doctrine_query_parser'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser())), 'product');

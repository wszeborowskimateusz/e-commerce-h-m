<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.module.prestatrust.checker' shared service.

return $this->services['prestashop.adapter.module.prestatrust.checker'] = new \PrestaShop\PrestaShop\Adapter\Module\PrestaTrust\PrestaTrustChecker(${($_ = isset($this->services['doctrine.cache.provider']) ? $this->services['doctrine.cache.provider'] : $this->services['doctrine.cache.provider'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/doctrine'))) && false ?: '_'}, ${($_ = isset($this->services['prestashop.addons.client_api']) ? $this->services['prestashop.addons.client_api'] : $this->load('getPrestashop_Addons_ClientApiService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

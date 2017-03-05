<?php
/**
 * Copyright © 2017 Magento Chile. All rights reserved.
 * @link	https://www.magentochile.cl/
 * @author	Magento Chile ®. <soporte@magentochile.cl>
 */

use \Magento\Framework\Component\ComponentRegistrar;

\Magento\Framework\Component\ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Magentochile_Webpay',
    __DIR__
);

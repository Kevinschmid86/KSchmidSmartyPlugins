<?php
/**
 * Created by PhpStorm.
 * User: kevin.schmid
 * Date: 06.11.2016
 * Time: 12:03
 */


namespace KSchmidSmartyPlugins;

use Enlight_Event_EventArgs;
use Shopware\Components\Plugin;

class KSchmidSmartyPlugins extends Plugin
{

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure' => 'onFrontendPostDispatchSecure'
        ];
    }

    /**
     * @param Enlight_Event_EventArgs $arguments
     */
    public function onFrontendPostDispatchSecure(Enlight_Event_EventArgs $arguments)
    {
        $template = $this->container->get('Template');
        $template->addPluginsDir($this->getPath() . '/smarty/plugins/');
    }

}
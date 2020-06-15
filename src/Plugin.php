<?php
namespace Cotm\EmailTemplates;

use craft\events\RegisterTemplateRootsEvent;
use craft\web\View;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        parent::init();

        Event::on(
            View::class,
            View::EVENT_REGISTER_SITE_TEMPLATE_ROOTS,
            function(RegisterTemplateRootsEvent $event) {
                $event->roots['email:templates:build'] = __DIR__ . '/../build_production/twig';
                $event->roots['email:templates'] = __DIR__ . '/../src/templates';
            }
        );
    }
}
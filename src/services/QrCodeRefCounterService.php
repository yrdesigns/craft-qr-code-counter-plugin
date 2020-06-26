<?php
/**
 * QR Code ref counter plugin for Craft CMS 3.x
 *
 * Connect your QR code to your Homepage with your Craft User to count how many calls  are made.
 *
 * @link      https://yr-designs.ch
 * @copyright Copyright (c) 2020 YR Designs
 */

namespace yrdesignscraftqrcodecounter\qrcoderefcounter\services;

use yii\web\NotFoundHttpException;
use yrdesignscraftqrcodecounter\qrcoderefcounter\QrCodeRefCounter;

use Craft;
use craft\base\Component;

/**
 * QrCodeRefCounterService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    YR Designs
 * @package   QrCodeRefCounter
 * @since     1.0.0
 */
class QrCodeRefCounterService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     QrCodeRefCounter::$plugin->qrCodeRefCounterService->exampleService()
     *
     * @return mixed | void
     */
    public function save($context)
    {
        $plugin = QrCodeRefCounter::getInstance();
        if ($plugin === null) {
            return;
        }

        $settings = [
            'Diego' => $plugin->settings->Diego,
            'Fabian' => $plugin->settings->Fabian,
            'Peter' => $plugin->settings->Peter,
            'Unspezifisch' => $plugin->settings->Unspezifisch,
            'Alle' => $plugin->settings->Alle,
        ];

        $saveSettings = ['Alle' => $settings['Alle'] + 1, $context => $settings[$context] + 1];

        Craft::$app->getPlugins()->savePluginSettings($plugin, $saveSettings);
    }
}

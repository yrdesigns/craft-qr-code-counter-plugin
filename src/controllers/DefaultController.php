<?php
/**
 * QR Code ref counter plugin for Craft CMS 3.x
 *
 * Connect your QR code to your Homepage with your Craft User to count how many calls  are made.
 *
 * @link      https://yr-designs.ch
 * @copyright Copyright (c) 2020 YR Designs
 */

namespace yrdesignscraftqrcodecounter\qrcoderefcounter\controllers;

use craft\helpers\UrlHelper;
use yrdesignscraftqrcodecounter\qrcoderefcounter\QrCodeRefCounter;

use Craft;
use craft\web\Controller;

/**
 * Default Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    YR Designs
 * @package   QrCodeRefCounter
 * @since     1.0.0
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/qr-code-ref-counter/default
     */
    public function actionIndex() {
        $params = Craft::$app->request->getQueryParams();
        $context = '';
        $unspecific = true;

        if (isset($params['pl'])) {
            $context = 'Peter';
            $unspecific = false;
        }

        if (isset($params['fl'])) {
            $context = 'Fabian';
            $unspecific = false;
        }

        if (isset($params['dl'])) {
            $context = 'Diego';
            $unspecific = false;
        }

        if ($unspecific) {
            $context = 'Unspezifisch';
        }

        QrCodeRefCounter::getInstance()->qrCodeRefCounterService->save($context);

        $plugin = QrCodeRefCounter::getInstance();
        $redirect = 'https://luescher-immo.ch';
        if ($plugin !== null) {
            $redirect = $plugin->settings->redirect;
        }
        $this->redirect($redirect);
    }
}

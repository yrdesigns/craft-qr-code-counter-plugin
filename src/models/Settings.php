<?php
/**
 * QR Code ref counter plugin for Craft CMS 3.x
 *
 * Connect your QR code to your Homepage with your Craft User to count how many calls  are made.
 *
 * @link      https://yr-designs.ch
 * @copyright Copyright (c) 2020 YR Designs
 */

namespace yrdesignscraftqrcodecounter\qrcoderefcounter\models;


use Craft;
use craft\base\Model;
use craft\helpers\UrlHelper;

/**
 * QrCodeRefCounter Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    YR Designs
 * @package   QrCodeRefCounter
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var int
     */
    public $Alle = 0;

    /**
     * Some field model attribute
     *
     * @var int
     */
    public $Unspezifisch = 0;

    /**
     * Some field model attribute
     *
     * @var int
     */
    public $Diego = 0;

    /**
     * Some field model attribute
     *
     * @var int
     */
    public $Fabian = 0;

    /**
     * Some field model attribute
     *
     * @var int
     */
    public $Peter = 0;

    /**
     * Some field model attribute
     *
     * @var int
     */
    public $redirect = 'https://luescher-immo.ch';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['Alle', 'Unspezifisch', 'Peter', 'Fabian', 'Diego'], 'number'],
            [['Alle', 'Unspezifisch', 'Peter', 'Fabian', 'Diego'], 'required'],
            [['Alle', 'Unspezifisch', 'Peter', 'Fabian', 'Diego'], 'default', 'value' => 0],
            [['redirect'], 'default', 'value' => 'https://luescher-immo.ch'],
        ];
    }
}

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

use yrdesignscraftqrcodecounter\qrcoderefcounter\QrCodeRefCounter;

use Craft;
use craft\base\Model;

/**
 * QrCodeRefCounterModel Model
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
class QrCodeRefCounterModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

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
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}

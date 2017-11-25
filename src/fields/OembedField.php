<?php
/**
 * oEmbed plugin for Craft CMS 3.x
 *
 * A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.
 *
 * @link      https://hutsix.com.au
 * @copyright Copyright (c) 2017 reganlawton
 */

namespace hut6\oembed\fields;

use Craft;
use craft\base\ElementInterface;
use craft\base\Field;
use yii\db\Schema;
use hut6\oembed\models\OembedModel;

/**
 * OembedField Field
 *
 * @author    reganlawton
 * @package   Oembed
 * @since     2.0.0
 */
class OembedField extends Field
{
    // Public Properties
    // =========================================================================

    /**
     * Some attribute
     *
     * @var string
     */
    public $url = '';

    // Static Methods
    // =========================================================================

    /**
     * @return string The display name of this class.
     */
    public static function displayName(): string
    {
        return Craft::t('oembed', 'oEmbed');
    }

    // Public Methods
    // =========================================================================

    /**
     * @return array
     */
    public function rules()
    {
        $rules = parent::rules();
        return $rules;
    }

    /**
     * @return string The column type. [[\yii\db\QueryBuilder::getColumnType()]] will be called
     *                to convert the give column type to the physical one. For example, `string` will be converted
     *                as `varchar(255)` and `string(100)` becomes `varchar(100)`. `not null` will automatically be
     *                appended as well.
     * @see \yii\db\QueryBuilder::getColumnType()
     */
    public function getContentColumnType(): string
    {
        return Schema::TYPE_TEXT;
    }

    /**
     * @param mixed                 $value   The raw field value
     * @param ElementInterface|null $element The element the field is associated with, if there is one
     *
     * @return mixed The prepared field value
     */
    public function normalizeValue($value, ElementInterface $element = null)
    {
        return (new OEmbedModel($value));
    }

    /**
     * Modifies an element query.
     *
     * @param ElementInterface $query The element query
     * @param mixed            $value The value that was set on this field’s corresponding [[ElementCriteriaModel]]
     *                                param, if any.
     * @return null|false `false` in the event that the method is sure that no elements are going to be found.
     */
    public function serializeValue($value, ElementInterface $element = null)
    {
        return parent::serializeValue($value, $element);
    }

    /**
     * @return string|null
     */
    public function getSettingsHtml()
    {
        return null;
    }

    /**
     * @param ElementInterface|null $element The element the field is associated with, if there is one
     * @param mixed                 $value   The field’s value. This will either be the [[normalizeValue() normalized
     *                                       value]], raw POST data (i.e. if there was a validation error), or null
     * @return string The input HTML.
     */
    public function getInputHtml($value, ElementInterface $element = null): string
    {
        return '<input name="'.$this->handle.'" value="'.$value.'" />';
    }
}

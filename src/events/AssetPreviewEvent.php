<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 * @since 3.4.0
 */

namespace craft\events;

use craft\base\AssetPreviewInterface;
use craft\elements\Asset;
use yii\base\Event;

/**
 * Asset preview event class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.3.0
 */
class AssetPreviewEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var Asset|null The asset model associated with the event.
     */
    public $asset;

    /**
     * @var AssetPreviewInterface $previewHandler
     */
    public $previewHandler;
}

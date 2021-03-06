<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Assets\Asset\Css;

use Phalcon\Assets\Asset\Css;
use Phalcon\Test\Fixtures\Traits\AssetsTrait;
use UnitTester;

/**
 * Class GetAttributesCest
 */
class GetAttributesCest
{
    use AssetsTrait;

    /**
     * Tests Phalcon\Assets\Asset :: getAttributes() - css local
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetCssGetAttributesLocal(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - getAttributes() - css local');
        $asset = new Css('css/docs.css', true, false, ['data-key' => 'phalcon']);

        $expected = ['data-key' => 'phalcon'];
        $this->assetGetAttributes($I, $asset, $expected);
    }

    /**
     * Tests Phalcon\Assets\Asset :: getAttributes() - css remote
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetCssGetAttributesRemote(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - getAttributes() - css remote');
        $asset = new Css('https://phalcon.ld/css/docs.css', false, false, ['data-key' => 'phalcon']);

        $expected = ['data-key' => 'phalcon'];
        $this->assetGetAttributes($I, $asset, $expected);
    }
}

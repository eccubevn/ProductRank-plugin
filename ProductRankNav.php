<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ProductRank;

use Eccube\Common\EccubeNav;

class ProductRankNav implements EccubeNav
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getNav()
    {
        return [
            'product' => [
                'id' => 'product_rank',
                'name' => 'product_rank.admin.move_rank.sub_title',
                'url' => 'admin_product_product_rank',
            ],
        ];
    }
}

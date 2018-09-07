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

namespace Plugin\ProductRank\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Eccube\Entity\ProductCategory")
 */
trait ProductCategoryTrait
{
    /**
     * @ORM\Column(name="product_rank_sort_no", type="integer", nullable=true, options={"default": 0})
     */
    protected $product_rank_sort_no = 0;

    /**
     * Get product_rank_sort_no
     *
     * @return integer
     */
    public function getProductRankSortNo()
    {
        return $this->product_rank_sort_no;
    }

    /**
     * Set product_rank_sort_no
     *
     * @param $productRankSortNo
     *
     * @return $this
     */
    public function setProductRankSortNo($productRankSortNo)
    {
        $this->product_rank_sort_no = $productRankSortNo;

        return $this;
    }
}
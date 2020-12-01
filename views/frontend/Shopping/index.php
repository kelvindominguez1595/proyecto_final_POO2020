<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Tienda</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
    <div class="row">
        <?php
        foreach ($this->model->ListarProductos() as $item) {
        ?>
            <div class="col-md-4 product-men mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="assets/img/<?php echo $item->imagen; ?>" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="?view=Home&action=SingleProduct" method="post" class="link-product-add-cart">Detalles</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href=" ?view=Home&action=SingleProduct "><?php echo $item->NombreProducto; ?> </a>
                        </h4>
                        <br>
                        <?php
                        if ($item->cantidad <= 5) {
                            echo '<span class="font-italic font-weight-light">Existencia: ' . $item->cantidad . '</span>';
                        }
                        ?>
                        <div class="info-product-price my-2">
                            <span class="item_price"><?php echo number_format($item->precioVenta) ?></span>
                            <del>$280.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7" />
                                    <input type="hidden" name="amount" value="200.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
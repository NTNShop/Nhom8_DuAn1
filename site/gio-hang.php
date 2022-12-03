<section class="cart">
    <div class="container">
        <article class="row cart__head pc">
            <div class="col-6 cart__head-name">
                Thông tin sản phẩm
            </div>
            <div class="col-3 cart__head-quantity">
                Số lượng
            </div>
            <div class="col-3 cart__head-price">
                Đơn giá
            </div>
        </article>
        <article class="row cart__head pc">


            <?php
            $cookie_data = isset($_COOKIE["cart"]) ? $_COOKIE['cart'] : '[]';
            $cart_data = json_decode($cookie_data, true);
            // var_dump($cart_data);
            $total = 0;
            foreach ($cart_data as $sp) :
                $subtotal = $sp['don_gia'] * $sp['quantity'];
                $total += $subtotal;
            ?>
                <form class="cart-prod-item" action="" method="POST">
                    <input type="hidden" name="ma_hh" value="<?php echo $sp['ma_hh']; ?>">
                    <div class="col-6 cart__head-name">
                        <div class="prod-img">
                            <img src="<?= $CONTENT_URL ?>/images/products/<?php echo $sp['hinh']; ?>" alt="">
                        </div>
                        <div class="prod-info">
                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>
                                <?php echo $sp['ten_hh']; ?>
                            </h3>

                        </div>
                    </div>
                    <div class="col-3 cart__head-quantity">
                        <p>
                            <input class="quantityInp" type="number" name="quantity" class="qty product-qty" value='<?php echo $sp['quantity'] ?>' />

                        </p>
                    </div>
                    <div class="col-3 cart__head-price">
                        <span class="prod-price">
                            <?php echo $sp['don_gia']; ?>đ
                        </span>
                    </div>
                    <div class="row cart-item">
                        <div class="prod-action">
                            <button class="delete-prod" name="delcart">x</button>
                        </div>
                    </div>
                </form>
            <?php
            endforeach;
            ?>
        </article>


        <article class="row cart__foot">
            <div class="col-6 col-lg-6 col-sm-6 cart__foot-update">

                <button class="cart__foot-update-btn">Cập nhật giỏ hàng</button>
            </div>

            <p class="col-3 col-lg-3 col-sm-3 cart__foot-total">
                Tổng cộng: <?= $total ?>đ
            </p>

            <span class="col-3 col-lg-3 col-sm-3 cart__foot-price">
                <br>
                <a href="?thanh-toan">
                    <button class="cart__foot-price-btn">Mua hàng</button>
                </a>
            </span>
        </article>
    </div>
</section>
<div class="page-wrapper">
    <?php
    require_once "./mvc/views/" . $data["header"] . ".php";
    ?>
    <main class="page-main">
        <div class="section-first-screen">
            <div class="first-screen__bg" style="background-image: url(../../../assignment/public/assets/img/pages/contacts/bg3.jpg)"></div>
            <div class="first-screen__content">
                <div class="uk-container">
                    <nav class="category-nav">
                        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="http://localhost/assignment/Home/catalog">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/face.png" alt="face care" data-uk-svg></span><span class="nav-item__text">chăm sóc da</span></div>
                                    </a>
                                <li>
                                    <a href="http://localhost/assignment/Home/catalog">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/hair.png" alt="hair care" data-uk-svg></span><span class="nav-item__text">chăm sóc tóc</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/assignment/Home/catalog">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/lips.png" alt="lips care" data-uk-svg></span><span class="nav-item__text">chăm sóc môi</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/assignment/Home/catalog">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/body.png" alt="body care" data-uk-svg></span><span class="nav-item__text">chăm sóc cơ thể</span></div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </nav>
                    <div class="first-screen__box">
                        <h2 class="first-screen__title">Cart Details</h2>
                        <div class="first-screen__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li> <span>My Cart</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <!-- <div class="page-cart__list">
                    <div class="product__header">
                        <h5 class="product__title">NAME</h5>
                        <h5 class="product__price">PRICE</h5>
                        <h5 class="product__quantity">QUANTITY</h5>
                        <h5 class="product__total">TOTAL</h5>
                    </div>
                </div> -->
            <div><img class="page-cart__img" src="../../../assignment/public/assets/img/pages/cart/img-cart.png" alt="">
                <div class="page-cart__box">
                    <div class="page-cart__title">Giỏ hàng của bạn đang trống</div><a class="uk-button" href="http://localhost/assignment/Home/catalog">Tiếp tục mua sắm</a>
                </div>
            </div>
        </div>
    </main>

    <?php
    require_once "./mvc/views/" . $data["footer"] . ".php";
    ?>
</div>
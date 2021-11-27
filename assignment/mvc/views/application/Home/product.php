
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>

<main class="page-main">
      <?php 
        while ($row = mysqli_fetch_assoc($data["product"])){


      ?>
      <div class="section-first-screen">
        <div class="first-screen__bg" style="background-image: url(../../../assignment/public/assets/img/pages/contacts/bg8.jpg)"></div>
        <div class="first-screen__content">
            <div class="uk-container">
                <nav class="category-nav">
                    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/face.png" alt="face care" data-uk-svg></span><span class="nav-item__text">chăm sóc da</span></div>
                                </a>
                                <li>
                                    <a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/hair.png" alt="hair care" data-uk-svg></span><span class="nav-item__text">chăm sóc tóc</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/lips.png" alt="lips care" data-uk-svg></span><span class="nav-item__text">chăm sóc môi</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/body.png" alt="body care" data-uk-svg></span><span class="nav-item__text">chăm sóc cơ thể</span></div>
                                    </a>
                                </li>
                        </ul>
                    </nav>
                </nav>
                <div class="first-screen__box">
                    <h2 class="first-screen__title">Catalog</h2>
                    <div class="first-screen__breadcrumb">  
                        <ul class="uk-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="page-catalog.html">Catalog</a></li>
                            <li> <span><?php echo $row["product_name"] ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="page-content">
        <div class="uk-margin-large-top uk-container">
          <div class="product-full-card">
            <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
              <div>
                <div class="product-full-card__gallery">
                  <div class="product-full-card__gallery-box">
                    <li class="uk-flex uk-flex-center uk-flex-middle"><img src="../../../assignment/public/assets/img/<?php echo $row["avatar"] ?>" alt="skin1"></li>
                  </div>
                </div>
              </div>
              <div>
                <div class="product-full-card__content">
                  <div class="product-full-card__not-active">
                    <div class="product-full-card__title"><?php echo $row["product_name"] ?></div>
                    <div class="product-full-card__desc"><?php echo $row["intro"] ?></div>
                    <div class="product-full-card__select">
                    </div>
                  </div>
                </div>
                <div class="product-full-card__info">
                  <div class="product-full-card__price"> <span>Price: </span><span class="value"><?php echo $row["price"] ?></span></div>
                  <div class="product-full-card__btns"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span><a class="uk-button" href="#!">Add to Cart<span data-uk-icon="cart"></span></a></div>
                </div>
                <div class="product-full-card__category"><span>Category:  </span><a href="#!">Skin Care</a></div>
                <div class="product-full-card__share"><span>Share This:</span>
                  <ul>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="product-full-card__tabs">
              <ul class="uk-subnav" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                <li><a href="#">Chi tiết sản phẩm</a></li>
                <li><a href="#">Hướng dẫn sử dụng</a></li>
                <li><a href="#">Đánh giá (2)</a></li>
              </ul>
              <ul class="uk-switcher uk-margin">
                <li>
                <?php echo $row["huongdansudung"] ?>              </li>
                <li>
                  <div class="section-title">
                    <div class="uk-h2">Reviews</div>
                  </div>
                  <ul class="uk-comment-list">
                    <li>
                      <article class="uk-comment">
                        <header class="uk-comment-header">
                          <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                            <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../../../assignment/public/assets/img/blog/img-reviews-1.png" alt></div>
                            <div class="uk-width-expand@s">
                              <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                <h4 class="uk-comment-title uk-margin-remove">Ông A</h4><span class="uk-text-meta uk-margin-small-left">18/11/2021</span>
                              </div>
                              <div class="uk-comment-body">
                                <p>Xài tốt</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                              </div>
                            </div>
                          </div>
                        </header>
                      </article>
                      <ul>
                        <li>
                          <article class="uk-comment">
                            <header class="uk-comment-header">
                              <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../../../assignment/public/assets/img/blog/img-reviews-2.png" alt></div>
                                <div class="uk-width-expand@s">
                                  <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                    <h4 class="uk-comment-title uk-margin-remove">Ông B</h4><span class="uk-text-meta uk-margin-small-left">19/11/2021</span>
                                  </div>
                                  <div class="uk-comment-body">
                                    <p>?</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                                  </div>
                                </div>
                              </div>
                            </header>
                          </article>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <article class="uk-comment">
                        <header class="uk-comment-header">
                          <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                            <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../../../assignment/public/assets/img/blog/img-reviews-3.png" alt></div>
                            <div class="uk-width-expand@s">
                              <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                <h4 class="uk-comment-title uk-margin-remove">Bà C</h4><span class="uk-text-meta uk-margin-small-left">19/11/2021</span>
                              </div>
                              <div class="uk-comment-body">
                                <p>Cũng được</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                              </div>
                            </div>
                          </div>
                        </header>
                      </article>
                    </li>
                  </ul>
                  <div class="block-form uk-margin-medium-top">
                    <div class="section-title">
                      <div class="uk-h2">Leave a Reply</div>
                    </div>
                    <div class="section-content">
                      <p>Your email address will not be published. Required fields are marked *</p>
                      <form action="#!">
                        <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Your Name *"></div>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Email *"></div>
                          <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Reviews *"></textarea></div>
                          <div><button class="uk-button uk-button-large" type="submit">Post Review</button></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="section-recommend-products">
        <div class="uk-section uk-container">
          <div class="section-title section-title--center wave french-fries">
            <h3 class="uk-h3">Một số sản phẩm bạn có thể thích</h3>
          </div>
          <div class="section-content">
            <div data-uk-slider>
              <div class="uk-position-relative">
                <div class="uk-slider-container uk-light">
                  <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                    <li>
                      <div class="product-item">
                        <div class="product-item__box">
                          <div class="product-item__intro">
                            <div class="product-item__not-active">
                              <div class="product-item__media">
                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="../../../assignment/public/assets/img/products/skin1.png"><img src="../../../assignment/public/assets/img/products/skin1.png" alt="Skin 1" />
                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                    <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                  </a></div>
                              </div>
                              <div class="product-item__title"><a href="page-product.html">Thạch hoa hồng dưỡng ẩm 100ml</a></div>
                              <div class="product-item__desc">Với kết cấu mọng nước mang nhiều dưỡng chất từ nước hoa hồng hữu cơ kết hợp với nam châm dưỡng ẩm Pentavitin, các axit amin
                                 và HA, thạch hoa hồng sẽ nuôi dưỡng và khóa ẩm suốt 24 giờ, mang lại làn da đầy đặn, mềm mượt và mịn màng. </div>
                            </div>
                          <div class="product-item__info">
                            <div class="product-item__price"> <span>Price: </span><span class="value">318.750đ</span></div>
                            <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
              }
      ?>
    </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>


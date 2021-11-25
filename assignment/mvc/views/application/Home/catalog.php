
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
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
                            <li> <span>Catalog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="section-banners">
        <div class="uk-section uk-container">
          <div class="uk-grid uk-grid-medium uk-child-width-1-2@m" data-uk-grid>
            <div>
              <div class="banner-card">
                <div class="banner-card__bg" style="background-image: url(../../../assignment/public/assets/img/blog/blog_1_anh2.jpg)"></div>
                <div class="banner-card__box">
                  <h4 class="banner-card__title">Mỹ phẩm<br> của người Việt, cho người Việt</h4><a class="banner-card__phone" href="tel:0394143031"><i class="fas fa-phone-square"></i><span>Call us 0394143031</span></a>
                </div>
              </div>
            </div>
            <div>
              <div class="banner-card">
                <div class="banner-card__bg" style="background-image: url(../../../assignment/public/assets/img/blog/blog1_anh1.jpg)"></div>
                <div class="banner-card__box">
                  <h4 class="banner-card__title">Đón đầu xu hướng <br> mỹ phẩm thế giới</h4><a class="banner-card__btn" href="page-blog-article.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="page-content">
        <div class="uk-container">
          <div data-uk-filter="target: .js-filter">
            <div class="catalog-filter-row">
              <ul class="uk-subnav">
                <li class="uk-active"data-uk-filter-control=""><a href="#">All</a></li>
                <li data-uk-filter-control="[data-tags='skin']"><a href="#">Skin</a></li>
                <li data-uk-filter-control="[data-tags='hair']"><a href="#">Hair</a></li>
                <li data-uk-filter-control="[data-tags='lips']"><a href="#">Lips</a></li>
                <li data-uk-filter-control="[data-tags='body']"><a href="#">Body</a></li>
              </ul><select class="uk-select" name="orderby" aria-label="Shop order">
                <option value="menu_order" selected>Sorting by</option>
                <option value="popularity">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="date">Sort by latest</option>
                <option value="price">Sort by price: low to high</option>
                <option value="price-desc">Sort by price: high to low</option>
              </select>
            </div>
            <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" data-uk-grid>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1181.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Thạch hoa hồng dưỡng ẩm 100ml</a></div>
                        <div class="product-item__desc">Với kết cấu mọng nước mang nhiều dưỡng chất từ nước hoa hồng hữu cơ kết hợp với nam châm dưỡng ẩm Pentavitin, các axit amin
                           và HA, thạch hoa hồng sẽ nuôi dưỡng và khóa ẩm suốt 24 giờ, mang lại làn da đầy đặn, mềm mượt và mịn màng. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">318.750đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1111.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Dung dịch chấm mụn bí đao</a></div>
                        <div class="product-item__desc">Dung dịch chấm mụn từ bí đao kết hợp với tinh chất rau má, tràm trà và 2% axit salicylic giúp loại bỏ mụn trứng cá, giảm mụn sưng viêm nhanh chóng, 
                          làm mờ vết thâm, vết đỏ trên da và ngăn ngừa mụn trở lại. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">95.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1121.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Gel bí đao rửa mặt</a></div>
                        <div class="product-item__desc">Sản phẩm chứa các thành phần tự nhiên gồm bí đao, rau má, tràm trà, bổ sung thêm Vitamin B3, B5, Betaine. Gel rửa mặt bí đao có pH 5.5 
                          giúp làm sạch sâu bụi bẩn và dầu thừa, làm giảm việc hình thành mụn ẩn mà vẫn giữ được độ ẩm mịn tự nhiên và không gây khô da sau khi sử dụng. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">175.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1122.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Gel bí đao rửa mặt 310ml</a></div>
                        <div class="product-item__desc">Sản phẩm chứa các thành phần tự nhiên gồm bí đao, rau má, tràm trà, bổ sung thêm Vitamin B3, B5, Betaine. Gel rửa mặt bí đao có pH 5.5 
                          giúp làm sạch sâu bụi bẩn và dầu thừa, làm giảm việc hình thành mụn ẩn mà vẫn giữ được độ ẩm mịn tự nhiên và không gây khô da sau khi sử dụng. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">295.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1131.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Mặt nạ bí đao</a></div>
                        <div class="product-item__desc">Sản phẩm gồm thành phần chính là bí đao thanh mát, bổ sung thêm rau má và tinh dầu tràm trà giúp giảm nhờn, làm thông thoáng lỗ chân lông, 
                          cải thiện nhanh tình trạng mụn, làm dịu vết đỏ, mang lại làn da sạch mụn và mịn màng. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">115.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1132.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Mặt nạ bí đao 100ml</a></div>
                        <div class="product-item__desc">Sản phẩm gồm thành phần chính là bí đao thanh mát, bổ sung thêm rau má và tinh dầu tràm trà giúp giảm nhờn, làm thông thoáng lỗ chân lông, 
                          cải thiện nhanh tình trạng mụn, làm dịu vết đỏ, mang lại làn da sạch mụn và mịn màng. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">295.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1141.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Nước bí đao cân bằng da</a></div>
                        <div class="product-item__desc">Sản phẩm chứa các thành phần tự nhiên gồm bí đao, chiết xuất rau má và tinh dầu tràm trà. Nước bí đao với công thức không chứa cồn có tác dụng
                           cân bằng pH, giảm dầu nhờn, làm sạch lỗ chân lông, cải thiện rõ rệt tình trạng mụn ẩn. Ngoài ra nước bí đao còn được bổ sung thêm Vitamin B3, HA và chiết xuất cam thảo cung cấp độ ẩm giúp da luôn mịn màng và giảm thiểu các vết đỏ trên da. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">175.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1142.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Nước bí đao cân bằng da 310ml</a></div>
                        <div class="product-item__desc">Sản phẩm chứa các thành phần tự nhiên gồm bí đao, chiết xuất rau má và tinh dầu tràm trà. Nước bí đao với công thức không chứa cồn có tác dụng
                           cân bằng pH, giảm dầu nhờn, làm sạch lỗ chân lông, cải thiện rõ rệt tình trạng mụn ẩn. Ngoài ra nước bí đao còn được bổ sung thêm Vitamin B3, HA và chiết xuất cam thảo cung cấp độ ẩm giúp da luôn mịn màng và giảm thiểu các vết đỏ trên da. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">295.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1151.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Nước tẩy trang bí đao</a></div>
                        <div class="product-item__desc">Làn da dầu và mụn rất nhạy cảm nên cần được thiết kế một loại nước tẩy trang phù hợp. Với công nghệ Micellar, nước tẩy trang bí đao giúp làm sạch
                          x hiệu quả lớp trang điểm, bụi bẩn và dầu thừa, mang lại làn da sạch hoàn toàn và dịu nhẹ. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">275.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1152.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Nước tẩy trang bí đao 140ml</a></div>
                        <div class="product-item__desc">Làn da dầu và mụn rất nhạy cảm nên cần được thiết kế một loại nước tẩy trang phù hợp. Với công nghệ Micellar, nước tẩy trang bí đao giúp làm sạch
                           hiệu quả lớp trang điểm, bụi bẩn và dầu thừa, mang lại làn da sạch hoàn toàn và dịu nhẹ. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">125.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1161.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Thạch bí đao</a></div>
                        <div class="product-item__desc">Với sự kết hợp giữa chiết xuất bí đao thanh mát, 5α-AVOCUTA® được chưng cất phân tử từ dầu quả bơ và TECA™ trích ly từ rau má, thạch dưỡng bí đao với
                           kết cấu mỏng nhẹ tan nhanh vào da giúp mang lại độ ẩm cân bằng, giảm lượng dầu thừa và cải thiện tình trạng mụn </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">195.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1162.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Thạch bí đao 100ml</a></div>
                        <div class="product-item__desc">Với sự kết hợp giữa chiết xuất bí đao thanh mát, 5α-AVOCUTA® được chưng cất phân tử từ dầu quả bơ và TECA™ trích ly từ rau má, thạch dưỡng bí đao với
                           kết cấu mỏng nhẹ tan nhanh vào da giúp mang lại độ ẩm cân bằng, giảm lượng dầu thừa và cải thiện tình trạng mụn </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">385.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="skin">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/1171.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Tinh chất bí đao 70ml</a></div>
                        <div class="product-item__desc">Với các thành phần chủ đạo là bí đao thanh mát, bổ sung thêm 7% Niacinamide (Vitamin B3), TECA từ rau má và tinh dầu tràm trà, tinh chất bí đao sẽ phục
                           hồi mạnh mẽ tình trạng mụn, kiểm soát bã nhờn, làm thông thoáng lỗ chân lông giúp giảm tình trạng mụn ẩn, cải thiện bề mặt da và làm mờ vết thâm. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">265.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="body">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/2111.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Gel tắm bí đao</a></div>
                        <div class="product-item__desc">Giúp da sạch mịn màng và giảm mụn lưng. Tinh dầu sả chanh giảm mùi cơ thể, tạo cảm giác sảng khoái, thư giãn. Sản phẩm dạng gel trong
                           tạo bọt nhẹ nhàng và không gây khô da sau khi sử dụng. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">245.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="body">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/2211.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Bơ dưỡng thể cà phê Đắk Lắk</a></div>
                        <div class="product-item__desc">Dầu cà phê Đắk Lắk rất giàu cafein, kết hợp với dầu mù u và bơ cacao, tất cả hòa quyện nên một thể bơ sánh mịn giúp dưỡng ẩm, làm mềm
                           và chống oxi hóa, mang lại làn da cơ thể luôn mượt mà, tươi mới rạng rỡ. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">195.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="body">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/2221.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Cà phê Đắk Lắk làm sạch da chết cơ thể</a></div>
                        <div class="product-item__desc">Sản phẩm là sự kết hợp giữa hạt cà phê Đắk Lắk nguyên chất xay nhuyễn, hòa quyện cùng bơ cacao Tiền Giang giúp loại bỏ tế bào chết trên cơ thể hiệu quả,
                           làm đều màu da, mang lại năng lượng, giúp da trở nên mềm mại và rạng rỡ. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">115.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="body">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/2311.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Gel tắm khuynh diệp & bạc hà</a></div>
                        <div class="product-item__desc">Vận dụng liệu pháp mùi hương từ tinh dầu khuynh diệp, bạc hà, kết hợp với vitamin B5 và hoạt chất dưỡng ẩm Betaine, Gel tắm sẽ làm sạch nhẹ nhàng và giữ cho
                           làn da cơ thể luôn mềm mại, đồng thời giúp thư giãn, giải tỏa căng thẳng và mang lại một tinh thần thông suốt. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">165.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="body">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/2321.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Nước rửa tay khô khuynh diệp và bạc hà</a></div>
                        <div class="product-item__desc">Nước rửa tay dạng xịt tiện lợi, sạch khuẩn 99,9%, không gây khô da. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">75.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="body">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/2331.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Sữa dưỡng thể khuynh diệp & bạc hà</a></div>
                        <div class="product-item__desc">Với cấu trúc mềm mịn, thẩm thấu nhanh và không nhờn rít, sữa dưỡng thể giúp nuôi dưỡng, cấp ẩm, đồng thời giúp thư giãn và mang lại làn da tươi mới. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">95.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="body">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/2341.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Xà phòng rửa tay khuynh diệp & bạc hà hình chú thỏ</a></div>
                        <div class="product-item__desc">Với dầu dừa, tinh dầu khuynh diệp, bạc hà và vitamin E, xà phòng rửa tay tạo bọt nhẹ nhàng giúp làm sạch vi khuẩn, bảo vệ đôi tay luôn sạch sẽ, thơm tho. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">36.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="hair">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/3111.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Sa-chi serum phục hồi tóc</a></div>
                        <div class="product-item__desc">Với dầu sa-chi, vitamin E, tinh dầu Hương Nhu và Phospholipid, serum có tác dụng phục hồi tóc hư tổn, bảo vệ mái tóc khỏi nhiệt và tia UV. 
                          Tóc luôn trong trạng thái chắc khỏe và tràn đầy sức sống. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">125.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="hair">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/3211.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Nước dưỡng tóc tinh dầu bưởi</a></div>
                        <div class="product-item__desc">Phiên bản nâng cấp tăng gấp đôi lượng dầu dưỡng. Với tinh dầu bưởi nguyên chất từ vỏ bưởi, kết hợp với hoạt chất Xylishine và Vitamin B5, nước dưỡng 
                          tóc dầu bưởi giúp tóc giảm gãy rụng và khô xơ, cung cấp dưỡng chất giúp tóc luôn suôn mượt, mềm mại. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">145.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>
              
              <li data-tags="hair">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/3221.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Dầu gội bưởi</a></div>
                        <div class="product-item__desc">Từ tinh dầu vỏ bưởi Việt Nam truyền thống kết hợp với vitamin B5, hoạt chất dưỡng ẩm Xylishine™ cùng công thức dịu nhẹ không chứa sulfate,
                           dầu gội bưởi giúp làm sạch tóc và giảm gãy rụng, mang lại mái tóc đen dày, chắc khoẻ và mượt mà. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">225.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="hair">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/3231.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Dầu xả bưởi</a></div>
                        <div class="product-item__desc">Sự kết hợp hài hoà giữa tinh dầu bưởi Việt Nam truyền thống, vitamin B5 và hoạt chất dưỡng ẩm Xylishine™ đã tạo nên dầu xả bưởi giàu dưỡng chất
                           giúp giảm gãy rụng và làm mềm từng sợi tóc, mang lại mái tóc mượt mà và nhẹ nhàng sau khi xả. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">165.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="lips">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/4111.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Son dưỡng dầu dừa Bến Tre</a></div>
                        <div class="product-item__desc">Giúp đôi môi mềm mượt, căng mọng, chống khô môi, nứt nẻ do thời tiết. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">32.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

              <li data-tags="lips">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img/products/4121.png"/></div>
                        </div>
                        <div class="product-item__title"><a href="product">Cà phê Đắk Lắk làm sạch da chết môi</a></div>
                        <div class="product-item__desc">Những hạt cà phê li ti được rang xay bằng tay hòa quyện vào dầu mắc-ca và bơ hạt mỡ, sẽ nhẹ nhàng làm bong những tế bào da chết ở môi, đem lại làn môi mềm và mịn màng. </div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value">75.000đ</span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="product">Details<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </main>

    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>


<?php require_once 'helpers/Helper.php'?>
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg" style="background-image: url('assets/img/breadcrumb/1.png') ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">THÔNG TIN SẢN PHẨM</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="trang-chu">TRANG CHỦ</a></li>
                            <li>THÔNG TIN SẢN PHẨM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mb-80">

                        <div class="row">
                            <!-- imgs-zoom-area start -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="imgs-zoom-area">
                                    <img id="zoom_03" src="../backend/assets/uploads/<?php echo $product['picture']?>" data-zoom-image="../backend/assets/uploads/<?php echo $product['picture']?>" alt="">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                <div class="p-c">
                                                    <a href="#" data-image="../backend/assets/uploads/<?php echo $product['picture']?>" data-zoom-image="../backend/assets/uploads/<?php echo $product['picture']?>">
                                                        <img class="zoom_03" src="../backend/assets/uploads/<?php echo $product['picture']?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../backend/assets/uploads/<?php echo $product['picture1']?>" data-zoom-image="../backend/assets/uploads/<?php echo $product['picture1']?>">
                                                        <img class="zoom_03" src="../backend/assets/uploads/<?php echo $product['picture1']?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../backend/assets/uploads/<?php echo $product['picture2']?>" data-zoom-image="../backend/assets/uploads/<?php echo $product['picture2']?>">
                                                        <img class="zoom_03" src="../backend/assets/uploads/<?php echo $product['picture2']?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../backend/assets/uploads/<?php echo $product['picture3']?>" data-zoom-image="../backend/assets/uploads/<?php echo $product['picture3']?>">
                                                        <img class="zoom_03" src="../backend/assets/uploads/<?php echo $product['picture3']?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-info">
                                    <h3 class="text-black-1"><?php echo $product['name_computer']?></h3><br/>
                                    <h6 class="brand-name-2"><b>Hãng Sản Xuất :<?php echo $product['name_manufacturer']?></b></h6>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->
                                    <div class="single-pro-color-rating clearfix">
                                        <div class="sin-pro-color f-left">
                                            <p style="font-weight: bold" class="f-left">Color : <?php echo $product['color']?></p>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <hr>
                                    <!-- plus-minus-pro-action -->
                                    <div class="plus-minus-pro-action clearfix">
                                        <div class="sin-plus-minus f-left clearfix">
                                             <p style="font-weight: bold" class="f-left">Tình Trạng : <?php echo $product['amount']>0?"Còn Hàng":"Hết Hàng"?> </p>
                                        </div>
                                        <div class="sin-pro-action f-right">
                                            <ul class="action-button">
                                                <li>
                                                    <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- plus-minus-pro-action end -->
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-price -->
                                    <h3 class="pro-price">Giá: <?php echo number_format($product['price'])?> VNĐ</h3>
                                    <!--  hr -->
                                    <hr>
                                    <div>
                                        <a href="#" class="button extra-small button-black" tabindex="-1">
                                            <span class="text-uppercase">Mua Ngay</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-info end -->
                        </div>
                        <!-- single-product-tab -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- hr -->
                                <hr>
                                <div class="single-product-tab">
                                    <ul class="reviews-tab mb-20">
                                        <li  class="active"><a href="#description" data-toggle="tab">Thông Số</a></li>
                                        <li ><a href="#information" data-toggle="tab">Mô Tả</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div style="color: #0d0d0d" role="tabpanel" class="tab-pane active" id="description">
                                            <table class="table" >

                                                <tr>
                                                    <th>Tên :</th>
                                                    <td><?php echo $product['name_computer'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>CPU :</th>
                                                    <td><?php echo $product['cpu'].'   '?></td>
                                                </tr>
                                                <tr>
                                                    <th>Ram :</th>
                                                    <td><?php echo $product['ram'].'  '?></td>
                                                </tr>
                                                <tr>
                                                    <th>CARD :</th>
                                                    <td><?php echo $product['card']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Ổ Cứng :</th>
                                                    <td><?php echo $product['memory']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Màn Hình :</th>
                                                    <td><?php echo $product['screem']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Pin :</th>
                                                    <td><?php echo $product['pin']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Hệ Điều Hành :</th>
                                                    <td><?php echo $product['opsystem']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Cổng Kết Nối :</th>
                                                    <td><?php echo $product['port']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Camera :</th>
                                                    <td><?php echo $product['webcam']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Khối Lượng :</th>
                                                    <td><?php echo $product['weight']?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="information">
                                            <?php echo $product['description']?>
                                        </div>
                                    </div>
                                </div>
                                <!--  hr -->
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                    <div class="related-product-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-left mb-40">
                                    <h2 class="uppercase">Sản Phẩm Liên Quan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="active-related-product">
                                <?php foreach ($products as $product):
                                    $product_name=$product['name_computer'];
                                    $product_slug=Helper::getSlug($product_name);
                                    $product_id=$product['id_computer'];
                                    $productnew_id_hang=$product['id_manufacturer'];
                                    $product_link="chi-tiet-san-pham/$product_slug/$product_id/$productnew_id_hang";?>
                                <!-- product-item start -->
                                <div class="col-xs-12">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="<?php echo $product_link?>">
                                                <img src="../backend/assets/uploads/<?php echo $product['picture']?>" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php echo $product_link?>"><?php echo $product['name_computer']?></a>
                                            </h6>
                                            <h3 class="pro-price"><?php echo number_format($product['price'])?></h3>
                                            <ul class="action-button">
                                                <li>
                                                    <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search here...">
                            <button type="submit"><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </aside>
                    <!-- widget-categories -->
                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Categories</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                <li class="closed"><a href="#">Brand One</a>
                                    <ul>
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Tab</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Head Phone</a></li>
                                        <li><a href="#">Memory</a></li>
                                    </ul>
                                </li>
                                <li class="open"><a href="#">Brand Two</a>
                                    <ul>
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Tab</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Head Phone</a></li>
                                        <li><a href="#">Memory</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Accessories</a>
                                    <ul>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Utilities</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Top Brands</a>
                                    <ul>
                                        <li><a href="#">Mobile</a></li>
                                        <li><a href="#">Tab</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Head Phone</a></li>
                                        <li><a href="#">Memory</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Jewelry</a>
                                    <ul>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Utilities</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- operating-system -->
                    <aside class="widget operating-system box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">operating system</h6>
                        <form action="https://demo.hasthemes.com/subas-preview/subas/action_page.php">
                            <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry ios</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Android</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">ios</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                            <label><input type="checkbox" name="operating-1" value="phone-1">Symban</label><br>
                            <label class="mb-0"><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry os</label><br>
                        </form>
                    </aside>
                    <!-- widget-product -->
                    <aside class="widget widget-product box-shadow">
                        <h6 class="widget-title border-left mb-20">recent products</h6>
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/4.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/8.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="product-item">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="img/product/12.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-title">
                                    <a href="single-product.html">Product Name</a>
                                </h6>
                                <h3 class="pro-price">$ 869.00</h3>
                            </div>
                        </div>
                        <!-- product-item end -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>

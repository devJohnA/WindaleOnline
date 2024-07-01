<style>
#about-store {
    background-color: #f8f8f8;
    padding: 40px 0;
    position: relative;
    overflow: hidden;
    height: 100px;
}

#about-store .triangle-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fd2323;
    z-index: 1;
}

#about-store .container {
    position: relative;
    z-index: 2;
}

#about-store p {
    color: #fff;
    margin-bottom: 30px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

#about-store .about-content {
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
    padding: 20px;
    border-radius: 5px;
}

#about-store ul {
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 20px;
}

#about-store li {
    margin-bottom: 10px;
}

#about-store img {
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

@media (max-width: 767px) {
    #about-store .col-sm-4 {
        text-align: center;
    }
}

#about-store .about-content,
#about-store .about-content ul,
#about-store .about-content li {
    color: #fff;

}
</style>

<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span style="color:#fd2323;">Windale Hardware</span> Store</h1>
                                <h2>Buy Now!</h2>
                                <p>Welcome to Windale Hardware, where quality meets craftsmanship! Whether you're a
                                    seasoned DIY enthusiast or just starting out on your home improvement journey, we're
                                    thrilled to have you here. Explore our extensive collection of tools, hardware, and
                                    accessories designed to tackle any project with ease. Welcome aboard! </p>

                            </div>
                            <div class="col-sm-6">
                                <img src="img/windalestore.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span style="color:#fd2323;">Welcome</span></h1>
                                <h2> Windale Hardware</h2>
                                <p>Where we offer a wide range of high-quality products
                                    designed to meet your DIY needs with durability and reliability.</p>

                            </div>
                            <div class="col-sm-6">
                                <img src="img/product.jpg" class=" img-responsive" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php include 'sidebar.php'; ?>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Features Items</h2>

                    <?php

            $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 ";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();
           
            foreach ($cur as $result) { 

              ?>
                    <form method="POST" action="cart/controller.php?action=add">
                        <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
                        <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

                        <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                                        <h5>&#8369 <?php  echo $result->PRODISPRICE; ?></h5>
                                        <p style="color: #696763;
    font-family: 'Roboto', sans-serif;
    font-size: 10px;
    text-decoration: none;
    text-transform: uppercase; font-weight:bold;"> Quantity: <em>
                                                <?php  echo $result->PROQTY; ?> </em></p>
                                        <p style="color: #696763;
    font-family: 'Roboto', sans-serif;
    font-size: 10px;
    text-decoration: none;
    text-transform: uppercase; font-weight:bold">Product: <em> <?php  echo    $result->PRODESC; ?> </em></p>
                                        <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</button>
                                    </div>
                                    <!--  -->
                                </div>

                            </div>
                        </div>
                    </form>
                    <?php  } ?>

                </div>
                <!--features_items-->

                <!--  -->
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>

<section id="about-store">
    <div class="triangle-background"></div>
    <div class="container">
        <p class=" text-center">&copy; Capstone Project By: John Anthon G. Dela Cruz || Dante Montecalvo || Geramay
            Martus || Deverly Almocera 4- North</p>
        <!-- <div class="row">
            <div class="col-sm-4">
                <img src="img/windalestore.jpg" alt="Windale Hardware Store Front" class="img-responsive">
            </div>
           <div class="col-sm-8">
                <div class="about-content">
                    <h4><span style=font-size:16px;>Windale Hardware </span> is your one-stop shop for all your home
                        improvement needs. With a
                        couple years
                        of
                        experience in the industry, we pride ourselves on offering good tools, hardware, and
                        to both professional contractors and DIY enthusiasts.</h4>
                </div>


            </div> 
        </div> -->
    </div>
</section>
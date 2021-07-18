@extends('layouts.base')
@section('index')
    <!-- section-header.// -->

    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-top-sm">
        <div class="container">
            <div class="row">

            <div class="col-md-3">
                    
                    <!-- card.// -->
                    <!-- card.// -->
                    <!-- card.// -->
                </div>
                <div class="col-md-9">
                    <!-- ================= main slide ================= -->
                    <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                        <div class="item-slide">
                            <img src="{{asset('frontend/images/banners/clock.png')}}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{asset('frontend/images/banners/sliderthree.jpg')}}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{asset('frontend/images/banners/clockone.jpg')}}">
                        </div>
                    </div>
                    <!-- ============== main slidesow .end // ============= -->
                </div>
                <!-- col.// -->

                <!-- col.// -->
            </div>
        </div>
        <!-- container .//  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
  <hr/>
<div class="container-fluid ">
  <div class="row p-4">
     <div class="col-md-2">
     <span uk-icon="icon: bag; ratio: 1"></span>
     <p><strong>fast deliver</strong><br/>our delivery method is </p>
     </div>
     <div class="col-md-2">
     <span uk-icon="icon: home; ratio: 1"></span>
     <p><strong>free shipping</strong><br/>to your destination</p>
     </div>
  <div class="col-md-2">
  <span uk-icon="icon:  menu; ratio: 1"></span>
     <p><strong>free return</strong><br/>we give u free return</p>
  </div>
  <div class="col-md-2">
  <span uk-icon="icon: lock; ratio: 1"></span>
     <p><strong>Payments secure</strong><br/>100%of ur payments data are secured</p>
     </div>
  <div class="col-md-2">
  <span uk-icon="icon: users; ratio: 1"></span>
     <p><strong>Support 24/7</strong><br/>in your shopping progress</p>
  </div>
  <div class="col-md-2">
  
  <span uk-icon="icon:  pull; ratio: 1"></span>
     <p><strong>Discount</strong><br/>we affer 10% discount </p></div>
  </div>

</div>
<hr/>
    <!-- ========================= SECTION CONTENT ========================= -->
       
    <!-- categories -->

    <section class="section-content padding-y-sm bg">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg">Popular Categories</h4>
            </header>
            <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url('{{asset('frontend/images/posts/1.jpg')}}');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <a href="/categorydetail/{{$category->id}}" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
            @endforeach

            </div>
        </div>
    </section>

    <!-- endcategories -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!-- <section class="section-content padding-y-sm bg"> -->
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">Hot deals</h4>
            </header>
            <div class="row">
            @foreach($products as $product)
                <div class="col-md-3">       
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="{{$product->link}}"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">{{$product->name}}</h4>
                            <p class="desc">{{$product->short_description}}</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <a href="/productdetail/{{$product->id}}" class="btn btn-sm btn-primary float-right">View</a>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="/add-to-cart/{{$product->id}}" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">{{$product->sale_price}}</</span> <del class="price-old">{{$product->regular_price}}</del>
                            </div>
                         </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                  @endforeach  
                </div>

                <!-- col // -->
            </div>
            <!-- row.// -->

        </div>
        <!-- container .//  -->
    </section>

    <!-- ========================= SECTION ITEMS ========================= -->
     <br/>
     <br/>
    <div class="container">
    <div class="row d-flex gap-4">
    <div class="col-md-6 d-flex bg-info"> 
    <div class="col-md-3">
    <br/>
    <br/>
    <br/>
    <p><strong>Get 30% of discount</strong><br/>everytime you shop above 10 units
    </div>
    <div class="col-md-9">
    <img src="https://image.shutterstock.com/image-illustration/3d-rendering-illustration-laptop-notebook-600w-1103233229.jpg">
    </div>
    </div>
    <div class="col-md-6 d-flex bg-light">
    <div class="col-md-9">
    <img src="{{asset('frontend/images/items/1.jpg')}}">
    </div>
    <div class="col-md-3">
    <br/>
    <br/>
    <br/>
    <p><strong>Get 30% of discount</strong><br/>everytime you shop above 10 units
    </div>
    </div>
    </div>
    </div> 
     <!-- blog -->
     <div class="container">
     <header class="section-heading heading-line">
                <h4 class="title-section bg">Our blogs</h4>
            </header>
     <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin-medium-top" data-uk-grid>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/gMsnXqILjp4/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$27.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
          @foreach($blogs as $blog)
            <h3 class="uk-card-title uk-margin-small-bottom">{{$blog->title}}</h3>
            <div class="uk-text-muted uk-text-small">{{$blog->short_description}}</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">5.0</span>
              <span>(324)</span>
            </div>
          </div>
          <a href="/blogdetail/{{$blog->id}}" class="uk-position-cover"></a>
        </div>
        @endforeach
      </div>
    </div>
    </div>

    <!-- ========================= Subscribe ========================= -->
    <section class="section-subscribe bg-primary padding-y-lg">
        <div class="container">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party. </small>
                </div>
                <!-- col-md-6.// -->
            </div>

        </div>
        <!-- container // -->
    </section>
    <!-- ========================= Subscribe .END// ========================= -->
    <!-- ========================= FOOTER ========================= -->
@endsection
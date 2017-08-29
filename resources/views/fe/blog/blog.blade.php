@section('fe_maincontent')
    <div class="j-menu-container"></div>

    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <h1 class="f-primary-l c-default"><i class="fa fa-home"> Blog Information</i></h1>
                <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">What's on your mind & Read your blog here </i></div>
            </div>
        </div>
    </div>
    <div class="l-main-container">

        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><span>Blogs</span></li>
                    {{--<li><i class="fa fa-angle-right"></i><span>Three Columns Right Sidebar v2</span></li>--}}
                </ul>
            </div>
        </div>

        <div class="l-inner-page-container">
            <div class="container">
                <div class="col-md-9">
                    <div class="b-blog-listing__block">
                        <div class="b-blog-listing__block-top">
                            <div class=" view view-sixth">
                                <img data-retina="" src="{{ asset('fe/img/blog/blog_listing.jpg') }}" alt="">
                                <div class="b-item-hover-action f-center mask">
                                    <div class="b-item-hover-action__inner">
                                        <div class="b-item-hover-action__inner-btn_group">
                                            <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-infoblock-with-icon b-blog-listing__infoblock">
                            <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                                <a href="blog_detail_right_slidebar.html" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                                    Mauris ac risus neque, ut pulvinar risus
                                </a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b">
                                    By <a href="" class="f-more">Stephen Brock</a> In <a href="" class="f-more">Lifestyle</a>, <a href="" class="f-more">Photography</a> Posted May 24th, 2013
                                    <a href="" class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-comment"></i>12 Comments</a>
                                </div>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary">
                                    Pendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis.
                                </div>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                    <a href="blog_detail_right_slidebar.html" class="f-more f-primary-b">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row j-masonry b-col-default-indent b-col-default-indent__top-block">
                        <div class="masonry-gridSizer col-xs-12 col-md-4"></div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_01.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_02.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_03.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_05.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_06.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_07.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_09.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_10.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="j-masonry-item col-xs-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog/blog_listing/blog_listing_4_colums_11.jpg') }}" alt="">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="blog_detail_left_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">Semper at egestas sed, elementum</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">May 24th, 2013</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. </p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="blog_detail_right_slidebar.html"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="f-center b-remaining">
                        <div class="b-hr-with-btn">
                            <a class="b-btn b-btn--load f-btn b-btn-sm f-btn-load f-btn-sm f-primary-b"><i class="fa fa-spinner"></i> Load more</a>
                        </div>
                    </div>
                </div>
                <div class="visible-xs-block visible-sm-block b-hr"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="b-form-row b-input-search">
                                <input class="form-control" type="text" placeholder="Enter your keywords"/>
                                <span class="b-btn b-btn-search f-btn-search fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row b-col-default-indent">
                        <div class="col-md-12">
                            <div class="b-categories-filter">
                                <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">blog categories</h4>
                                <ul>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Web Design</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                    </li>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Smart Phone</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                    </li>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Latop</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                    </li>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Apple Store</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                    </li>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Wordpress Theme</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                    </li>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Web Design</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                    </li>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Sport</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                    </li>
                                    <li>
                                        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Fashion</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">23</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special">popular postes</h4>

                            <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
                                <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
                                    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
                                        <div class="b-blog-short-post__item_img">
                                            <a href="#"><img data-retina src="{{ asset('fe/img/shop/popular_1.png') }}" alt=""/></a>
                                        </div>
                                        <div class="b-remaining">
                                            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                <a href="#">Phasellus id mattis dolorunc et erat hendrerit, tincidunt</a>
                                            </div>
                                            <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                                                10, January, 2014
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
                                        <div class="b-blog-short-post__item_img">
                                            <a href="#"><img data-retina src="{{ asset('fe/img/shop/popular_1.png') }}" alt=""/></a>
                                        </div>
                                        <div class="b-remaining">
                                            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                <a href="#">Vel eleifend id ullamcorper eu velit</a>
                                            </div>
                                            <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                                                14, January, 2014
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
                                        <div class="b-blog-short-post__item_img">
                                            <a href="#"><img data-retina src="{{ asset('fe/img/shop/popular_1.png') }}" alt=""/></a>
                                        </div>
                                        <div class="b-remaining">
                                            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                <a href="#">Lorem ipsum dolor sit amet purus vitae magna rhoncus</a>
                                            </div>
                                            <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                                                10, January, 2014
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
                                        <div class="b-blog-short-post__item_img">
                                            <a href="#"><img data-retina src="{{ asset('fe/img/shop/popular_1.png') }}" alt=""/></a>
                                        </div>
                                        <div class="b-remaining">
                                            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                <a href="#">Fusce vitae dui sit amet lacus rutrum convallis</a>
                                            </div>
                                            <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                                                10, January, 2014
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b @@hidden">
                                        <div class="b-blog-short-post__item_img">
                                            <a href="#"><img data-retina src="{{ asset('fe/img/shop/popular_1.png') }}" alt=""/></a>
                                        </div>
                                        <div class="b-remaining">
                                            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                                <a href="#">Fusce vitae dui sit amet lacus rutrum convallis</a>
                                            </div>
                                            <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                                                10, January, 2014
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">tags cloud</h4>
                            <div>
                                <a class="f-tag b-tag" href="#">Dress</a>
                                <a class="f-tag b-tag" href="#">Mini</a>
                                <a class="f-tag b-tag" href="#">Skate animal</a>
                                <a class="f-tag b-tag" href="#">Lorem ipsum</a>
                                <a class="f-tag b-tag" href="#">literature</a>
                                <a class="f-tag b-tag" href="#">Baroque</a>
                                <a class="f-tag b-tag" href="#">Dress</a>
                                <a class="f-tag b-tag" href="#">Mini</a>
                                <a class="f-tag b-tag" href="#">Skate animal</a>
                                <a class="f-tag b-tag" href="#">Lorem ipsum</a>
                                <a class="f-tag b-tag" href="#">literature</a>
                                <a class="f-tag b-tag" href="#">Baroque</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
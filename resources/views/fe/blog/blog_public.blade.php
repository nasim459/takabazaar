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

                    @php $number = 0; @endphp
                    @foreach($data_view_one as $v)
                    <div class="b-blog-listing__block">
                        <div class="b-blog-listing__block-top">
                            <div class=" view view-sixth">
                                <img data-retina="" src="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" alt="Picture Coming Soon">
                                <div class="b-item-hover-action f-center mask">
                                    <div class="b-item-hover-action__inner">
                                        <div class="b-item-hover-action__inner-btn_group">
                                            <a href="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
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
                                <a href="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" class="m-t-5 f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                                    <b>{{ $v->blog_title }}</b>
                                </a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b">
                                    By <a href="" class="f-more">Md Nasim</a>,
                                    <a class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-hand-o-right"></i> {{ $v->blog_hit_count }} Views</a>,
                                    <a href="" class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-comment-o"></i>12 Comments</a>
                                </div>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary blog-des">
                                    {!! $v->blog_short_desc !!}
                                </div>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                                    <a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}" class="f-more f-primary-b">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="row j-masonry b-col-default-indent b-col-default-indent__top-block">
                        <div class="masonry-gridSizer col-xs-12 col-md-4"></div>

                        @php $number = 0; @endphp
                        @foreach($data_view as $v)
                        <div class="j-masonry-item col-xs-12 col-sm-12 col-md-4">
                            <div class="b-blog-preview">
                                <div class="b-blog-preview__img view view-sixth">
                                    <img data-retina="" src="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" height="160" alt="Picture Coming Soon">
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                <a href="{{ asset('fe/img/blog_pic/'.$v->blog_image) }}" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-blog-preview__content b-diagonal-line-bg-light">
                                    <div class="b-blog-preview__content-padding_box" style="height: 210px;">
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="blog_detail_right_slidebar.html">{{ str_limit($v->blog_title, 45, ' ...') }}</a></p>
                                        <p class="f-blog-preview__content-date f-primary-it">{{$v->updated_at}}</p>
                                        <p class="b-blog-preview__content-text f-blog-preview__content-text">{!! str_limit($v->blog_short_desc, 115, ' ...') !!}</p>
                                    </div>
                                    <div class="b-footer-mini b-alternative-bg">
                                        <a class="f-footer-mini__link f-more f-primary-b" href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}"><i class="fa fa-angle-double-right"></i> Read more</a>
                                        <a class="f-footer-mini-text f-more f-footer-mini-right" href="#"><i class="fa fa-comment"></i> 12 Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="clearfix"></div>
                    <div class="f-center b-remaining">
                        <div class="b-hr-with-btn">
                            <a class="b-btn b-btn--load f-btn b-btn-sm f-btn-load f-btn-sm f-primary-b"><i class="fa fa-spinner"></i> Load more</a>
                        </div>
                    </div>
                </div>
                <div class="visible-xs-block visible-sm-block b-hr"></div>
                @include('fe.blog.include_blog_sidebar')
            </div>
        </div>



    </div>
@endsection
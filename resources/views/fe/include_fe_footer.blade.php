<footer>
    <div class="b-footer-success">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 f-copyright b-copyright">
                    <i class="fa">Developed By <a href="http://ralitsoft.com/" target="_blank"> RalitSoft</a></i> &nbsp; &nbsp;
                    Copyright © 2017 - All Rights Reserved.
                </div>
                <div class="col-sm-8 col-xs-12">
                    <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                        <i class="fa fa-chevron-up"></i>
                    </div>
                    <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                        <ul>
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li class="is-active-bottom-nav"><a href="{{ url('loan-home') }}">Loan</a></li>
                            <li><a href="{{ url('investment-saving') }}">Investment</a></li>
                            <li><a href="{{ url('insurance-life') }}">Insurance</a></li>
                            <li><a href="{{ url('card-credit') }}">Card</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="b-footer-secondary row">
            <div class="col-md-3 col-sm-12 col-xs-12 f-center b-footer-logo-containter">
                <a href=""><img data-retina class="b-footer-logo color-theme" src="{{asset('fe/img/logo-footer.png')}}" alt="Logo"/></a><br>
                <div class="b-footer-logo-text f-footer-logo-text">
                    <p><b>finFObd</b><br>Reliable Adequate Leading Information Technology</p>
                    <div class="b-btn-group-hor f-btn-group-hor">
                        <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
                            <i class="fa fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <h4 class="f-primary-b">Latest blog posts</h4>
                <div class="b-blog-short-post row">
                    <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
                        <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                            <a href="{{ url('/') }}">Amazing post with all the goodies</a>
                        </div>
                        <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
                            March 23, 2013
                        </div>
                    </div>
                    <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
                        <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                            <a href="{{ url('/') }}">Amazing post with all the goodies</a>
                        </div>
                        <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
                            March 23, 2013
                        </div>
                    </div>
                    <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
                        <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                            <a href="{{ url('/') }}">Amazing post with all the goodies</a>
                        </div>
                        <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
                            March 23, 2013
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <h4 class="f-primary-b">contact info</h4>
                <div class="b-contacts-short-item-group">
                    <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                        <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="b-remaining f-contacts-short-item__text">
                            Metro Shopping Mall<br/>
                            Mirpur Road, Dhaka-1209<br/>
                            Dhaka, Bangladesh.<br/>
                        </div>
                    </div>
                    <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                        <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
                            <i class="fa fa-skype"></i>
                        </div>
                        <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                            Skype: ralitsoft
                        </div>
                    </div>
                    <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
                        <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
                            <a href="mailto:frexystudio@gmail.com"> E-Mail: info@ralitsoft.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 ">
                <h4 class="f-primary-b">photo stream</h4>
                <div class="b-short-photo-items-group">
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_1.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_1.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_2.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_2.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_3.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_3.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_4.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_4.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_5.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_5.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_6.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_6.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_7.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_7.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_8.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_8.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column hidden-xs">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_9.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_9.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column hidden-sm hidden-xs">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_10.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_10.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column hidden-sm hidden-xs">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_11.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_11.jpg') }}" alt=""/></a>
                    </div>
                    <div class="b-column hidden-sm hidden-xs">
                        <a class="b-short-photo-item fancybox" href="{{ asset('fe/img/gallery/sm/gallery_12.jpg') }}" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="{{ asset('fe/img/gallery/sm/gallery_12.jpg') }}" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
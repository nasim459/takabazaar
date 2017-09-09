<!--start side-bar-category-->
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
                    @php $number = 0; @endphp
                    @foreach($blog_category as $v)
                        <li>
                            <a href="{{URL::to('blog-category-view/'.$v->id.'/'.$v->category_name)}}" class="f-categories-filter_name"><i class="fa fa-plus"></i> {{ $v->category_name }}</a>
                            <span class="b-categories-filter_count f-categories-filter_count">12</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special">popular postes</h4>

            <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
                <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">

                    @php $number = 0; @endphp
                    @foreach($data_view as $v)
                        <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
                            <div class="b-blog-short-post__item_img">
                                <a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}"><img data-retina src="{{ asset($v->blog_image) }}" height="55" width="60" alt=""/></a>
                            </div>
                            <div class="b-remaining">
                                <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                    <a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}">{{ str_limit($v->blog_title, 20, ' ...') }}</a>
                                </div>
                                <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                                    {{$v->updated_at}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">Information Area</h4>
            <div>
                @php $number = 0; @endphp
                @foreach($blog_category_all as $v)
                    <a href="{{URL::to('blog-category-view/'.$v->id.'/'.$v->category_name)}}" class="f-tag b-tag">{{ $v->category_name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--end side-bar-category-->
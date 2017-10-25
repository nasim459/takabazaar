@section('fe_maincontent')
    <div class="j-menu-container"></div>

    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <div class="pull-left">
                    <h1 class="f-primary-l c-default"><i class="fa fa-home"> Blog Information</i></h1>
                    <div class="f-primary-l f-inner-page-header_title-add c-senary"><i class="fa">What's on your mind & Read your blog here </i></div>
                </div>

                @if(Session::get('fe_error_blog') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-danger" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_error_blog')}} {{Session::put('fe_error_blog', '')}}
                    </div>
                @endif

                @if(Session::get('fe_msg_blog') != NULL)
                    <div class="col-xs-12 col-md-6 m-l-5 alert alert-success" style="font-size: 20px;">
                        <a href="#" class="pull-right" data-dismiss="alert">&times;</a>
                        {{Session::get('fe_msg_blog')}} {{Session::put('fe_msg_blog', '')}}
                    </div>
                @endif

                <div class="pull-right">
                    <div class="t-a-c">
                        <i class="fa f-s-25 m-b-10">Hotline</i><br>
                        <i class="fa f-s-16 c-red m-b-5">01 777 888 757</i><br>
                        <i class="fa f-s-14">info@finFObd.com</i>
                    </div>
                </div>
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
                                <a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}" class="m-t-5 f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                                    <b>{{ $v->blog_title }}</b>
                                </a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b">
                                    By <a href="" class="f-more">{{ $v->user['name'] }}</a>, {{ $v->updated_at }}
                                    <a class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-hand-o-right"></i> {{ $v->blog_hit_count }} Views</a>,
                                    <a href="" class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-comment-o"></i>12 Comments</a>
                                </div>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary blog-des">
                                    {!! $v->blog_short_desc !!}
                                </div>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary blog-des">
                                    {!! $v->blog_long_desc !!}
                                </div>
                                {{--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">--}}
                                    {{--<a href="blog_detail_right_slidebar.html" class="f-more f-primary-b">Read more</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>


                    <div class="b-shortcode-example" style="margin-top: -25px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="j-accordion b-accordion b-accordion--with-standard-icon f-accordion b-accordion--smallindent">
                                    <h3 class="b-accordion__title f-accordion__title"><i class="fa fa-comment"></i> Write Your Comments</h3>
                                    <div class="b-accordion__content">
                                        <div class="b-comment-blog-box" id="comment">
                                            <div class="b-comments-box">
                                                <div class="b-comment__list">
                                                    <ul><a href="#" data-toggle="modal" data-target="#{{$v->id}}comment" class="btn btn-default btn-xs pull-right m-b-10" title="Click to write your comment"><i class="fa fa-comment text-success"> Give your comment</i></a></ul>
                                                    <ul>
                                                        <li>

                                                            @foreach($v->comments as $c)

                                                                <div class="b-comment-item">
                                                                <div class="b-comment__img">
                                                                    @if(isset($c->user['user_image']))
                                                                        <img data-retina src="{{ url('fe/img/blog_users/'.$c->user['user_image']) }}" width="65" height="65" alt="Pic">
                                                                    @else
                                                                        <img data-retina src="{{ asset('fe/img/img_blank.jpg') }}" width="65" height="65" alt="Pic">
                                                                    @endif
                                                                </div>
                                                                <div class="b-comment__descr">
                                                                    <div class="b-comment__descr__data">
                                                                        <div class="b-comment__descr__name f-comment__descr__name f-primary-b">{{ $c->user['name'] }}</div>
                                                                        <div class="b-comment__descr__info f-comment__descr__info">
                                                                            <span class="f-comment__date">{{ $c->created_at }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="f-comment__descr__txt">
                                                                        <p>{{ $c->comment_desc }}</p>
                                                                        <a href="#" data-toggle="modal" data-target="#{{$c->id}}rep" class="f-comment-link-color" title="Click to replay of this comment"><i class="fa fa-reply"></i> Reply</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                                @foreach($v->commentreplaies as $cr)

                                                                    @if( ($cr->comment_id) == ($c->id) )
                                                                        <ul>
                                                                            <li>
                                                                                <div class="b-comment-item">
                                                                                    <div class="b-comment__img">
                                                                                        @if(isset($cr->user['user_image']))
                                                                                            <img data-retina src="{{ url('fe/img/blog_users/'.$cr->user['user_image']) }}" width="55" height="55" alt="Pic">
                                                                                        @else
                                                                                            <img data-retina src="{{ asset('fe/img/img_blank.jpg') }}" width="55" height="55" alt="Pic">
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="b-comment__descr">
                                                                                        <div class="b-comment__descr__data">
                                                                                            <div class="b-comment__descr__name f-comment__descr__name f-primary-b">{{ $cr->user['name'] }}</div>
                                                                                            <div class="b-comment__descr__info f-comment__descr__info">
                                                                                                <span class="f-comment__date">{{ $c->created_at }}</span> <i class="b-comment__infp__slash"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="f-comment__descr__txt">
                                                                                            <p>{{ $cr->comment_replay_desc }}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    @endif

                                                                @endforeach


                                                                <!--start blog_user_replay-->
                                                                <div id="{{$c->id}}rep" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!--start Modal content-->
                                                                        <div class="modal-content m-t-80">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title text-success text-center">
                                                                                    Replay For This Comment
                                                                                </h4>
                                                                            </div>
                                                                            <div class="modal-body" style="overflow: hidden">

                                                                                <div class="col-sm-12">
                                                                                    <div class="b-shortcode-example">
                                                                                        <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary">
                                                                                            <ul>
                                                                                                <li><a href="#tabs-31">Replay</a></li>
                                                                                            </ul>
                                                                                            <div class="b-tabs__content">
                                                                                                <div id="tabs-31" class="clearfix">

                                                                                                    @if(isset(Auth::user()->email))
                                                                                                        {!! Form::open(array('url'=>'blog-user-comment-replay', 'role'=>'form', 'method'=>'POST')) !!}
                                                                                                        <div class="row">
                                                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                            <input type="hidden" name="comment_id" value="{{ $c->id }}">
                                                                                                            <input type="hidden" name="id" value="{{ $v->id }}">
                                                                                                            <input type="hidden" name="first_user" value="replay_user_sign_in">

                                                                                                            <div class="form-group">
                                                                                                                <label for="exampleInputName2" class="col-sm-12 control-label"><i class="fa text-success">Hi <b>{{Auth::user()->name}}</b> write something</i></label>
                                                                                                            </div>

                                                                                                            <div class="col-md-8">
                                                                                                                <div class="b-form-row b-form--contact-size">
                                                                                                                    <label class="b-form-vertical__label" for="create_account_phone">Your replay</label>
                                                                                                                    <textarea class="form-control" name="comment" rows="5" placeholder="What's on your mind..." required></textarea>
                                                                                                                </div>
                                                                                                                <div class="b-form-row">
                                                                                                                    <input type="submit" value="Save Replay" class="btn btn-success" />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        {!! Form::close() !!}

                                                                                                    @else

                                                                                                        {!! Form::open(array('url'=>'blog-user-comment-replay-fe', 'role'=>'form', 'method'=>'POST')) !!}
                                                                                                        <div class="row">
                                                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                            <input type="hidden" name="comment_id" value="{{ $c->id }}">
                                                                                                            <input type="hidden" name="id" value="{{ $v->id }}">
                                                                                                            <input type="hidden" name="first_user" value="replay_user">

                                                                                                            <div class="col-md-4">
                                                                                                                <div class="b-form-row">
                                                                                                                    <label class="b-form-vertical__label" for="create_account_email">Your Name</label>
                                                                                                                    <div class="b-form-vertical__input">
                                                                                                                        <input type="text" name="name" id="create_account_email" class="form-control" placeholder="Write name..." required />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="b-form-row">
                                                                                                                    <label class="b-form-vertical__label" for="create_account_email">Your Email</label>
                                                                                                                    <div class="b-form-vertical__input">
                                                                                                                        <input type="email" name="email" id="create_account_email" class="form-control" placeholder="yourEmail@email.com" required />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="b-form-row">
                                                                                                                    <label class="b-form-vertical__label" for="create_account_password">Your password</label>
                                                                                                                    <div class="b-form-vertical__input">
                                                                                                                        <input type="password" name="password" id="create_account_password" class="form-control" required=""/>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="col-md-8">
                                                                                                                <div class="b-form-row b-form--contact-size">
                                                                                                                    <label class="b-form-vertical__label" for="create_account_phone">Your replay</label>
                                                                                                                    <textarea class="form-control" name="comment" rows="5" placeholder="What's on your mind..." required></textarea>
                                                                                                                </div>
                                                                                                                <div class="b-form-row">
                                                                                                                    <input type="submit" value="Save Replay" class="btn btn-success" />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        {!! Form::close() !!}
                                                                                                    @endif

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                    <div class="col-md-12 f-s-14 f-f-s">

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end Modal content-->

                                                                    </div>
                                                                </div>
                                                                <!--end blog_user_replay-->

                                                                <!--start blog_user_login-->
                                                                <div id="login" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!--start Modal content-->
                                                                        <div class="modal-content m-t-80">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title text-success text-center">
                                                                                    Registration Panel
                                                                                </h4>
                                                                            </div>
                                                                            <div class="modal-body" style="overflow: hidden">
                                                                                <div class="col-md-12">
                                                                                    <div class="col-md-12 f-s-14 f-f-s">

                                                                                        {!! Form::open(array('url'=>'define', 'role'=>'form', 'method'=>'POST')) !!}
                                                                                        <div class="m-t-10">
                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-4" for="email">Email Address:</label>
                                                                                                <input type="email" class="form-control col-sm-6" id="email" placeholder="example@ralitsoft.com">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="col-sm-4" for="email">Password:</label>
                                                                                                <input type="password" class="form-control coll-sm-6" id="username" placeholder="Write password">
                                                                                            </div>

                                                                                            <button type="submit" class="btn btn-success btn-sm">Login</button>
                                                                                            <a data-toggle="modal" data-target="#signUp" class="btn btn-default btn-sm pull-right">Sign Up</a>
                                                                                        </div>
                                                                                        {!! Form::close() !!}
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end Modal content-->

                                                                    </div>
                                                                </div>
                                                                <!--end blog_user_login-->

                                                            @endforeach

                                                        </li>
                                                    </ul>


                                                    <!--start blog_user_comment-->
                                                    <div id="{{$v->id}}comment" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!--start Modal content-->
                                                            <div class="modal-content m-t-80">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title text-success text-center">
                                                                        Write Your Comment
                                                                    </h4>
                                                                </div>
                                                                <div class="modal-body" style="overflow: hidden">

                                                                    <div class="col-sm-12">
                                                                        <div class="b-shortcode-example">
                                                                            <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary">
                                                                                <ul>
                                                                                    <li><a href="#tabs-31">Comment</a></li>
                                                                                </ul>
                                                                                <div class="b-tabs__content">
                                                                                    <div id="tabs-31" class="clearfix">

                                                                                        @if(isset(Auth::user()->email))
                                                                                            {!! Form::open(array('url'=>'blog-user-comment-replay', 'role'=>'form', 'method'=>'POST')) !!}
                                                                                            <div class="row">
                                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                <input type="hidden" name="id" value="{{ $v->id }}">
                                                                                                <input type="hidden" name="first_user" value="comment_user_sign_in">

                                                                                                <div class="col-md-12">

                                                                                                    <div class="form-group">
                                                                                                        <label for="exampleInputName2" class="col-sm-12 control-label"><i class="fa text-success">Hi <b>{{Auth::user()->name}}</b> write something</i></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-8">
                                                                                                    <div class="b-form-row b-form--contact-size">
                                                                                                        <label class="b-form-vertical__label" for="create_account_phone">Your comment</label>
                                                                                                        <textarea class="form-control" name="comment" rows="5" placeholder="What's on your mind..." required></textarea>
                                                                                                    </div>

                                                                                                    <div class="b-form-row">
                                                                                                        <input type="submit" value="Save Comment" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            {!! Form::close() !!}

                                                                                        @else

                                                                                            {!! Form::open(array('url'=>'blog-user-comment-replay-fe', 'role'=>'form', 'method'=>'POST')) !!}
                                                                                            <div class="row">
                                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                <input type="hidden" name="id" value="{{ $v->id }}">
                                                                                                <input type="hidden" name="first_user" value="first_user">

                                                                                                <div class="col-md-4">
                                                                                                    <div class="b-form-row">
                                                                                                        <label class="b-form-vertical__label" for="create_account_email">Your Name</label>
                                                                                                        <div class="b-form-vertical__input">
                                                                                                            <input type="text" name="name" id="create_account_email" class="form-control" placeholder="Write name..." required />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="b-form-row">
                                                                                                        <label class="b-form-vertical__label" for="create_account_email">Your Email</label>
                                                                                                        <div class="b-form-vertical__input">
                                                                                                            <input type="email" name="email" id="create_account_email" class="form-control" placeholder="yourEmail@email.com" required />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="b-form-row">
                                                                                                        <label class="b-form-vertical__label" for="create_account_password">Your password</label>
                                                                                                        <div class="b-form-vertical__input">
                                                                                                            <input type="password" name="password" id="create_account_password" class="form-control" required=""/>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-8">
                                                                                                    <div class="b-form-row b-form--contact-size">
                                                                                                        <label class="b-form-vertical__label" for="create_account_phone">Your comment</label>
                                                                                                        <textarea class="form-control" name="comment" rows="5" placeholder="What's on your mind..." required></textarea>
                                                                                                    </div>

                                                                                                    <div class="b-form-row">
                                                                                                        <input type="submit" value="Save Comment" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            {!! Form::close() !!}

                                                                                        @endif

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="col-md-12 f-s-14 f-f-s">

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                            <!--end Modal content-->

                                                        </div>
                                                    </div>
                                                    <!--end blog_user_comment-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                        <p class="f-blog-preview__content-title f-primary-b"><a href="{{URL::to('blog-details/'.$v->id.'/'.$v->blog_title)}}">{{ str_limit($v->blog_title, 45, ' ...') }}</a></p>
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
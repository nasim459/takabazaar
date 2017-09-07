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
                    <li><i class="fa fa-angle-right"></i><span>User Panel</span></li>
                    {{--<li><i class="fa fa-angle-right"></i><span>Three Columns Right Sidebar v2</span></li>--}}
                </ul>
            </div>
        </div>

        <div class="l-inner-page-container">
            <div class="container">
                <div class="b-shortcode-example">
                    <div class="b-tabs-vertical f-tabs-vertical j-tabs-vertical b-tabs-reset row b-tabs-vertical--secondary">
                        <div class="col-md-3 col-sm-4 b-tabs-vertical__nav">
                            <ul>
                                <li><a class="f-primary-l" href="#tabs-11"><i class="fa fa-suitcase"></i> My Profile</a></li>
                                <li><a class="f-primary-l" href="#tabs-12"><i class="fa fa-pencil-square-o"></i> Write Blog</a></li>
                                <li><a class="f-primary-l" href="#tabs-13"><i class="fa fa-eye"></i> View Blog</a></li>
                                <li><a class="f-primary-l" href="#tabs-14"><i class="fa fa-list"></i> Total Blog</a></li>
                                <li><a class="f-primary-l" href="#tabs-15"><i class="fa fa-home"></i> Heading office</a></li>
                                <li><a class="f-primary-l" href="#tabs-16"><i class="fa fa-comments"></i> Our team</a></li>
                                <li><a class="f-primary-l" href="#tabs-16">&nbsp;</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-8 b-tabs-vertical__content">
                            <div id="tabs-11">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">Personal Information</i></h3>
                                    <div class="col-md-8 well">
                                        <dl class="dl-horizontal">
                                            <dt>Name :</dt>
                                            <dd>Nasim Ralit Soft</dd>
                                            <dt>Email Address :</dt>
                                            <dd>ralitsoft@gmail.com</dd>
                                        </dl>
                                        <br>
                                        <a href="" class="btn btn-default btn-sm m-t-5 pull-right"><i class="fa fa-edit"> Edit</i></a>
                                    </div>
                                    <div class="col-md-3">
                                        {{--<img src="{{ url('fe/img/blog_users/nasim.jpg') }}" class="img-thumbnail" alt="Cinque Terre" height="150">--}}
                                        <img src="{{ url('fe/img/blog_users/img_blank.jpg') }}" class="img-thumbnail" alt="Cinque Terre" height="150">
                                        <br>
                                        <a href="" class="btn btn-default btn-sm m-t-5"><i class="fa fa-edit"> Picture Edit</i></a>
                                    </div>
                                </div>
                            </div>

                            <div id="tabs-12">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">Write your blog here</i></h3>
                                    <div class="col-md-12 f-s-14 f-f-s" style="overflow: hidden;">

                                        {!! Form::open(array('url'=>'blog-user-post-insert', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                        <div class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <input type="hidden" name="l_id">

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Category Select:</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="category_id" required>
                                                        <option value="1">SME</option>
                                                        <option value="2">Car</option>
                                                        <option value="3">Home</option>
                                                        <option value="4">Personal</option>
                                                        <option value="5">Others</option>
                                                        <option value="6">Working Capital</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName2" class="col-sm-4 control-label">Blog Title:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="b_title" class="form-control" id="exampleInputName2" placeholder="Write title..." required>
                                                </div>

                                                <div class="col-sm-4">
                                                    <input type="file" class="m-t-5" name="image">
                                                </div>
                                            </div>
                                            <hr>

                                            {{--<div class="form-horizontal">--}}
                                            <div class="form-group">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <span class="text-success"><b>Short Description</b></span>
                                                    <textarea name="s_desc" class="ckeditor" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="col-sm-10 col-sm-offset-1 m-t-15">
                                                    <span class="text-success"><b>Loan Description</b></span>
                                                    <textarea name="l_desc" class="ckeditor" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-offset-4 col-sm-10 m-t-15">
                                                    <input type="submit" value="Post" class="btn btn-success col-sm-4">
                                                </div>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>

                                    <i class="fa m-b-5"></i>


                                </div>
                            </div>

                            <div id="tabs-13">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">View Blog At A Glance</i></h3>
                                    <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                                </div>
                            </div>
                            <div id="tabs-14">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b"><i class="fa">Total Blog</i></h3>
                                    <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                                </div>
                            </div>
                            <div id="tabs-15">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b">Content heading 5</h3>
                                    <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                                </div>
                            </div>
                            <div id="tabs-16">
                                <div class="b-tabs-vertical__content-text">
                                    <h3 class="f-tabs-vertical__title f-primary-b">Content heading 6</h3>
                                    <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="b-hr-light"/>
            </div>
        </div>



    </div>
@endsection
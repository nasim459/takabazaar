<?php

/*
|--------------------------------------------------------------------------
| Developed By RalitSoft (www.ralitsoft.com)
|--------------------------------------------------------------------------
*/

//----Login Panel
//Route::get('form', 'HomeController@form_people');
Route::get('login', 'HomeController@login_people')->name('login');

################################################
########### Auth check Start       #############
################################################

//=====================================Start Back_End Route=============================================
//----Loan Controller

Route::group(['middleware' => ['web', 'auth', 'roles'], 'roles' => ['Admin']],
    function () {
        Route::get('loan/{child}', 'loan\LoanController@loan_file_view');
//----Investment Controller
        Route::get('investment/{child}', 'investment\InvestmentController@investment_file_view');
//----Insurance Controller
        Route::get('insurance/{child}', 'insurance\InsuranceController@insurance_file_view');
//----Card Controller
        Route::get('card/{child}', 'card\CardController@card_file_view');
//----Advertise Controller
        Route::get('advertise', 'advertise\AdvertiseController@advertise_file_view');
//----Video Controller
        Route::get('video-info', 'video\VideoController@video_file_view');
//----Header Controller
        Route::get('header/{child}', 'headerimage\HeaderImageController@header_image_file_view');

//----Blog Controller
        Route::get('blog-view', 'blog\BlogController@blog_file_view');
        Route::get('blog-subscriber', 'blog\BlogController@blog_file_view');
        Route::get('blog-settings', 'blog\BlogController@blog_file_view');
        Route::get('blog-category', 'blog\BlogController@blog_file_view');
        Route::post('blog-category-insert', 'blog\BlogCategoryController@blog_category_insert');
        Route::get('blog-user', 'blog\BlogController@blog_file_view');

//----Subscriber Controller
        Route::post('subscriber-insert', 'subscriber\SubscriberController@subscriber_insert');

//----Bank Controller
        Route::get('bank/{child}', 'bank\BankController@bank_file_view');

//----Bank Controller
        Route::get('cardcategory/{child}', 'cardcategory\CardCategoryController@cardcategory_file_view');

//----Applying Controller
        Route::get('apply/{child}', 'applying\ApplyingController@applying_file_view');

//----Info Controller
        Route::get('info/{child}', 'info\InfoController@info_file_view');

//----Form Controller
        Route::get('form/{child}', 'form\FormController@form_file_view');

//-----------form-advertise include data_save & data_update
        Route::post('form-advertise-save', 'form\FormAdvertiseController@save_advertise_form');

//-----------form-video include data_save & data_update
        Route::post('form-video-save', 'form\FormVideoController@save_video_form');

//-----------form-bank include data_save & data_update
        Route::post('form-bank-save', 'form\FormBankController@bank_form_save');

        Route::post('form-loan-save', 'form\FormLoanController@loan_form_save');
        Route::post('form-loan-update', 'form\FormLoanController@loan_form_update');

//-----------form-investment include data_save & data_update
        Route::post('form-investment', 'form\FormInvestmentController@investment_form');

//-----------form-insurance include data_save & data_update
        Route::post('form-insurance', 'form\FormInsuranceController@insurance_form');

        Route::post('form-card-save', 'form\FormCardController@card_form_save');
        Route::post('form-card-debit-save', 'form\FormCardDebitController@card_debit_form_save');

//-----------form-cardcategory include data_save & data_update
        Route::post('form-cardcategory-save', 'form\FormCardCategoryController@cardcategory_form_save');

//-----------form-info include data_save & data_update
        Route::post('form-info', 'form\FormInfoController@info_form');
        Route::post('form-info-contact', 'form\FormInfoController@contact_info_form');


//----Publication Controller
        Route::get('publication/{id}/{status}/{table}', 'publication\PublicationController@publication');
        Route::get('publication-alert/{id}/{status}/{table}', 'publication\PublicationController@publication_alert');

//----ImageUpdate Controller
        Route::post('image-update', 'image\ImageUpdateController@image_update');
        Route::post('image-update-child', 'image\ImageUpdateController@child_image_update');

//----Delete Controller
        Route::post('delete', 'delete\DeleteController@delete');

//----Dash Board Controller
        Route::get('dboard', 'DashBoardController@home_dboard');
        Route::get('dboard-regi', 'DashBoardController@regi_dboard');

    });

//=====================================End Back_End Route==============================================

################################################
########### End Auth check         #############
################################################


//=====================================Start Front_End Route===========================================
//----start api development
Route::get('loan-home-api', 'fe\app\ViewFileController@view_file');
Route::get('investment-api', 'fe\app\ViewFileController@view_file');
Route::get('insurance-api', 'fe\app\ViewFileController@view_file');
Route::get('card-credit-api', 'fe\app\ViewFileController@view_file');
Route::get('card-debit-api', 'fe\app\ViewFileController@view_file');
//----end api development

Route::get('', 'fe\app\ViewFileController@view_file');
Route::get('loan', 'fe\app\ViewFileController@view_file');
Route::get('investment', 'fe\app\ViewFileController@view_file');
Route::get('insurance', 'fe\app\ViewFileController@view_file');
Route::get('card', 'fe\app\ViewFileController@view_file');
Route::get('loan-home', 'fe\app\ViewFileController@view_file');
//Route::get('loan-home/{person}', 'fe\app\ViewFilePersonController@view_file_person');
Route::get('loan-car', 'fe\app\ViewFileController@view_file');
Route::get('loan-personal', 'fe\app\ViewFileController@view_file');
Route::get('loan-sme', 'fe\app\ViewFileController@view_file');
Route::get('loan-working-capital', 'fe\app\ViewFileController@view_file');
Route::get('loan-others', 'fe\app\ViewFileController@view_file');

//----investment
Route::get('investment-saving', 'fe\app\ViewFileController@view_file');
Route::get('investment-fixed', 'fe\app\ViewFileController@view_file');
Route::get('investment-mutual', 'fe\app\ViewFileController@view_file');

//----insurance
Route::get('insurance-life', 'fe\app\ViewFileController@view_file');
Route::get('insurance-motor-bike', 'fe\app\ViewFileController@view_file');
Route::get('insurance-motor-car', 'fe\app\ViewFileController@view_file');
Route::get('insurance-marine', 'fe\app\ViewFileController@view_file');
Route::get('insurance-fire', 'fe\app\ViewFileController@view_file');
Route::get('insurance-accident', 'fe\app\ViewFileController@view_file');

//----card
Route::get('card-credit', 'fe\app\ViewFileController@view_file');
Route::get('card-debit', 'fe\app\ViewFileController@view_file');

//----blog
Route::get('blog', 'fe\app\ViewFileController@view_file_blog');
Route::get('blog-details/{id}/{blog_title}', 'fe\app\ViewFileController@view_file_details');
Route::post('blog-user-comment-replay', 'fe\app\blog\BlogUserCommentReplayController@blog_user_comment_replay');
Route::get('blog-category-view/{id}/{category_name}', 'fe\app\ViewFileController@view_file_category');
Route::post('blog-user-insert', 'fe\app\blog\BlogUserController@blog_user_insert');
Route::get('blog-user-profile', 'fe\app\ViewFileController@view_file_blog');
Route::post('blog-user-post-insert', 'fe\app\blog\BlogUserPostController@blog_user_post_insert');

//----user working
Route::post('user-apply', 'fe\app\ApplyInfoController@user_apply');
Route::post('user-rating', 'fe\app\reviewRaingController@user_rating');
Route::post('user-review', 'fe\app\reviewRaingController@user_review');

//----information
Route::get('contact-us', 'fe\app\ViewFileController@view_file_blog');
Route::get('about-us', 'fe\app\ViewFileController@view_file_blog');


//=====================================End Front End Template Design==================


//----rough testing
Route::get('get-ip-details', function () {
    $ip = '66.102.0.0';
    $data = \Location::get($ip);
    dd($data);
});

Route::post('/post-sign-in', [
    'as' => 'postSignIn',
    'uses' => 'access\AccessController@postSignIn'
]);

Route::post('/postSignIn-for-user', [
    'as' => 'postSignIn4BlogUserPopUp',
    'uses' => 'access\AccessController@postSignIn4BlogUserPopUp'
]);

Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'access\AccessController@getLogout',
]);

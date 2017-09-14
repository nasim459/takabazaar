<?php

/*
|--------------------------------------------------------------------------
| Developed By RalitSoft (www.ralitsoft.com)
|--------------------------------------------------------------------------
*/

//----Loan Controller-------------------------------------------------------------------
Route::get('loan/{child}', 'loan\LoanController@loan_file_view');
//----Investment Controller-------------------------------------------------------------
Route::get('investment/{child}', 'investment\InvestmentController@investment_file_view');
//----Insurance Controller--------------------------------------------------------------
Route::get('insurance/{child}', 'insurance\InsuranceController@insurance_file_view');
//----Card Controller-------------------------------------------------------------------
Route::get('card/{child}', 'card\CardController@card_file_view');
//----Advertise Controller--------------------------------------------------------------
Route::get('advertise', 'advertise\AdvertiseController@advertise_file_view');





//----Blog Controller---------------------------------------------
Route::get('blog-view', 'blog\BlogController@blog_file_view');
Route::get('blog-subscriber', 'blog\BlogController@blog_file_view');
Route::get('blog-settings', 'blog\BlogController@blog_file_view');
Route::get('blog-category', 'blog\BlogController@blog_file_view');
Route::post('blog-category-insert', 'blog\BlogCategoryController@blog_category_insert');
Route::get('blog-user', 'blog\BlogController@blog_file_view');

//----Subscriber Controller---------------------------------------------
Route::post('subscriber-insert', 'subscriber\SubscriberController@subscriber_insert');


//----Bank Controller---------------------------------------------
Route::get('bank/{child}', 'bank\BankController@bank_file_view');

//----Bank Controller---------------------------------------------
Route::get('cardcategory/{child}', 'cardcategory\CardCategoryController@cardcategory_file_view');

//----Applying Controller---------------------------------------------
Route::get('apply/{child}', 'applying\ApplyingController@applying_file_view');

//----Info Controller---------------------------------------------
Route::get('info/{child}', 'info\InfoController@info_file_view');

//----Form Controller---------------------------------------------
Route::get('form/{child}', 'form\FormController@form_file_view');

//-----------form-advertise include data_save & data_update
Route::post('form-advertise-save', 'form\FormAdvertiseController@save_advertise_form');

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



//----Publication Controller---------------------------------------------
Route::get('publication/{id}/{status}/{table}', 'publication\PublicationController@publication');
Route::get('publication-alert/{id}/{status}/{table}', 'publication\PublicationController@publication_alert');

//----ImageUpdate Controller---------------------------------------------
Route::post('image-update', 'image\ImageUpdateController@image_update');
Route::post('image-update-child', 'image\ImageUpdateController@child_image_update');

//----Delete Controller---------------------------------------------
Route::post('delete', 'delete\DeleteController@delete');







//----Login Panel
Route::get('form', 'HomeController@form_people');
Route::get('login', 'HomeController@login_people');

//----Dash Board Controller------------------------------------------
Route::get('dboard', 'DashBoardController@home_dboard');
Route::get('dboard-regi', 'DashBoardController@regi_dboard');






//=====================================Start Front End Template Design================
Route::get('', 'fe\app\ViewFileController@view_file');
Route::get('loan-home-api', 'fe\app\ViewFileController@view_file');
Route::get('loan', 'fe\app\ViewFileController@view_file');
Route::get('loan-home', 'fe\app\ViewFileController@view_file');
Route::get('loan-car', 'fe\app\ViewFileController@view_file');
Route::get('loan-personal', 'fe\app\ViewFileController@view_file');
Route::get('loan-sme', 'fe\app\ViewFileController@view_file');
Route::get('loan-working-capital', 'fe\app\ViewFileController@view_file');
Route::get('loan-others', 'fe\app\ViewFileController@view_file');

Route::get('investment-saving', 'fe\app\ViewFileController@view_file');
Route::get('investment-fixed', 'fe\app\ViewFileController@view_file');
Route::get('investment-mutual', 'fe\app\ViewFileController@view_file');

Route::get('insurance-life', 'fe\app\ViewFileController@view_file');
Route::get('insurance-motor-bike', 'fe\app\ViewFileController@view_file');
Route::get('insurance-motor-car', 'fe\app\ViewFileController@view_file');
Route::get('insurance-marine', 'fe\app\ViewFileController@view_file');
Route::get('insurance-fire', 'fe\app\ViewFileController@view_file');
Route::get('insurance-accident', 'fe\app\ViewFileController@view_file');

Route::get('card-credit', 'fe\app\ViewFileController@view_file');
Route::get('card-debit', 'fe\app\ViewFileController@view_file');

Route::get('blog', 'fe\app\ViewFileController@view_file_blog');
Route::get('blog-details/{id}/{blog_title}', 'fe\app\ViewFileController@view_file_details');
Route::get('blog-category-view/{id}/{category_name}', 'fe\app\ViewFileController@view_file_category');
Route::post('blog-user-insert', 'fe\app\blog\BlogUserController@blog_user_insert');
Route::get('blog-user-profile', 'fe\app\ViewFileController@view_file_blog');
Route::post('blog-user-post-insert', 'fe\app\blog\BlogUserPostController@blog_user_post_insert');



Route::post('user-apply', 'fe\app\ApplyInfoController@user_apply');
Route::post('user-rating', 'fe\app\reviewRaingController@user_rating');
Route::post('user-review', 'fe\app\reviewRaingController@user_review');

Route::get('contact-us', 'fe\app\ViewFileController@view_file_blog');
Route::get('about-us', 'fe\app\ViewFileController@view_file_blog');
//=====================================End Front End Template Design==================

Route::get('get-ip-details', function () {
    $ip = '66.102.0.0';
    $data = \Location::get($ip);
    dd($data);
});

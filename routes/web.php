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
Route::get('blog-posting', 'blog\BlogController@blog_file_view');
Route::get('blog-subscribers', 'blog\BlogController@blog_file_view');
Route::get('blog-settings', 'blog\BlogController@blog_file_view');


//----Bank Controller---------------------------------------------
Route::get('bank/{child}', 'bank\BankController@bank_file_view');

//----Bank Controller---------------------------------------------
Route::get('cardcategory/{child}', 'cardcategory\CardCategoryController@cardcategory_file_view');

//----Applying Controller---------------------------------------------
Route::get('apply/{child}', 'applying\ApplyingController@applying_file_view');

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
Route::get('loan-home', 'fe\app\ViewFileController@view_file');

Route::get('investment-saving', 'fe\app\ViewFileController@view_file');

Route::get('insurance-life', 'fe\app\ViewFileController@view_file');

Route::get('card-credit', 'fe\app\ViewFileController@view_file');

Route::get('blog', 'fe\app\ViewFileController@view_file_blog');

Route::get('contact-us', 'fe\app\ViewFileController@view_file_blog');
Route::get('about-us', 'fe\app\ViewFileController@view_file_blog');
//=====================================End Front End Template Design==================

<?php

/*
|--------------------------------------------------------------------------
| Developed By RalitSoft (www.ralitsoft.com)
|--------------------------------------------------------------------------
*/

//----Loan Controller---------------------------------------------
Route::get('loan/{child}', 'loan\LoanController@loan_file_view');
//Route::get('loan-personal-view', 'loan\LoanController@personal_loan_view');


//----Investment Controller---------------------------------------------
Route::get('investment-saving', 'investment\InvestmentController@investment_file_view');
Route::get('investment-fixed', 'investment\InvestmentController@investment_file_view');
Route::get('investment-mutual', 'investment\InvestmentController@investment_file_view');


//----Insurance Controller---------------------------------------------
Route::get('insurance/{child}', 'insurance\InsuranceController@insurance_file_view');

//----Card Controller---------------------------------------------
Route::get('card/{child}', 'card\CardController@card_file_view');

//----Advertise Controller---------------------------------------------
Route::get('advertise', 'advertise\AdvertiseController@advertise_file_view');





//----Blog Controller---------------------------------------------
Route::get('blog-posting', 'blog\BlogController@blog_file_view');
Route::get('blog-subscribers', 'blog\BlogController@blog_file_view');
Route::get('blog-settings', 'blog\BlogController@blog_file_view');


//----Bank Controller---------------------------------------------
Route::get('bank/{child}', 'bank\BankController@bank_file_view');
//Route::get('bank-list', 'bank\BankController@bank_ap');
//Route::get('bank-gride', 'bank\BankController@bank_gride_ap');


//----Form Controller---------------------------------------------
Route::get('form/{child}', 'form\FormController@form_file_view');

Route::get('form-loan', 'form\FormController@loan_form_add');
Route::get('form-investment', 'form\FormController@form_file_view');
Route::get('form-insurance', 'form\FormController@form_file_view');
Route::get('form-card', 'form\FormController@form_file_view');
Route::get('form-bank', 'form\FormController@form_file_view');
Route::get('form-advertise', 'form\FormController@form_file_view');

Route::post('form-advertise-save', 'form\FormAdvertiseController@save_advertise_form');
Route::post('form-advertise-update', 'form\FormAdvertiseController@update_advertise_form');
Route::post('form-advertise-update-image', 'form\FormAdvertiseController@image_update_advertise_form');

Route::post('form-bank-save', 'form\FormBankController@bank_form_save');
Route::post('form-bank-update', 'form\FormBankController@bank_form_update');
//Route::post('form-loan-update', 'form\FormBankController@loan_form_update');

Route::post('form-loan-save', 'form\FormController@loan_form_save');
Route::post('form-loan-update', 'form\FormLoanUpdateController@loan_form_update');

Route::post('form-investment-save', 'form\FormInvestmentController@investment_form_save');
Route::post('form-investment-update', 'form\FormInvestmentController@investment_form_update');



//----Publication Controller---------------------------------------------
Route::get('publication/{id}/{status}/{table}', 'publication\PublicationController@publication');

//----ImageUpdate Controller---------------------------------------------
Route::post('image-update', 'image\ImageUpdateController@image_update');

//----Delete Controller---------------------------------------------
Route::post('delete', 'delete\DeleteController@delete');







//----Login Panel
Route::get('form', 'HomeController@form_people');
Route::get('login', 'HomeController@login_people');

//----Dash Board Controller------------------------------------------
Route::get('dboard', 'DashBoardController@home_dboard');
Route::get('dboard-regi', 'DashBoardController@regi_dboard');



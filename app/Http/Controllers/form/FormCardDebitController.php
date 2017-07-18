<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormCardDebitController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function card_debit_form_save(Request $request) {
        //dd($request->all());

        $previous_url = url()->previous();
        $data_update = $request->data_ud; //----u_d means data_upDatae
        $cc_id_old = $request->cc_id_old;
        $cc_id_new = $request->cc_id_new;

        if ($cc_id_new != NULL) {
            $cc_id = $cc_id_new;
        } else {
            $cc_id = $cc_id_old;
        }

        //----Start_Data_Insert---------------------------------------------------------------------
        $card = array();
        $card['c_yearly_limit'] = $request->y_limit;
        $card['c_activation_deposit'] = $request->a_deposit;
        $card['c_min_balance'] = $request->m_balance;
        $card['c_daily_limit_atm'] = $request->d_limit_atm;
        $card['c_daily_limit_purchase'] = $request->d_limit_purchase;
        $card['c_reward_installment'] = $request->r_installment;

        $card['c_features_benefits'] = $request->data_fsr;
        $card['c_eligibility'] = $request->data_elig;
        $card['c_requirements'] = $request->data_req;

        $card['bank_id'] = $request->b_id;
        $card['cardcategorie_id'] = $cc_id;

        if ($data_update != 'data_ud') {
            //----insert_data
            DB::table('carddebits')->insert($card);
            Session::put('insert_suc', 'Data Inserted Successfully!');
            return redirect($previous_url);

        } else {
            //----update_data
            DB::table('carddebits')->where('id', $request->c_id)->update($card);
            Session::put('msg_suc', 'Data Updated Successfully!');
            return redirect($previous_url);
        }
        //----End_EMI_Data_Insert-------------------------------------------------------------------
    }
}

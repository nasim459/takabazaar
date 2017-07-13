<?php

namespace App\Http\Controllers\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormCardController extends Controller
{
    //----Loan Information(loan-all_file loan_file_view)
    public function card_form_save(Request $request) {
        //dd($request->all());

        $previous_url = url()->previous();
        $data_update = $request->data_ud; //----u_d means data_upDatae
        //----Start_Data_Insert---------------------------------------------------------------------
        $card = array();
        $card['c_interest_per_day'] = $request->i_p_d;
        $card['c_interest_free_period'] = $request->i_f_p;
        $card['c_over_limit_free'] = $request->o_l_f;
        $card['c_cheque_process_free'] = $request->c_c_p_f;
        $card['c_late_payment_free'] = $request->l_p_f;

        $card['c_features_benefits'] = $request->data_fsr;
        $card['c_eligibility'] = $request->data_elig;
        $card['c_requirements'] = $request->data_req;

        $card['bank_id'] = $request->b_id;
        $card['cardcategorie_id'] = $request->cc_id;

        if ($data_update != 'data_ud') {
            //----insert_data
            DB::table('cards')->insert($card);
            Session::put('insert_suc', 'Data Inserted Successfully!');
            return redirect($previous_url);

        } else {
            //----update_data
            DB::table('cards')->where('id', $request->c_id)->update($card);
            Session::put('msg_suc', 'Data Updated Successfully!');
            return redirect($previous_url);
        }
        //----End_EMI_Data_Insert-------------------------------------------------------------------
    }
}

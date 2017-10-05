<tbody>

@php $number = 0; @endphp
@foreach($loan_view as $v)
<tr>
    <td class="col-xs-12 col-sm-2 text-success">
        <img src="{{ asset($v->bank->bank_image_url) }}" height="20px" width="30px" alt="pic">
        {{$v->bank->bank_name}}
    </td>
    <td class="col-xs-12 col-sm-2">{{$v->loan_interest_rate}}%</td>
    <td class="col-xs-12 col-sm-2">{{$v->loan_monthly_interest}} BDT</td>
    <td class="col-xs-12 col-sm-2">{{$v->loan_interest_payable}} BDT</td>
    <td class="col-xs-12 col-sm-3">
        {{$v->loan_period}} Years <span class="pull-right">{{$v->loan_amount}} BDT</span>
    </td>
    <td class="col-xs-12 col-sm-1">
        <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#{{$v->id}}" title="Details Information"><i class="fa fa-list"></i></a>
    </td>
</tr>

<!--start detailsInfo -->
<div id="{{$v->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!--start Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-success text-center">Details Information</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="col-md-8 col-md-offset-1 f-s-14 f-f-s">
                        <i class="fa f-s-20 text-success m-b-10">{{$v->bank->bank_name}}</i>
                        <dl class="dl-horizontal">
                            <dt>Interest Rate :</dt>
                            <dd>{{$v->loan_interest_rate}}%</dd>
                            <dt>Monthly Interest :</dt>
                            <dd>{{$v->loan_monthly_interest}}BDT</dd>
                            <dt>Total Payable Interest :</dt>
                            <dd>{{$v->loan_interest_payable}} BDT</dd>
                            <dt>Loan Period :</dt>
                            <dd>{{$v->loan_period}} Years </dd>
                            <dt>Loan Amount :</dt>
                            <dd>{{$v->loan_amount}} BDT</dd>
                        </dl>
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
<!--end detailsInfo -->
@endforeach

</tbody>


//---------------------------------------------start_rating_code-----------------------------
$count = count($apply_view);
echo 'Count ='. $count.'<br>';

//echo $apply_view[5]->loan_id;
foreach ($apply_view as $v){
$loan_id = $v->loan_id;
$user_rating_star = $v->user_rating_star;
echo $loan_id.' = '.$user_rating_star.'<br>';
}
echo '----------'.'<br>';


$loan_id_count = 0;

$loan = array();
$loan_count = array();

foreach ($apply_view as $v){
$loan_id = $v->loan_id;
$user_rating_star = $v->user_rating_star;
//echo $loan_id.' = '.$user_rating_star.'<br>';

$rating_count = 0;
$loan_id_count = 0;

foreach ($apply_view as $vv){

if($loan_id == $vv->loan_id){
$user_rating_star = $vv->user_rating_star;

$rating_count = $rating_count + $user_rating_star;
$loan_id_count = $loan_id_count + 1;

$loan[$loan_id] = $rating_count;
$loan_count[$loan_id] = $loan_id_count;
}

}

}
echo '<pre>';
            print_r($loan);
            print_r($loan_count);

            echo '----'.'<br>';

            $keys = array_keys($loan);
            foreach ($keys as $key) {
                echo $loan_id_rating[$key] = $loan[$key]/$loan_count[$key].'<br>';
            }
            echo '----'.'<br>';


            //dd($apply_view);
            exit();

//---------------------------------------------end_rating_code-----------------------------
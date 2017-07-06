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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Dashboard</h2></div>

                <div class="panel-body">
                <center>
                <table width="90%" style='margin:20px'>
                <tr>
                <td valign='top' >

                    <h3>Advertiser Stats</h3>
                    <p>Available Balance: <strong>{{ $user->advertiser_balance/100}}</strong></p>
                    <p>Spend Today: <strong>{{ $spent_today/100}}</strong></p>
                    <p>Average CTR Today: <strong>{{ $ctr_today }}%</strong></p>
                    <p>Ad Clicks Today: <strong>{{ $clicks_today }}</strong></p>
                    <p>Ad Impressions Today: <strong>{{ $impressions_today }}</strong></p>
                    </td>
                    <td valign='top' >
                    <h3>
                    Publisher Stats
                    </h3>

                    <p>Unpaid Earnings: <strong>{{ $user->publisher_balance/100 }}</strong></p>

                    <p>Earned Today: <strong>{{ $earned_today/100}}</strong></p>


                    </td>
                    </tr>
                    </table>
                    </center>

                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div>
@endsection --}}

@extends('dashboard.layouts.dashlayout')

@section('content')

<div class="content-header">
  <h3>
    Dashboard
  </h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
  </ol>
</div>

<section class="content">
  <div class="row">
    @include('dashboard.layouts.tiker')

    <div class="col-lg-6 col-12">
      <a class="box box-link-pop text-center" href="javascript:void(0)">
        <div class="box-body">
          <p class="font-size-40 text-pink">
            <i class="fa fa-money text-muted mr-5 mb-20"></i><br>
            <strong>${{Auth::user()->balance}}</strong>
          </p>
        </div>
      </a>
    </div>

    <div class="col-lg-6 col-12">
      <a class="box box-link-pop text-center" href="javascript:void(0)">
        <div class="box-body">
          <p class="font-size-40 text-pink">
            <i class="fa fa-money text-muted mr-5 mb-20"></i><br>
            <strong>0.00000BTC</strong>
          </p>
        </div>
      </a>
    </div>





    <div class="col-lg-8 col-12">
      <!-- BTC live chart -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">LIVE GROWTH MARGIN</h4>

          <div class="box-tools pull-right">
            Real time
          </div>
        </div>
        <div class="box-body">
          <div id="interactive" style="height: 300px;"></div>
        </div>
        <!-- /.box-body-->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-xl-4 col-12">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Buy Order</h4>
          <div class="box-controls pull-right">
            Total 512 8549 ETC
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive buyorder">
            <table class="table no-margin no-border">
              <thead>
                <tr class="bg-dark">
                  <th>Amount</th>
                  <th>Price</th>
                  <th>Total BPL</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-warning">
                  <td>1.845126523</td>
                  <td>17800.00</td>
                  <td>23000.00</td>
                </tr>
                <tr class="">
                  <td>2.21548756</td>
                  <td>13950.00</td>
                  <td>77201.00</td>
                </tr>
                <tr class="">
                  <td>8.00200000</td>
                  <td>19555.22</td>
                  <td>35000.00</td>
                </tr>
                <tr class="">
                  <td>8.00200000</td>
                  <td>19555.22</td>
                  <td>35000.00</td>
                </tr>
                <tr class="text-warning">
                  <td>8.00200000</td>
                  <td>19555.22</td>
                  <td>35000.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-8 col-12">
      <!-- BTC live chart -->
      <div class="box">
        <div class="box-body">
          <div class="btcwdgt-chart" bw-cash="true" bw-noshadow="true"></div>
        </div>
        <!-- /.box-body-->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-lg-4 col-12">
      <!-- Chart -->
      <div class="box">
        <div
          style="height:492px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;">
          <div style="height:472px; padding:0px; margin:0px; width: 100%;"><iframe
              src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=7&pref_coin_id=1505&graph=yes"
              width="100%" height="468px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"
              style="border:0;margin:0;padding:0;"></iframe></div>
          <div
            style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
            <a href="https://coinlib.io" target="_blank"
              style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency
              Prices</a>&nbsp;by Coinlib</div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-12">
      <!-- Chart -->
      <div class="box">
        <div
          style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
          <div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe
              src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%"
              height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"
              style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
          <div
            style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
            <a href="https://coinlib.io" target="_blank"
              style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency
              Prices</a>&nbsp;by Coinlib</div>
        </div>
      </div>
      <!-- /.box -->
    </div>

  </div>
</section>

@endsection
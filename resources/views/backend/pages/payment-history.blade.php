@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    @include('backend.partials._search')
    <!-- BEGIN CONTENT -->
    <div class="log-payment-index">

        <h1 class="page-title">Payment History</h1>

        <div class="row">
            <div class="col-md-6">
                <div id="w0" class="grid-view">
                    <div class="summary">Showing <b>1-20</b> of <b>602</b> items.</div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><a href="payment-history/index?sort=permit_request_id" data-sort="permit_request_id">TG No.</a></th>
                                <th><a href="payment-history/index?sort=invoice_transaction_id" data-sort="invoice_transaction_id">Transaction ID</a></th>
                                <th><a href="payment-history/index?sort=status" data-sort="status">Status</a></th>
                                <th class="action-column">&nbsp;</th>
                            </tr>
                            <tr id="w0-filters" class="filters">
                                <td>&nbsp;</td>
                                <td>
                                    <input type="text" class="form-control" name="LogPayment[permit_request_id]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="LogPayment[invoice_transaction_id]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="LogPayment[status]">
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-key="3">
                                <td>1</td>
                                <td>03-0818</td>
                                <td>f18b383bb25425e7083247fccce0b341</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/3" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="6">
                                <td>2</td>
                                <td>06-0818</td>
                                <td>d2e05c726fd5ecabd8135c8b9bb2fe24</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/6" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="7">
                                <td>3</td>
                                <td>07-0818</td>
                                <td>db02b890fa6116e77e40f3d6e10a25e8</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/7" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="8">
                                <td>4</td>
                                <td>08-0818</td>
                                <td>50e73578d65df09df9014c2ba2d5391d</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/8" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="9">
                                <td>5</td>
                                <td>09-0818</td>
                                <td>9f984de04dce477cbd8ae74b03d07009</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/9" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="10">
                                <td>6</td>
                                <td>12-0818</td>
                                <td>2cfecc110044939775dad7d1ce97f5df</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/10" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="12">
                                <td>7</td>
                                <td>13-0818</td>
                                <td>f92d7b85605dd36cd221d1256e645a5a</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/12" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="14">
                                <td>8</td>
                                <td>15-0818</td>
                                <td>8a7fcb10d0a62c5aedad85ee17287ea3</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/14" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="15">
                                <td>9</td>
                                <td>16-0818d</td>
                                <td>68cec0c7f222d0a547338f1b522eee0a</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/15" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="17">
                                <td>10</td>
                                <td>16-0818</td>
                                <td>1080f4090cdad1ec0c63406e8f865ef7</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/17" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="18">
                                <td>11</td>
                                <td>17-0818</td>
                                <td>f5b5566046a8bf15cabd1cca5a227a12</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/18" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="19">
                                <td>12</td>
                                <td>18-0818</td>
                                <td>2da57c83c3a4fa36a88b053fe6fe0cf1</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/19" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="20">
                                <td>13</td>
                                <td>19-0818</td>
                                <td>b24b4bd8add6758082b579791d7b6232</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/20" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="21">
                                <td>14</td>
                                <td>20-0818</td>
                                <td>19139bbb39685cd6a6de3903fafb56a8</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/21" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="22">
                                <td>15</td>
                                <td>21-0818</td>
                                <td>5ea4d6fb15bf80370ae8f69f0cc7181e</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/22" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="23">
                                <td>16</td>
                                <td>22-0818</td>
                                <td>b4470615b6e03f2ad91798325c45f3ad</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/23" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="29">
                                <td>17</td>
                                <td>01-0918</td>
                                <td>97cba7e83467598defc2740f97648c62</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/29" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="30">
                                <td>18</td>
                                <td>02-0918</td>
                                <td>4864964d50981020aa8917838dbc924c</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/30" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="31">
                                <td>19</td>
                                <td>03-0918</td>
                                <td>3339450deca64604277ba4ccdd45bee5</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/31" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            <tr data-key="35">
                                <td>20</td>
                                <td>30-0818</td>
                                <td>a92c75d1b126442d735576ce325eba1f</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/35" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li class="prev disabled"><span>«</span></li>
                        <li class="active"><a href="payment-history/index?page=1" data-page="0">1</a></li>
                        <li><a href="payment-history/index?page=2" data-page="1">2</a></li>
                        <li><a href="payment-history/index?page=3" data-page="2">3</a></li>
                        <li><a href="payment-history/index?page=4" data-page="3">4</a></li>
                        <li><a href="payment-history/index?page=5" data-page="4">5</a></li>
                        <li><a href="payment-history/index?page=6" data-page="5">6</a></li>
                        <li><a href="payment-history/index?page=7" data-page="6">7</a></li>
                        <li><a href="payment-history/index?page=8" data-page="7">8</a></li>
                        <li><a href="payment-history/index?page=9" data-page="8">9</a></li>
                        <li><a href="payment-history/index?page=10" data-page="9">10</a></li>
                        <li class="next"><a href="payment-history/index?page=2" data-page="1">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection
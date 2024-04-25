@extends('layout.master')
@section('title', 'Report')


@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-md-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" id="Report-tab" data-toggle="tab" href="#Report-Invoices">Expenses</a></li>
                <li class="nav-item"><a class="nav-link" id="Report-tab" data-toggle="tab" href="#Report-Invoice">Invoice</a></li>
                <li class="nav-item"><a class="nav-link" id="Report-tab" data-toggle="tab" href="#Report-detail">Detail</a></li>
            </ul>
            <div class="header-action d-flex">
                <select class="custom-select mr-2">
                    <option>Year</option>
                    <option>Month</option>
                    <option>Week</option>
                </select>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
            </div>
        </div>
    </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="Report-Invoices" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-value float-right text-azure">23%</div>
                                <h4 class="mb-1">$<span class="counter">562</span></h4>
                                <div>Computer</div>
                                <div class="mt-4">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" style="width: 23%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-value float-right text-cyan">52%</div>
                                <h4 class="mb-1">$<span class="counter">2,450</span></h4>
                                <div>Laptop</div>
                                <div class="mt-4">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-cyan" style="width: 52%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-value float-right text-danger">27%</div>
                                <h4 class="mb-1">$<span class="counter">1,258</span></h4>
                                <div>Accessories</div>
                                <div class="mt-4">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-danger" style="width: 27%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-value float-right text-pink">12%</div>
                                <h4 class="mb-1">$<span class="counter">562</span></h4>
                                <div>Others</div>
                                <div class="mt-4">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-pink" style="width: 12%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Order by</th>
                                        <th>From</th>
                                        <th>Date</th>
                                        <th>Paid By</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HP Laptop</td>
                                        <td>Marshall Nichols</td>
                                        <td>Paytem</td>
                                        <td>07 March, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$205</td>
                                    </tr>
                                    <tr>
                                        <td>iMack Desktop</td>
                                        <td>Marshall Nichols</td>
                                        <td>ebay USA</td>
                                        <td>22 July, 2017</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$355</td>
                                    </tr>
                                    <tr>
                                        <td>Logitech USB Mouse, Keyboard</td>
                                        <td>Marshall Nichols</td>
                                        <td>Amazon</td>
                                        <td>28 July, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$40</td>
                                    </tr>
                                    <tr>
                                        <td>MacBook Pro Air</td>
                                        <td>Debra Stewart</td>
                                        <td>Amazon</td>
                                        <td>17 Jun, 2018</td>
                                        <td><i class="payment payment-mastercard" data-toggle="tooltip" title="" data-original-title="payment payment-mastercard"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$800</td>
                                    </tr>
                                    <tr>
                                        <td>Dell Monitor 28 inch</td>
                                        <td>Ava Alexander</td>
                                        <td>Flipkart UK</td>
                                        <td>21 Jun, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$205</td>
                                    </tr>
                                    <tr>
                                        <td>Logitech USB Mouse, Keyboard</td>
                                        <td>Marshall Nichols</td>
                                        <td>Amazon</td>
                                        <td>28 July, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$40</td>
                                    </tr>
                                    <tr>
                                        <td>MacBook Pro Air</td>
                                        <td>Debra Stewart</td>
                                        <td>Amazon</td>
                                        <td>17 Jun, 2018</td>
                                        <td><i class="payment payment-mastercard" data-toggle="tooltip" title="" data-original-title="payment payment-mastercard"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Report-Invoice" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <h4 class="mb-1"><i class="mdi mdi-trending-down text-danger"></i> <span class="counter">562</span></h4>
                                <div class="text-muted-dark">Total Approved</div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="mb-1"><i class="mdi mdi-trending-up text-success"></i> <span class="counter">254</span></h4>
                                <div class="text-muted-dark">Pending Invoice</div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="mb-1"><i class="mdi mdi-trending-neutral text-warning"></i> <span class="counter">982</span></h4>
                                <div class="text-muted-dark">Closed</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Invoices</h3>
                        <div class="card-options">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                                    <span class="input-group-btn ml-2"><button class="btn btn-icon btn-sm" type="submit"><span class="fe fe-search"></span></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Invoice No.</th>
                                        <th>Clients</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th class="w100">Amount</th>
                                        <th class="w150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#LA-5218</td>
                                        <td>vPro tec LLC.</td>
                                        <td>07 March, 2018</td>
                                        <td><i class="payment payment-cirrus" data-toggle="tooltip" title="" data-original-title="payment payment-cirrus"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$4,205</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-1212</td>
                                        <td>BT Technology</td>
                                        <td>25 Jun, 2018</td>
                                        <td><i class="payment payment-bitcoin" data-toggle="tooltip" title="" data-original-title="payment payment-bitcoin"></i></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$5,205</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0222</td>
                                        <td>More Infoweb Pvt.</td>
                                        <td>12 July, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$2,000</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0312</td>
                                        <td>RETO Tech LLC.</td>
                                        <td>13 July, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$10,000</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-5656</td>
                                        <td>SDRAPP Pvt.</td>
                                        <td>27 July, 2018</td>
                                        <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$1,205</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-4515</td>
                                        <td>Kdash Infoweb LLC.</td>
                                        <td>07 March, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$4,205</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-1212</td>
                                        <td>BT Technology</td>
                                        <td>25 Jun, 2018</td>
                                        <td><i class="payment payment-bitcoin" data-toggle="tooltip" title="" data-original-title="payment payment-bitcoin"></i></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$5,205</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0222</td>
                                        <td>More Infoweb Pvt.</td>
                                        <td>12 July, 2018</td>
                                        <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$2,000</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-7845</td>
                                        <td>BT infoweb</td>
                                        <td>25 Jun, 2018</td>
                                        <td><i class="payment payment-bitcoin" data-toggle="tooltip" title="" data-original-title="payment payment-bitcoin"></i></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$5,205</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#LA-5656</td>
                                        <td>SDRAPP Pvt.</td>
                                        <td>27 July, 2018</td>
                                        <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>$1,205</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                                    
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0 justify-content-end">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Report-detail" role="tabpanel">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">#AB0017</h3>
                                <div class="card-options">
                                    <button type="button" class="btn btn-primary"><i class="si si-printer"></i> Print Invoice</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row my-8">
                                    <div class="col-6">
                                        <p class="h3">Company</p>
                                        <address>
                                        Street Address<br>
                                        State, City<br>
                                        Region, Postal Code<br>
                                        ltd@example.com
                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="h3">Client</p>
                                        <address>
                                        Street Address<br>
                                        State, City<br>
                                        Region, Postal Code<br>
                                        ctr@example.com
                                        </address>
                                    </div>
                                </div>
                                <div class="table-responsive push">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <tbody><tr>
                                            <th class="text-center width35"></th>
                                            <th>Product</th>
                                            <th class="text-center" style="width: 1%">Qnt</th>
                                            <th class="text-right" style="width: 1%">Unit</th>
                                            <th class="text-right" style="width: 1%">Amount</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>
                                                <p class="font600 mb-1">Logo Creation</p>
                                                <div class="text-muted">Logo and business cards design</div>
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$1.800,00</td>
                                            <td class="text-right">$1.800,00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>
                                                <p class="font600 mb-1">Online Store Design &amp; Development</p>
                                                <div class="text-muted">Design/Development for all popular modern browsers</div>
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$20.000,00</td>
                                            <td class="text-right">$20.000,00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>
                                                <p class="font600 mb-1">App Design</p>
                                                <div class="text-muted">Promotional mobile application</div>
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$3.200,00</td>
                                            <td class="text-right">$3.200,00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="font600 text-right">Subtotal</td>
                                            <td class="text-right">$25.000,00</td>
                                        </tr>
                                        <tr class="bg-light">
                                            <td colspan="4" class="font600 text-right">Vat Rate</td>
                                            <td class="text-right">20%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="font600 text-right">Vat Due</td>
                                            <td class="text-right">$5.000,00</td>
                                        </tr>
                                        <tr class="bg-green text-light">
                                            <td colspan="4" class="font700 text-right">Total Due</td>
                                            <td class="font700 text-right">$30.000,00</td>
                                        </tr>
                                    </tbody></table>
                                </div>
                                <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>
@stop

@section('popup')

@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/counterup.bundle.js') }}"></script>

<script src="{{ asset('assets/js/core.js') }}"></script>
<script>
$(function() {
    "use strict";
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});
</script>
@stop

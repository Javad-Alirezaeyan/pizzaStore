
@extends('layouts.master')

@section('content')
    <div class="row" id="validation">
        <div class="col-12">
            <div class="card wizard-content">
                <div class="card-block">
                    <h4 class="card-title">Order</h4>

                    <form action="#" class="validation-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6>Cart</h6>
                        <section>
                            <div id="cart2"></div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Address</h6>
                        <section>
                            <div id="customerInfoForm"></div>
                        </section>
                        <!-- Step 3 -->
                        <h6>Pay</h6>
                        <section>
                            <div id="invoice"></div>
                        </section>
                        <!-- Step 4 -->
                        <h6>Final</h6>
                        <section>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                Your Reference  code is : <b>9823498798</b>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


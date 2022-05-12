@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">EMI Calculator for Car Name</div>
                    <div class="card-body">
                        <form name="formval" class="form-horizontal">
                            <div class="form-group">
                                <label for="input" class="control-label">Price <span class="input-group-addon" >(₹)</span></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" id="idLoanAmount" name="pr_amt"
                                            placeholder="Enter Loan Amount">
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label for="input" class="col-sm-12 control-label">Tenure</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" id="idLoanTenure"
                                        placeholder="(in months)" name="period">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label for="input" class="col-sm-12 control-label">Rate of Interest <span class="input-group-addon">(%)</span></label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" id="idROI" name="int_rate">

                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-12">
                                    <button type="button" name="calculate" value="Calculate"     class="btn btn-primary">Calculate EMI</button>
                                    <button type="reset" class="btn btn-link">Reset All</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        EMI Results
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

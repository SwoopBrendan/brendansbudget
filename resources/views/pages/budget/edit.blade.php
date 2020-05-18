@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    {!! $budget->name !!}
                </div>
                <div class="subheader">
                    {!! $budget->name !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Income
                    </div>
                    <div class="card-body">
                        <div class="row text-info">
                            <div class="col-md-4">
                                Gross Income:
                            </div>
                            <div class="col-md-8">
                                R {!! $budget->net_income !!}
                            </div>
                        </div>
                        <hr/>
                        <div class="row text-danger">
                            <div class="col-md-4">
                                Deductions:
                            </div>
                            <div class="col-md-8">
                                R {!! $budget->other_deductions !!}
                            </div>
                        </div>
                        <div class="row text-danger">
                            <div class="col-md-4">
                                Taxes:
                            </div>
                            <div class="col-md-8">
                                R {!! $budget->taxes !!}
                            </div>
                        </div>
                        <hr/>
                        <div class="row text-success">
                            <div class="col-md-4">
                                Net Income:
                            </div>
                            <div class="col-md-8">
                                R {!! $budget->net_income !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Totals
                    </div>
                    <div class="card-body">
                        <div class="row text-info">
                            <div class="col-md-4">
                                Gross Income:
                            </div>
                            <div class="col-md-8">
                                R {!! $budget->net_income !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Monthly Debit Orders
                    </div>
                    <div class="card-body">
                        <div class="row text-info">
                            <div class="col-md-4">
                                Gross Income:
                            </div>
                            <div class="col-md-8">
                                R {!! $budget->net_income !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Monthly Allocations
                    </div>
                    <div class="card-body">
                        <div class="row text-info">
                            <div class="col-md-4">
                                Gross Income:
                            </div>
                            <div class="col-md-8">
                                R {!! $budget->net_income !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('budget.edit', $budget->id) }}" class="btn btn-info w-100">Update</a>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.default')

@section('content')
    <div class="container">
        @forelse($budgets as $budget)
            <div class="row justify-content-start">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {!! $budget->name !!}
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <small>{!! $budget->description !!}</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Net Income
                                </div>
                                <div class="col-md-6">
                                    R {{ $budget->net_income }}
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('budget.show', $budget->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('budget.edit', $budget->id) }}" class="btn btn-info">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="p-2 m-auto">
                            <div class="text-info">You have no budgets</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
@endsection

@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Budget</div>
                    <div class="card-body">
                        <form action="{{ route('budget.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-3 col-form-label text-md-right">
                                    Name*
                                </label>

                                <div class="col-md-9">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           value="{{ old('name') }}"
                                           class="input-group form-control @error('name') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-3 col-form-label text-md-right">
                                    Description*
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                           name="description"
                                           id="description"
                                           value="{{ old('description') }}"
                                           class="input-group form-control @error('description') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gross_income"
                                       class="col-md-3 col-form-label text-md-right">
                                    Gross Income*
                                </label>

                                <div class="col-md-9">
                                    <input type="number"
                                           name="gross_income"
                                           id="gross_income"
                                           placeholder="R"
                                           value="{{ old('gross_income') }}"
                                           class="input-group form-control @error('gross_income') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="other_deductions"
                                       class="col-md-3 col-form-label text-md-right">
                                    Deductions
                                </label>

                                <div class="col-md-9">
                                    <input type="number"
                                           name="other_deductions"
                                           id="other_deductions"
                                           placeholder="R"
                                           value="{{ old('other_deductions') }}"
                                           class="input-group form-control @error('other_deductions') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="taxes"
                                       class="col-md-3 col-form-label text-md-right">
                                    Taxes
                                </label>

                                <div class="col-md-9">
                                    <input type="number"
                                           name="taxes"
                                           id="taxes"
                                           placeholder="R"
                                           value="{{ old('taxes') }}"
                                           class="input-group form-control @error('taxes') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit"
                                            class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

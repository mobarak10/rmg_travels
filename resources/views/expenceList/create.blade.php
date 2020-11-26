@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="m-0">খরচের খাত নিবন্ধন</h5>
                        <div class="btn-group" role="group" aria-label="Action area">
                            <a href="{{ route('expenceList.index') }}" class="btn btn-sm btn-primary" title="All Car">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="col-12 py-2">
                            <form action="{{ route('expenceList.store') }}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <span style="font-size: small">(বিঃ দ্রঃ: সকল <span style="color: red">*</span> চিহ্নিত ফরম অবশ্যই পূরণ করতে হবে)</span>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="expence_sector" class="required">খরচের খাত</label>
                                        <input type="text" name="expence_sector" value="{{ old('expence_sector') }}" class="form-control" id="expence_sector" placeholder="খরচের খাত লিখুন।" required>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


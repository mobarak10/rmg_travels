@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="m-0">নতুন গাড়ি নিবন্ধন</h5>
                        <div class="btn-group" role="group" aria-label="Action area">
                            <a href="{{ route('car.index') }}" class="btn btn-sm btn-primary" title="All Car">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="col-12 py-2">
                            <form action="{{ route('car.store') }}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <span style="font-size: small">(বিঃ দ্রঃ: সকল <span style="color: red">*</span> চিহ্নিত ফরম অবশ্যই পূরণ করতে হবে)</span>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="car_number" class="required">গাড়ির নাম্বার</label>
                                        <input type="text" name="car_number" value="{{ old('car_number') }}" class="form-control" id="car_number" placeholder="গাড়ির নাম্বার লিখুন।" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="licence_expire_date" class="required">লাইসেন্সের মেয়াদ কবে শেষ হবে </label>
                                        <input type="date" class="form-control" id="licence_expire_date" value="{{ date('Y-m-d') }}" required name="licence_expire_date">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="description">গাড়ি সম্পর্কে লিখুন (ঐচ্ছিক)</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="গাড়ি সম্পর্কে বিস্তারিত লিখুন।"></textarea>
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


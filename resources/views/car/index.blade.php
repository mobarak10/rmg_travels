@extends('layouts.app')
@section('content')
    <!-- Main Content -->
    <div class="container">

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="m-0">সকল নিবন্ধিত গাড়ি</h5>

                <div class="btn-group" role="group" aria-label="Action area">
                    <a href="#" onclick="window.print();" title="Print" class="btn btn-secondary btn-sm print-none rounded mr-1"><i aria-hidden="true" class="fa fa-print"></i></a>
                    <!-- for refresh -->
                    <a href="{{ route('car.index') }}" class="btn btn-warning print-none rounded btn-sm mr-1" title="Refresh">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>

                    <a href="{{ route('car.create') }}" class="btn btn-primary btn-sm print-none rounded" title="নতুন গাড়ি নিবন্ধন করুন">
                        <i class="fa fa-plus"></i>
                    </a>
                    <p class="text-center d-none d-print-block">Date: {{ date('Y-m-d') }}</p>
                </div>

            </div>

            <div class="card-body p-0">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>গাড়ির নাম্বার</th>
                        <th>লাইসেন্সের মেয়াদ</th>
                        <th>বিস্তারিত</th>
{{--                        <th>Operator</th>--}}
                        <th class="text-right print-none">কার্যকলাপ</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($cars as $car)
                        <tr>
                            <td class="text-center">{{ $loop->index + 1 }}.</td>
                            <td>{{ $car->car_number }}</td>
                            <td>{{ $car->licence_expire_date->format('d-M-Y') }}</td>
                            <td>{{ $car->description }}</td>
                            <td class="text-right print-none">
                                @can('viewAny', App\Models\User::class)
                                    <a href="{{ route('car.show', $car->id) }}" class="btn btn-success btn-sm" title="Labour cost details.">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                @endcan

                                <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary btn-sm" title="Change labour cost information.">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">নিবন্ধিত কোন গাড়ি নেই।</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


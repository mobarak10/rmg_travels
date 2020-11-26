@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="m-0">Update Site Record</h5>
                            <small></small>
                        </div>

                        <div class="btn-group" role="group" aria-label="Action area">
                            <a href="{{ route('site.index') }}" class="btn btn-primary" title="All Site">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('site.update', $site->id) }}" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Title</label>
                                    <input type="text" value="{{ $site->title }}" name="title" class="form-control" id="name" placeholder="enter Site name or title" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" value="{{ $site->start_date->format('Y-m-d') }}" name="start_date">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="end_date">End Date</label>
                                    <input type="date" id="end_date" class="form-control" value="{{ $site->end_date->format('Y-m-d') }}" name="end_date">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="budget">Budget</label>
                                    <input type="number" class="form-control" value="{{ $site->budget }}" id="budget" name="budget">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="user_id">Site Manager</label>
                                    <select class="form-control selectpicker" name="user_id" id="user_id">
                                        <option value="">Choose One</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}" {{ (in_array($user->id, $site->users->pluck('id')->all())) ? 'selected' : '' }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address">Address </label>
                                    <textarea class="form-control" placeholder="enter site address" name="address" id="address">{{ $site->address }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="description">Details (optional)</label>
                                    <textarea class="form-control" name="details" id="description">{{ $site->details }}</textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')
@section('sidebar')
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/doctor/dashboard" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="/doctor/patient" aria-expanded="false">
                        <i class="fa fa-procedures"></i>
                        <span class="hide-menu">Patient </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="/doctor/appointment" aria-expanded="false">
                        <i class="fa fa-list"></i>
                        <span class="hide-menu">Appointments </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Appointment</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-lg-2">

    </div>
    <div class="col-md-8">
        <div class="card">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/doctor/appointment/{{ $appointments->id }}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <h4 class="card-title">Appointment Info</h4>
                    <div class="form-group row">
                        <label for="Name" class="col-sm-3 text-right control-label col-form-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ $appointments->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $appointments->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number Here" value="{{ $appointments->phone }}">
                        </div>
                    </div>
                    <div class="form-group row" id="row">
                        <label for="lab number" class="col-sm-3 text-right control-label col-form-label">Specialization</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="specialization" id="speciality" placeholder="Specialist" value="{{ $appointments->doctor->specialization }}">
                        </div>
                    </div>
                    <div class="form-group row" id="row">
                        <label for="lab number" class="col-sm-3 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select name="status" class="form-control">
                                <option value="null">---------</option>
                                <option value="Confirmed">Confirmed</option>
                                <option value="Confirmed">Pending</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="row">
                        <label for="lab number" class="col-sm-3 text-right control-label col-form-label">Scheduled For</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="scheduled_for" id="date" placeholder="Date">
                        </div>
                    </div>
                    <div class="form-group row" id="row">
                        <label for="lab number" class="col-sm-3 text-right control-label col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="message"  placeholder="Message">{{$appointments->message}} </textarea>
                        </div>
                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt"></i> Submit</button>
                        <button type="reset" class="btn btn-secondary"><i class="fa fa-window-close"></i> Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-2">

    </div>
@endsection

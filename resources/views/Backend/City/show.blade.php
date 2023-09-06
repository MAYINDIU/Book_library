@extends('Backend.layouts.MasterAdmin')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Single city</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="{{url('dashboard')}}" class="btn btn-success">Dashboard</a>
            <a href="{{url('cities')}}" class="btn btn-primary">Show city</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>City Name</th>
                            <th>State Name</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                                <td>{{ $city->id}} </td>
                                <td>{{ $city->CityName}} </td>
                                <td>{{ $city->StateName}} </td>
                                                               
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    



@endsection
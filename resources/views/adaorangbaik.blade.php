@extends('layouts.app')
@extends('sidebar')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">adaorangbaik.com</h1>
    </div>

    <!-- Form input -->
    <div class="card o-hidden border-0 shadow-lg my-4 col-lg-4">
        <div class="card-body p-10">
            <div class="p-2">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-3">Create a campaign!</h1>
                </div>
                <hr>
                <form class="user" method="post" action="/campaign_insert">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="platform" name="platform" placeholder="adaorangbaik.com">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="url" name="url" placeholder="Url">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" class="form-control form-control-user" id="donation" name="donation" placeholder="Donation">
                        </div>
                        <div class="col-sm-6">
                            <input type="number" class="form-control form-control-user" id="donor" name="donor" placeholder="Donor">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control form-control-user" id="due_date" name="due_date" placeholder="Due Date">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="status" name="status" placeholder="Status">
                        </div>
                    </div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" id="submit">
                </form>
                <hr>
            </div>
        </div>
    </div>
    <!-- End of Form input -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">CAMPAIGN LIST</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Platform</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Donation</th>
                            <th>Donor</th>
                            <th>Due Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Platform</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Donation</th>
                            <th>Donor</th>
                            <th>Due Date</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($Campaigns as $Campaign)
                            <tr>
                                <td>{{ $Campaign->id }}</td>
                                <td>{{ $Campaign->platform }}</td>
                                <td>{{ $Campaign->title }}</td>
                                <td>{{ $Campaign->url }}</td>
                                <td>{{ $Campaign->donation }}</td>
                                <td>{{ $Campaign->donor }}</td>
                                <td>{{ $Campaign->due_date }}</td>
                                <td>{{ $Campaign->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

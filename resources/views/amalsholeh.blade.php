@extends('layouts.app')
@extends('sidebar')

@section('title')
    JDF - adaorangbaik.com
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">amalsholeh.com</h1>
    </div>

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">CAMPAIGN LIST</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Platform</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Donation</th>
                            <th>Donor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Platform</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Donation</th>
                            <th>Donor</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $idx = 1 ?>
                        @foreach($Campaigns as $Campaign)
                            <tr>
                                <td>{{ $idx++ }}</td>
                                <td>{{ $Campaign->platform }}</td>
                                <td>{{ $Campaign->title }}</td>
                                <td>{{ $Campaign->url }}</td>
                                <td>{{ $Campaign->donation }}</td>
                                <td>{{ $Campaign->donor }}</td>
                                <td>{{ $Campaign->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Collapsable Card -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">INSERT CAMPAIGN</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse hide" id="collapseCardExample">
                <div class="card-body">
                    <!-- Form input -->
                    <div class="card o-hidden border-0 shadow-lg my-4 col-lg-4">
                        <div class="card-body p-10">
                            <div class="p-2">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-3">Create a campaign!</h1>
                                </div>
                                <hr>
                                <form class="user" method="post" action="/amalsholeh_insert">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="url" name="url" placeholder="Url">
                                    </div>
                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" id="submit">
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- End of Form input -->
                </div>
            </div>
        </div>
        <!-- End of Collapsable Card -->

</div>
<!-- /.container-fluid -->
@endsection

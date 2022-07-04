@extends('layouts.admin')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Irwansyah Saputra</td>
                            <td>2017-01-09</td>
                            <td><div class="badge badge-success">Active</div></td>
                            <td>
                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hasan Basri</td>
                            <td>2017-01-09</td>
                            <td><div class="badge badge-success">Active</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

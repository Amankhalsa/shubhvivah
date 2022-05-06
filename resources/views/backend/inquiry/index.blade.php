@extends('backend.layouts.admin_master')

@section('title')
All inquiry
@endsection
<!--data table -->
=
@section('content')

<div class="row">
    <div class="container-fluid">
        <h3 class="text-dark mb-4 ">Total inquiry: <span class="badge badge-success">{{count($get_all_inquiry)}}</span>
        </h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">inquiry Info Table</p>
            </div>
            <div class="card-body">

                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">


                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable"
                                    style="width: 100%;" aria-describedby="example_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending" width="15%">Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                width="15%">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                width="15%">Phone</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                width="20%">Message</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 121px;">Start date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>








                                        @foreach($get_all_inquiry as $values)
                                        <tr class="odd">
                            <td class="sorting_1">{{$values->name}}</td>
                            <td> {{$values->email}}</td>
                            <td> {{$values->phone}}</td>
                            <td> {{Str::limit(	$values->message,30,$end='....')}}</td>
                            <td>{{Carbon\Carbon::parse($values->created_at)->diffForHumans()}}</td>
                            <td>
                            <div class="table-data-feature text-left">
                                <a href="{{route('view.user.inquiry',$values->id)}}">
                            <button class="item" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="View">
                                <i class="zmdi zmdi-eye"></i>
                            </button>
                        </a>
                        <a href="{{route('del.user.inquiry',$values->id)}}" id="delete">
                            <button class="item" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </a>
                                </div>
                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- =============== -->
</div>


@endsection

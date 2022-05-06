@extends('backend.layouts.admin_master')

@section('title')
All users
@endsection

@section('content')
{{-- data table  --}}
<div class="row">
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Total Users : <span class="badge badge-success"> {{count($get_users)}} </span></h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">
                    <a href="{{route('add.offline.user')}}">
                    <button class="btn btn-success">Add  user</button>
                </a>
                </p>
            </div>
            <div class="card-body">

                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">


                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable"
                                    style="width: 100%;" aria-describedby="example_info">
                                    <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending"
                                    style="width: 221px;" width="10%">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 269px;">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                    style="width: 126px;">Age</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                    colspan="1" aria-label="Age: activate to sort column ascending"
                                    style="width: 59px;">Phone</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                    colspan="1" aria-label="Start date: activate to sort column ascending"
                                    style="width: 121px;">Start date</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                    colspan="1" aria-label="Salary: activate to sort column ascending"
                                    style="width: 99px;">Action</th>
                            </tr>
                                    </thead>
                                    <tbody>
                    @foreach($get_users as $values )
                    <tr class="even">
            <td class="sorting_1"><img class="rounded-circle mr-2" width="30"
                    height="30" src="{{(!empty($values->profile_photo_path)) ? asset($values->profile_photo_path):url('upload/no_image.jpg')}}">
                    {{Str::limit($values->name,15,$end='....')}}
            </td>
            <td>{{ $values->email}}</td>
            <td> {{ \Carbon\Carbon::parse($values->dob)->diff(\Carbon\Carbon::now())->format('%y years') }}
            </td>
            <td> {{ $values->phone}}</td>
            <td> {{Carbon\Carbon::parse($values->created_at)->diffForHumans()}}</td>
                        <td>
                    <div class="table-data-feature">
                        <a href="{{route('view.register.user',$values->id)}}">
                        <button class="item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="View">
                            <i class="zmdi zmdi-eye"></i>
                        </button>
                         </a>
                         <a href="{{route('edit.register.user',$values->id)}}">
                        <button class="item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                        </button>
                    </a>
                    <a href="{{route('del.offline.user' ,$values->id)}}" id="delete">
                        <button class="item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Delete">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                    </a>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Payament">
                            <i class="zmdi zmdi-more"></i>
                        </button>
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

{{-- data table --}}






@endsection

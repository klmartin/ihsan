@extends('layouts.master')
@section('page_title')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Students List</h6>
            
        </div>

        <div class="card-body">
           

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-students">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allAdmission as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->full_name }}</td>
                                <td>{{ $data->phoneNo }}  {{$data->pobox}} </td>
                                <td> @isset($data->regionid) {{$data->regions['name'] }} @endisset @isset($data->districid) {{ $data->districts['name'] }} @endisset </td>
                                <td> @isset($data->fathername) Father - {{ $data->fathername }} @endisset @isset($data->motherrname) Mother - {{$data->motherrname}} @endisset </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a href="" class="dropdown-item"><i class="icon-eye"></i> View full Admission</a>
                                               
                                                    <a href="" class="dropdown-item"><i class="icon-pencil"></i> Accept Application</a>
                                                    <a href="" class="dropdown-item"><i class="icon-lock"></i> Decline Application</a>
                                            
                                                

                                                {{--Delete--}}
                                               
                                                    <a id="" onclick="" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="" action="" class="hidden">@csrf @method('delete')</form>
                                              
                                            </div>
                                        </div>
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

   

@endsection

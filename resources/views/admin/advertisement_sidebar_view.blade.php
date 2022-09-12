@extends('admin.layout.app')

@section('heading', 'Sidebar Advertisements')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('heading')</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_sidebar_ad_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Photo</th>
                                        <th>URL</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sidebar_ad_data as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('uploads/'.$row->sidebar_ad) }}" style="width: 200px;"></td>
                                            <td>{{ $row->sidebar_ad_url }}</td>
                                            <td>{{ $row->sidebar_ad_location }}</td>
                                            <td class="pt_10 pb_10">
                                            
                                                <a href="" class="btn btn-primary" >Edit</a>
                                                <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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
       
    </section>

</div>
   
@endsection

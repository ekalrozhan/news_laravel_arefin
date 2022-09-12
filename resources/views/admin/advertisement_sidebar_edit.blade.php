@extends('admin.layout.app')

@section('heading', 'Sidebar Advertisements Edit')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('heading')</h1>
            <div class="ml-auto">
                <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> View</a>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ route('admin_sidebar_ad_update', $sidebar_ad_data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Top Ad Section</h5>
                                    <div class="form-group mb-3">
                                        <label>Existing Photo</label>
                                        <div>
                                            <img src="{{ asset('uploads/'.$sidebar_ad_data->sidebar_ad) }}" alt="" style="width: 200px;">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Change Photo</label>
                                        <div>
                                            <input type="file" name="sidebar_ad">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>URL</label>
                                        <input type="text" class="form-control" name="sidebar_ad_url" value="{{ $sidebar_ad_data->sidebar_ad_url }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Location</label>
                                        <div>
                                            <select name="sidebar_ad_location" class="form-control">
                                                <option value="Top"
                                                 @if ($sidebar_ad_data->sidebar_ad_location == 'Top')
                                                selected 
                                                @endif>Top</option> 
                                                <option value="Bottom"
                                                @if ($sidebar_ad_data->sidebar_ad_location == 'Bottom')
                                                selected 
                                                @endif
                                                >Bottom</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                               
                            </div>
                        </div>
                    </div>


                 
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </section>

</div>
   
@endsection

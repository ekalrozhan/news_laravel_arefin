@extends('admin.layout.app')

@section('heading', 'Top Advertisements')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('heading')</h1>
            <div class="ml-auto">
                <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ route('admin_top_ad_update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Top Ad Section</h5>
                                
                                    <div class="form-group mb-3">
                                        <label>Existing Photo</label>
                                        <div>
                                            <img src="{{ asset('uploads/'.$top_ad_data->top_ad) }}" style="width:100%;">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Change Photo</label>
                                        <div>
                                            <input type="file" name="top_ad">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>URL</label>
                                        <input type="text" class="form-control" name="top_ad_url" value="{{ asset($top_ad_data->top_ad_url) }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Status</label>
                                        <div>
                                            <select name="top_ad_status" class="form-control">
                                                <option value="Show" 
                                                @if ($top_ad_data->top_ad_status == 'Show')
                                                    selected
                                                @endif>Show</option> 
                                                <option value="Hide" 
                                                @if ($top_ad_data->top_ad_status == 'Hide')
                                                    selected
                                                @endif>Hide</option>
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

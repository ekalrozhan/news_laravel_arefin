@extends('admin.layout.app')

@section('heading', 'Sidebar Advertisements Create')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('heading')</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_category_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View</a>
            </div>
        </div>
        <div class="section-body">
            <form action="{{ route('admin_category_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                               
                                    <div class="form-group mb-3">
                                        <label>Category Name*</label>
                                        <input type="text" class="form-control" name="category_name" value="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Show on menu?</label>
                                        <div>
                                            <select name="show_on_menu" class="form-control">
                                                <option value="Show">Show</option> 
                                                <option value="Hide">Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Category Order*</label>
                                        <input type="text" class="form-control" name="category_order" value="">
                                    </div>
                                    
                               
                            </div>
                        </div>
                    </div>


                 
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </section>

</div>
   
@endsection

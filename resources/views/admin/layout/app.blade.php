<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    
    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>Admin Panel</title>

    @include('admin.layout.styles')
    @include('admin.layout.scripts')
    
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        @include('admin.layout.nav')



      @include('admin.layout.sidebar')

       @yield('main_content')

    </div>
</div>

@include('admin.layout.scripts_footer')

@if($errors->any())
    @foreach($errors->all() as $error)
    <script>
        iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ $error }}',
        });
</script>
    @endforeach
@endif

@if (session()->get('error'))
    <script>
            iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
            });
    </script>
@endif

@if (session()->get('success'))
    <script>
            iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('success') }}',
            });
    </script>
@endif

</body>
</html>
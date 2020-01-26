<!DOCTYPE html>
<html lang="en">


<body class="{{ $style }} sidebar-collapse">


    
    @yield('content')
    @include('asset.navbar')

    @include('asset.footer')
    @include('asset.script')

</body>

</html>
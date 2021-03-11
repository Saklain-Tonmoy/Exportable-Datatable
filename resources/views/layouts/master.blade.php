<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>

    <div class="row" style="margin-top: 50px;">
    <marquee width="30%" direction="left" scrollamount="12" height="60px" style="color: red; font-size:30px; margin-left: 35%; margin-right:35%;">
    Exportable Datatable Example
    </marquee>
    </div>
    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Exportable DataTable
                </div>
                <div class="card-dody">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('layouts.script')
    @include('layouts.footer')
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')

<body class="app sidebar-mini">
    <!--Navbar-->
    @include('layouts.partials.menu')
    <!-- Sidebar -->
    @include('layouts.partials.aside')
    <!-- Sidebar menu-->
    <main class="app-content" id="app">
        <div class="app-title">
            <div>
                <h1> @yield('title_content')</h1>
                <p> @yield('subtitle_content')</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home fa-lg fa-fw"></i></a>
                </li>
                @yield('breadcrumb')
            </ul>
        </div>
        @yield('content')
    </main>
    @include('layouts.partials.scripts-page')
</body>

</html>
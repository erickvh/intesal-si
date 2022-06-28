<!DOCTYPE html>
<html lang="en">

<!--Head-->
@include('layouts.partials.head')

<body>
    <!-- CONTAINER principal -->
    <div class="container-scroller">
        <!-- MENU -->
        @include('layouts.partials.menu')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- ASIDE -->
            @include('layouts.partials.aside')

            <div class="main-panel">
                <div class=" content-wrapper" id="app">
                    @yield('content')
                </div>
                @include('layouts.partials.footer')

            </div>
        </div>
    </div>
    <!-- Scripts js -->
    @include('layouts.partials.scripts-page')
</body>

</html>
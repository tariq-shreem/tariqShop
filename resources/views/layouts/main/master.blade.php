@include('Layouts.main.navbar')

<div id="content" class="main-content" >
    <div class="container">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@include('Layouts.main.footer')

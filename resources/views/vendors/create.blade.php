@include('Layouts.main.navbar')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content" >
    <div class="container">
        <div class="container">

            @if($errors->any())
           @foreach ($errors->all() as $error )
                {{  $error }}
            @endforeach
            @endif
            <div class="row">
                <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Vendor</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <form method="post" action="{{ route('admin.vendor.store') }}">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                      <input type="name" name="name" class="form-control"
                                         placeholder="vendor name *">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email address *">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="phone *">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password *">
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>



                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>



<!--  BEGIN FOOTER  -->
<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
    </div>
    <div class="footer-section f-section-2">
        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-heart">
                <path
                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
            </svg></p>
    </div>
</div>
<!--  END FOOTER  -->

@include('Layouts.main.footer')

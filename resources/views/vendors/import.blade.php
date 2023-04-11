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
                                    <h4>Import Vendor</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <form method="post" enctype="multipart/form-data" action="{{ route('admin.vendor.import.store') }}">
                              @csrf
                              <input type="file" name="sheet"  class="form-control-file mb-5"/>
                              <input type="submit" value="save" class="btn btn-primary">


                            </form>



                        </div>
                    </div>
                </div>

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>
                <!-- END MAIN CONTAINER -->


            </div>
        </div>
    </div>
</div>



@include('Layouts.main.footer')

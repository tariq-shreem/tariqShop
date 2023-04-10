@extends('layouts.main.master')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/plugins/table/datatable/dt-global_style.css')}}">
@endpush
<!--  BEGIN CONTENT AREA  -->
@section('content')
                <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Show Vendor</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            {{ $dataTable->table() }}

                        </div>
@endsection
        <!--  END FOOTER  -->
@push('scripts')
<script src="{{asset('AdminAssets/plugins/table/datatable/datatables.js')}}"></script>
{!! $dataTable->scripts() !!}
@endpush
    </div>
</div>





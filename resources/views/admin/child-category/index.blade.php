<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    @section('css')
    @include('layouts.datatables_js')
    @endsection
    <x-slot name="content">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="p-5">
                @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <div class="card mb-5 mb-xl-8" style="user-select: auto;">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5" style="user-select: auto;">
                        <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                            <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">All Child
                                Categories</span>
                        </h3>
                        <div class="d-grid gap-2 align-items-center py-1 d-flex">
                            @can('child.category.create')
                            <a href="{{ route('child.category.create') }}" class="btn btn-sm btn-primary">Add New
                                Category</a>
                            @endcan
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3" style="user-select: auto;">
                        <!--begin::Table container-->
                        <div class="table-responsive" style="user-select: auto;">
                            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                <div class="p-5">
                                    <div class="card mb-5 mb-xl-8" style="user-select: auto;">
                                        <div class="card-body pt-3" style="user-select: auto;">
                                            {{ $dataTable->table() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
    <!-- Scripts -->
    @section('scripts')
    @include('layouts.datatables_js')
    {{ $dataTable->scripts() }}
    @endsection
</x-layout.master>
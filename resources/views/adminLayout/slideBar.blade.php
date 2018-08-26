<div class="sidebar" data-color="purple" data-image="{{ asset('admin/img/slidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ asset('assets/img/logo.png') }}" class="simple-text">{{ trans('admin.manager') }}</a>
        </div>
        <ul class="nav">
            <li class="">
                <a href="{{ url('admincp/user') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.manageruser') }}</p>
                </a>
                <a href="{{ url('admincp/tour') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.Tours') }}</p>
                </a>
                <a href="{{ url('admincp/rate') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.Rate') }}</p>
                </a>
                <a href="{{ url('admincp/location') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.Location') }}</p>
                </a>
                <a href="{{ url('admincp/province') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.Province') }}</p>
                </a>
                <a href="{{ url('admincp/plan') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.Plan') }}</p>
                </a>
                <a href="{{ url('admincp/booking') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.Booking') }}</p>
                </a>
                <a href="{{ url('admincp/location_tour') }}">
                    <i class="pe-7s-user"></i>
                    <p>{{ trans('admin.LocationTour') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>

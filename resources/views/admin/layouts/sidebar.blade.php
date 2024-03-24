<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="#" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>CRMIN</h3>

        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/admin/assets/img/user.jpeg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span> Role:{{ auth()->user()->roles[0]['name'] }}</span>
               @if(auth()->user()->hasRole('Admin'))<span> Income:{{ auth()->user()->income }}</span> @endif
            </div>
        </div>
        <div class="navbar-nav w-100">
            @role('Admin|SuperAdmin')
            <a href="{{route('index')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            @endrole
            @role('SuperAdmin')
            <a href="{{route('admins.index')}}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Add Admins</a>
            @endrole
            @role('Admin|SuperAdmin')
            <a href="{{route('order.index')}}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Orders</a>
            @endrole
            @role('SuperAdmin')
            <a href="{{route('logevent.index')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Log Event</a>
            @endrole
            @role('Admin')
            <a href="{{route('myOrder')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>My orders</a>
            @endrole
        </div>
    </nav>
</div>

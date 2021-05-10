<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Sasha</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link active" href="{{ route('adminDashboard') }}"><i
                        class="fa fa-home"></i><span>Ecommerce | Admin Panel</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Product</span>
                </a>
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item">
                        <a href="{{ route('add.product') }}" class="nav-link"><i class="fa fa-plus-circle"></i>Add</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('view.products') }}" class="nav-link">View</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-chart-pie"></i><span>Category</span>
                </a>
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa fa-plus-circle"></i>Add</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">View</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Sub-Category</span>
                </a>
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa fa-plus-circle"></i>Add</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">View</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>

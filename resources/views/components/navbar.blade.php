<div class="app-menu navbar-menu">
    {{-- <!-- LOGO --> --}}
    <div class="navbar-brand-box">
        {{-- <!-- Dark Logo--> --}}
        <a href="./" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('asset') }}/images/ostad-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('asset') }}/images/ostad.png" alt="" height="30" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="./">
                        <i data-feather="home" class="icon-dual"></i>
                        <span data-key="t-dashboards">HOME</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i data-feather="home" class="icon-dual"></i>
                        <span data-key="t-dashboards">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.all') }}">
                        <i data-feather="grid" class="icon-dual"></i>
                        <span data-key="t-dashboards">PRODUCTS</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>

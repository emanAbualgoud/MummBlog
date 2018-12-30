<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item {{ strpos(URL::current(), 'home') != false ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
            <a  href="{{ route('admin.home') }}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">
                            Dashboard
                        </span>
                    </span>
                </span>
            </a>
        </li>
        <li class="m-menu__item {{ strpos(URL::current(), 'statistics') != false ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
            <a  href="{{ route('admin.statistics') }}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-diagram"></i>
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">
                            Dashboard Statistics
                        </span>
                    </span>
                </span>
            </a>
        </li>
        <li class="m-menu__section">
            <h4 class="m-menu__section-text">
                Components
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item m-menu__item--submenu {{ strpos(URL::current(), 'categories') != false ? 'm-menu__item--open m-menu__item--expanded' : '' }}" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-signs-1"></i>
                <span class="m-menu__link-text">
                    Categories
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Categories
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item" aria-haspopup="true" >
                        <a  href="{{ route('admin.categories.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                List All
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item" aria-haspopup="true" >
                        <a  href="{{ route('admin.categories.create') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Create New
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu {{ strpos(URL::current(), 'posts') != false ? 'm-menu__item--open m-menu__item--expanded' : '' }}" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-notes"></i>
                <span class="m-menu__link-text">
                    Posts
                </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">
                                Posts
                            </span>
                        </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.posts.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                               List All
                            </span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.posts.create') }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
                                Create New
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
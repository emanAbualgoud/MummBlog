<header class="s-header header">

    <div class="header__logo">
        <a class="logo" href="{{ route('home') }}">
            <img src="{{ URL::asset('public/web/images/logo-black.png') }}" alt="Homepage">
        </a>
    </div> <!-- end header__logo -->

    {{--<a class="header__search-trigger" href="#0"></a>--}}
    {{--<div class="header__search">--}}

        {{--<form role="search" method="get" class="header__search-form" action="#">--}}
            {{--<label>--}}
                {{--<span class="hide-content">Search for:</span>--}}
                {{--<input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">--}}
            {{--</label>--}}
            {{--<input type="submit" class="search-submit" value="Search">--}}
        {{--</form>--}}

        {{--<a href="#0" title="Close Search" class="header__overlay-close">Close</a>--}}

    {{--</div>  <!-- end header__search -->--}}

    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="current"><a href="{{ route('home') }}" title="">Home</a></li>
            <li class="has-children">
                <a href="#0" title="">Categories</a>
                <ul class="sub-menu">
                    @foreach($siteData['categories'] as $category)
                        <li><a href="{{ route('category-posts', Hashids::encode($category->id)) }}"> {{ $category->name }} </a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ route('about') }}" title="">About</a></li>
        </ul> <!-- end header__nav -->

        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

    </nav> <!-- end header__nav-wrap -->

</header> <!-- s-header -->
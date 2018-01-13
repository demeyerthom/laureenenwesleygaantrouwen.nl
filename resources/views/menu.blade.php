<ul class="navbar-nav mr-auto">
    @foreach($items as $menu_item)

        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
        </li>
    @endforeach
</ul>
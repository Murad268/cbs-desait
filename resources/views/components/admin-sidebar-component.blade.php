<div class="admin__sidebar">
    <ul>
        <li><a class="{{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{ route('admin.index') }}">Dashboard</a></li>
        <li><a class="{{ request()->routeIs('admin.settings.index') ? 'active' : '' }}" href="{{ route('admin.settings.index') }}">Settings</a></li>
        <li><a class="{{ request()->routeIs('admin.services.index') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">Services</a></li>
        <li><a class="{{ request()->routeIs('admin.header__banner.index') ? 'active' : '' }}" href="{{ route('admin.header__banner.index') }}">Header Banner</a></li>
        <li><a class="{{ request()->routeIs('admin.portfolio__filter.index') ? 'active' : '' }}" href="{{ route('admin.portfolio__filter.index') }}">Portfolio Filter</a></li>
        <li><a class="{{ request()->routeIs('admin.portfolio.index') ? 'active' : '' }}" href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
        <li><a class="{{ request()->routeIs('admin.chose_us.index') ? 'active' : '' }}" href="{{ route('admin.chose_us.index') }}">Chose Us Comments</a></li>
        <li><a class="{{ request()->routeIs('admin.chose__us__companies.index') ? 'active' : '' }}" href="{{ route('admin.chose__us__companies.index') }}">Chose Us Companies</a></li>
        <li><a class="{{ request()->routeIs('admin.positions.index') ? 'active' : '' }}" href="{{ route('admin.positions.index') }}">Positions</a></li>
        <li><a class="{{ request()->routeIs('admin.work__proccess.index') ? 'active' : '' }}" href="{{ route('admin.work__proccess.index') }}">Work Proccess</a></li>
        <li><a class="{{ request()->routeIs('admin.team.index') ? 'active' : '' }}" href="{{ route('admin.team.index') }}">Our Team</a></li>
        <li><a class="{{ request()->routeIs('admin.still.index') ? 'active' : '' }}" href="{{ route('admin.still.index') }}">Still Section</a></li>
        <li><a class="{{ request()->routeIs('admin.contact__form.index') ? 'active' : '' }}" href="{{ route('admin.contact__form.index') }}">Contact Form</a></li>
        <li><a class="{{ request()->routeIs('admin.about__us.index') ? 'active' : '' }}" href="{{ route('admin.about__us.index') }}">About Us</a></li>
        <li><a class="{{ request()->routeIs('admin.blogs__categories.index') ? 'active' : '' }}" href="{{ route('admin.blogs__categories.index') }}">Blogs Categories</a></li>
        <li><a class="{{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}" href="{{ route('admin.blogs.index') }}">Blogs</a></li>
        <li><a class="{{ request()->routeIs('admin.section__titles.index') ? 'active' : '' }}" href="{{ route('admin.section__titles.index') }}">Section Descriptions</a></li>
        <li><a onclick="return confirm('are you sure you want to go out?')" href="{{route('logout')}}">Logout</a></li>
    </ul>
</div>

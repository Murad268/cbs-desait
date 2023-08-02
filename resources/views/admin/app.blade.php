<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
    <main class="main">
        <x-admin-sidebar-component />
        <div class="admin__data">
            @yield('content')
        </div>
    </main>
   @include('admin.includes.foot')






</body>

</html>

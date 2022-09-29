<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image: url('frontendtheme/images/banner.jpg');">
    <div>
        <a class="navbar-brand js-scroll-trigger logo-header" href="/">
            <img src="{{asset('frontendtheme/images/logo.png')}}" alt="">
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
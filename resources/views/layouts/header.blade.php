<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ route('home') }}">
                <img src="{{ asset('tabler.svg') }}" class="header-brand-img" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                @include('partials.notifications')

                @include('partials.profile')
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>

<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            @include('partials.search')

            @include('partials.navigations')
        </div>
    </div>
</div>

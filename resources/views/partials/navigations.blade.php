<div class="col-lg order-lg-first">
    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link active"><i class="fe fe-home"></i> Home</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Interface</a>
            <div class="dropdown-menu dropdown-menu-arrow">
                <a href="{{ route('card') }}" class="dropdown-item ">Cards design</a>
                <a href="{{ route('chart') }}" class="dropdown-item ">Charts</a>
                <a href="{{ route('price') }}" class="dropdown-item ">Pricing cards</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
            <div class="dropdown-menu dropdown-menu-arrow">
                <a href="{{ route('map') }}" class="dropdown-item ">Maps</a>
                <a href="{{ route('icon') }}" class="dropdown-item ">Icons</a>
                <a href="{{ route('store') }}" class="dropdown-item ">Store</a>
                <a href="{{ route('blog') }}" class="dropdown-item ">Blog</a>
                <a href="{{ route('carousel') }}" class="dropdown-item ">Carousel</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
            <div class="dropdown-menu dropdown-menu-arrow">
                <a href="{{ route('profile') }}" class="dropdown-item ">Profile</a>
                <a href="{{ route('login') }}" class="dropdown-item ">Login</a>
                <a href="{{ route('register') }}" class="dropdown-item ">Register</a>
                <a href="{{ route('forgot') }}" class="dropdown-item ">Forgot password</a>
                <a href="{{ route('400') }}" class="dropdown-item ">400 error</a>
                <a href="{{ route('401') }}" class="dropdown-item ">401 error</a>
                <a href="{{ route('403') }}" class="dropdown-item ">403 error</a>
                <a href="{{ route('404') }}" class="dropdown-item ">404 error</a>
                <a href="{{ route('500') }}" class="dropdown-item ">500 error</a>
                <a href="{{ route('503') }}" class="dropdown-item ">503 error</a>
                <a href="{{ route('email') }}" class="dropdown-item ">Email</a>
                <a href="{{ route('empty') }}" class="dropdown-item ">Empty page</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="{{ route('form') }}" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('gallery') }}" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('docs.index') }}" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
        </li>
    </ul>
</div>

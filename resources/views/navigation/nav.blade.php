<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">
        Nick Merowsky
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @yield('currentNavAbout')">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item @yield('currentNavExamples')">
                <a class="nav-link" href="/examples">Examples</a>
            </li>
            <li class="nav-item @yield('currentNavAccomplishments')">
                <a class="nav-link" href="/accoms">Accomplishments</a>
            </li>
        </ul>
    </div>
</nav>
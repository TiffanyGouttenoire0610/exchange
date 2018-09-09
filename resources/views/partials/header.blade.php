{{--<div id="header-top">--}}
    {{--<section class="container clearfix">--}}
        {{--<nav class="header-top-nav">--}}
            {{--<ul>--}}
                {{--@if (Auth::guest())--}}
                    {{--<li><a href="{{ url('/login') }}"><i class="icon-user"></i>Login Area</a></li>--}}
                {{--@else--}}
                    {{--<li><a href="{{ url('/logout') }}">Logout</a></li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</nav>--}}
        {{--<div class="header-search">--}}
            {{--<form>--}}
                {{--<input type="text" value="Search here ..." onfocus="if(this.value=='Search here ...')this.value='';" onblur="if(this.value=='')this.value='Search here ...';">--}}
                {{--<button type="submit" class="search-submit"></button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</section><!-- End container -->--}}
{{--</div><!-- End header-top -->--}}
<header id="header">
    <section class="container clearfix">
        <div class="logo">
            <a href="{{ url('/') }}" class="font26">
                <span>Exchange</span>.Simplon
            </a>
        </div>
        <nav class="navigation">
            <ul>
                <li class="current_page_item">
                    <a href="{{ url('/') }}">Accueil</a>
                </li>
                <li>
                    <a href="{{ url('/poser-une-question') }}">Poser une question</a>
                </li>
                <li>
                    <a href="{{ url('/questions') }}">Questions</a>
                </li>
                <li>
                    <a href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </nav>
    </section><!-- End container -->
</header><!-- End header -->
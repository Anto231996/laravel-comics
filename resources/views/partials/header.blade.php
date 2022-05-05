<div class="header-top">
    <div>
        <a href="#">dc power visa</a>
        <a href="#">additional dc sites</a>
    </div>
</div>
<div class="header-nav">
    <div class="wrapper">
        <img src="{{asset("images/dc-logo.png")}}" alt="main dc-logo">
        <nav>
            <ul>
                @foreach ($links as $link)
                <li>
                    <a  class="{{ Route::currentRouteName() == $link['route-name'] ? 'active' : '' }}" href="{{ $link['route-name'] == '' ? '#' : route($link['route-name']) }} ">{{ $link['name'] }}</a>
                </li>  
                @endforeach
            </ul>
        </nav>
    </div>
</div>
<div id="jumbotron-header"></div>
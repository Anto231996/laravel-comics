<div class="footer-top">
    <div class="wrapper">
        <div class="footer-links">
            <nav>
                <h4>dc comics</h4>
                <ul>
                    @foreach ($dcComicsFooterLinks as $link)
                    <li>
                        <a href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                    </li>    
                    @endforeach
                </ul>
            </nav>
            <nav>
                <h4>dc</h4>
                <ul>
                    @foreach ($dcFooterLinks as $link)
                    <li>
                        <a href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                    </li>    
                    @endforeach
                </ul>
            </nav>
            <nav>
                <h4>sites</h4>
                <ul>
                    @foreach ($sitesFooterLinks as $link)
                    <li>
                        <a href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                    </li>    
                    @endforeach
                </ul>
            </nav>
            <nav>
                <h4>shop</h4>
                <ul>
                    @foreach ($shopFooterLinks as $link)
                    <li>
                        <a href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                    </li>    
                    @endforeach
                </ul>
            </nav>
            <p>All Site Content TM and 2020 DC Entertainment, unless otherwise <span class="color-blue">noted here</span>. All right reserved. <span class="color-blue">Cookies Setting</span></p>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="wrapper">
        <a id="sign-up" href="#">sign-up now!</a>
        <div id="social">
            <h3 class="color-blue">follow us</h3>
            <a href="#">
                <img src="{{asset("images/footer-facebook.png")}}" alt="facebook logo">
            </a>
            <a href="#">
                <img src="{{asset("images/footer-twitter.png")}}" alt="twitter logo">
            </a>
            <a href="#">
                <img src="{{asset("images/footer-youtube.png")}}" alt="youtube logo">
            </a>      
            <a href="#">
                <img src="{{asset("images/footer-pinterest.png")}}" alt="pinterest logo">
            </a>
            <a href="#">
                <img src="{{asset("images/footer-periscope.png")}}" alt="periscope logo">
            </a>
        </div>
    </div>
</div>
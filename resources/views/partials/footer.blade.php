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
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="wrapper">
        <a id="sign-up" href="#">sign-up now!</a>
        <div id="social">
            <h3>follow us</h3>
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
<footer>
    <div class="container d-flex justify-content-between align-items-center w-100 pb-4 pt-4">
        <a href="#"><img src="/img/logo.png" class="logo-footer" alt="boolearn footer logo"></a>
        <div>
            <ul class="list-unstyled d-flex">
                <li class="mx-2"><a href="#" class="social-links"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="mx-2"><a href="#" class="social-links"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="mx-2"><a href="#" class="social-links"><i class="fa-brands fa-linkedin"></i></a></li>
                <li class="mx-2"><a href="#" class="social-links"><i class="fa-brands fa-reddit-alien"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-3" id="top-foot">
            @foreach($topFooterContent as $sectionTitle => $items)
                <div class="col pb-5">
                    <h5 class="list-title text-uppercase font-weight-lighter pb-3">{{$sectionTitle}}</h5>
                    <ul class="p-0 list-unstyled">
                        @foreach ($items as $item)
                            <li class="pb-2"><a href="#" class="footer-links">{{$item}}</a></li>
                        @endforeach
                    </ul>
                    <a href="#" class="see-more">see more</a>
                </div>
            @endforeach
        </div>
      </div>
    <div class="container d-flex justify-content-between" id="bottom-foot">
        <div class="d-flex">
            @foreach($bottomFooterContent as $sectionTitle => $items)
                <div class="bottom-list">
                    <h5 class="list-title"><strong>{{$sectionTitle}}</strong></h5>
                    <ul class="p-0 list-unstyled">
                        @foreach ($items as $item)
                            <li class="pb-2"><a href="#" class="footer-links">{{$item}}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="pr-3">
            <h5 class="pb-2 select-lang"><strong>Choose Language</strong></h5>
            <div class="d-flex">
                <select class="form-select mx-2" aria-label="Default select example">
                    <option selected>English</option>
                    <option value="1">Italian</option>
                </select>
                <button class="btn border select-lang">Apply</button>
            </div>
        </div>
    </div>
    <div class=" container d-flex justify-content-between flex-wrap-reverse body-small pt-3">
        <p class="copyright">© 2024 Boolearn. All rights reserved.<br>进入网络空间</p>
        <div class="app-download-links large-column d-flex justify-content-between p-0 mb-5">
            <a href="#">
                <img src="/img/app-store-btn.png" class="app-btn" alt="App Store-button">
            </a>
            <a href="#">
                <img src="/img/google-play-btn.png" class="app-btn" alt="Google Play-button">
            </a>
        </div>
    </div>
</footer>


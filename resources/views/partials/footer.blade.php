<footer>
    <div class="container d-flex justify-content-between align-items-center w-100 pb-5 pt-5">
        <a href="#"><img src="{{Vite::asset('/resources/img/vectorlogo-0.png')}}" class="logo-footer" alt="boolearn-footer-logo"></a>
        <div>
            <ul class="list-unstyled d-flex mb-0">
                <li class="mx-2"><a href="https://www.facebook.com/?locale=it_IT" target="_blank" class="social-links"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="mx-2"><a href="https://twitter.com/?lang=it" target="_blank" class="social-links"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="mx-2"><a href="https://it.linkedin.com/?src=go-pa&trk=sem-ga_campid.20677489327_asid.153452322614_crid.677545198980_kw.linkedin_d.c_tid.kwd-148086543_n.g_mt.e_geo.1008089&mcid=7120409760495009793&cid=&gclid=Cj0KCQiAkeSsBhDUARIsAK3tieesIPeYjr2BXvqWmoaQRjgCyUw8kSmNsRPxLwDcms5lF4q2Ua3rOmgaArXiEALw_wcB&gclsrc=aw.ds" target="_blank" class="social-links"><i class="fa-brands fa-linkedin"></i></a></li>
                <li class="mx-2"><a href="https://www.reddit.com/?rdt=42431" target="_blank" class="social-links"><i class="fa-brands fa-reddit-alien"></i></a></li>
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
    <div class="container d-flex justify-content-between flex-wrap" id="bottom-foot">
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
            <a href="https://www.apple.com/app-store/" target="_blank">
                <img src="{{Vite::asset('/resources/img/app-store-btn.png')}}" class="app-btn" alt="App Store-button">
            </a>
            <a href="https://play.google.com/store/games?hl=en&gl=US&pli=1" target="_blank">
                <img src="{{Vite::asset('/resources/img/google-play-btn.png')}}" class="app-btn" alt="Google Play-button">
            </a>
        </div>
    </div>
</footer>


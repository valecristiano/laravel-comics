
 <footer>
      <section>
        <div class="footer">
          <div class="footer-bg text-white">
            <div class="container d-flex justify-content-between pt-3 pb-5 ">
              <div class="row mb-4">
                  @foreach($links as $link)
                  <div class="col-6 col-md-3">
                    <h6>{{$link['title']}}</h6>
                    <ul class="list-unstyled text-secondary">
                        @foreach($link['menu_links'] as $element)
                        <li><a href="{{$element['url']}}">{{$element['text']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                    @endforeach
              </div>
              <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dcLogo" />
            </div>
          </div>
        </div>
      </section>

      <section>
      <div id="follow-us" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center py-3 ">
          <button class="btn btn-outline-primary text-white p-2 rounded-0 border-2">SIGN-UP NOW!</button>
          <div class="icons d-flex align-items-center">
            <a href="#" class="px-3 text-decoration-none fw-bold fs-6">
              FOLLOW US
            </a>
            <a href="#" class="px-1">
              <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook" />
            </a>
            <a href="#" class="px-1">
              <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter" />
            </a>
            <a href="#" class="px-1">
              <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Youtube" />
            </a>
            <a href="#" class="px-1">
              <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest" />
            </a>
            <a href="#" class="px-1">
              <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope" />
            </a>
          </div>
        </div>
      </div>
    </section>
    </footer>
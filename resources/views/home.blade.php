@extends("layouts.layout")

@section('title', 'Homepage')

@section("content")
<!-- Jumbotron -->
<section>
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron" />
    </div>
</section>
<!-- Sezione comics -->
<section class="container mt-3">
    <div id="comics ">
        <div class="row g-0">
            @foreach($comics as $comic)
            <x-card 
                :src="$comic['thumb']" 
                :alt="$comic['series']"
            > 
                {{ $comic['title'] }}
            </x-card>
            @endforeach
        </div>
      </div>
    </section>
<!-- Sezione servizi -->
     <!-- <section>
      <div class="service-section d-flex justify-content-around">
          <div class="d-flex gap-2 align-items-center flex-wrap">
            @foreach($servicesLinks as $link)
            <img class="img-fluid" src="{{ Vite::asset('resources/img/' . $link['src']) }}" alt="{{$link['text']}}" />
            <p>{{$link['text']}}</p>
            @endforeach
          </div>
      </div>
    </section> -->

@endsection
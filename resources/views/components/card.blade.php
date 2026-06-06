@props (['src', 'alt'])

<figure class="comic-img-figure col-4 col-lg-2">
      <div class="comic-img-main">
        <img src="{{$src}}" alt="{{$alt}}" />
      </div>
      <figcaption> {{$slot}} </figcaption>
</figure>


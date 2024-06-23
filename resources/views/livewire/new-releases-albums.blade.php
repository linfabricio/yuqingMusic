<div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Categorias que te pueden gustar</h4>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow">
                    @foreach ($this->albums['albums']['items'] as $index => $album)
                        <div class="col-md-2 mb-4">
                            <a href="{{ $album['external_urls']['spotify'] }}" class="card-link" target="_blank">
                                <div class="card h-100 card-transition">
                                    <img class="card-img-top img-thumbnail" src="{{ $album['images'][0]['url'] }}"
                                        alt="{{ $album['name'] }}" style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <p class="card-text mb-0" style="color: white;">{{ $album['name'] }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

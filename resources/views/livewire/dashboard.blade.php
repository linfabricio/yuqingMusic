<div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Bienvenido al Top 10 de tu ubicación actualmente!</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                @foreach ($this->featuredPlaylists['playlists']['items'] as $playlist)
                    <div class="col-md-2 mb-4">
                        <a href="{{ $playlist['external_urls']['spotify'] }}" class="card-link" target="_blank">
                            <div class="card h-100 card-transition">
                                <img class="card-img-top img-thumbnail" src="{{ $playlist['images'][0]['url'] }}"
                                    alt="{{ $playlist['name'] }}" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <p class="card-text mb-0" style="color: white;">{{ $playlist['description'] }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Categorias que te pueden gustar</h4>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow">
                    @foreach ($this->categories['categories']['items'] as $index => $category)
                        <div class="col-md-2 mb-4">
                            <div class="card h-100 card-transition">
                                <img class="card-img-top img-thumbnail" src="{{ $category['icons'][0]['url'] }}"
                                    alt="{{ $category['name'] }}" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <button class="btn btn-primary"
                                        wire:click.prevent="getPlaylistFromCategory('{{ $category['id'] }}')">{{ $category['name'] }}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>
        @if (!empty($this->categoriesPlaylist))
            <div class="mt-4">
                <h4>Listas de Reproducción {{ $this->categorySelected['name'] }}</h4>
                <div class="row">
                    @foreach ($this->categoriesPlaylist['playlists']['items'] as $playlist)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 card-transition">
                                <div class="card-img-container d-flex justify-content-center align-items-center">
                                    <img src="{{ $playlist['images'][0]['url'] }}" class="card-img-top img-thumbnail"
                                        alt="{{ $playlist['name'] }}"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title mt-2">{{ $playlist['name'] }}</h5>
                                    <p class="card-text">{{ $playlist['description'] }}</p>
                                    <a href="{{ $playlist['external_urls']['spotify'] }}" target="_blank"
                                        class="btn btn-primary">Ver en Spotify</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>


    @push('plugin-scripts')
        <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
    @endpush

    @push('custom-scripts')
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    @endpush
</div>

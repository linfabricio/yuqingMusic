<div>
    <div class="col-md-12">
        <div>
            <h4 class="mb-3 mb-md-0">Busca tu artista favorito!</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row position-relative">
                    <div class="col-lg-4 chat-aside border-lg-right">
                        <div class="aside-content">
                            <div class="aside-header">
                                <form class="search-form">
                                    <div class="input-group border rounded-sm">
                                        <input type="text" class="form-control  border-0 rounded-sm" id="searchForm"
                                            placeholder="Buscar aca..." wire:model="filter">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary btn-play"
                                                wire:click.prevent="searchArtist">Buscar</button>
                                        </div>
                                    </div>
                                    @error('filter')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 chat-aside border-lg-right">
                        <div class="input-group-prepend">
                            <div wire:loading wire:target="searchArtist" class="spinner-border text-primary"
                                role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        @if (!empty($this->artists))
            <div class="row">
                @foreach ($this->artists['artists']['items'] as $index => $artist)
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img" src="{{ !empty($artist['images']) ? $artist['images'][0]['url'] : asset('img/default-image.jpg') }}"
                                        alt="{{ $artist['name'] }}"
                                        style="height: 100px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $artist['name'] }}</h5>
                                        <p class="card-text">Géneros: {{ implode(', ', $artist['genres']) }}</p>
                                        <p class="card-text"><small class="text-muted">Seguidores:
                                                {{ number_format($artist['followers']['total']) }}</small></p>
                                        <a href="{{ $artist['external_urls']['spotify'] }}" class="btn btn-primary mr-2"
                                            target="_blank">Escuchar en Spotify</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

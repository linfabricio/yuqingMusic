<div>
    <div class="col-md-12">
        <div>
            <h4 class="mb-3 mb-md-0">Busca tu música favorita!</h4>
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
                                                wire:click.prevent="searchMusic">Buscar</button>
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
                            <div wire:loading wire:target="searchMusic" class="spinner-border text-primary"
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
        @if (!empty($this->musics))
            <div class="row">
                @foreach ($this->musics['tracks']['items'] as $index => $music)
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img" src="{{ $music['album']['images'][0]['url'] }}"
                                        alt="{{ $music['album']['name'] }}"
                                        style="height: 100px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $music['name'] }}</h5>
                                        <p class="card-text">{{ $music['artists'][0]['name'] }}</p>
                                        <p class="card-text"><small class="text-muted">Album:
                                                {{ $music['album']['name'] }}</small></p>
                                        <p class="card-text"><small class="text-muted">Release Date:
                                                {{ $music['album']['release_date'] }}</small></p>
                                        <a href="{{ $music['external_urls']['spotify'] }}" class="btn btn-primary mr-2"
                                            target="_blank">Listen on Spotify</a>

                                        <div class="audio-player">
                                            @if (isset($music['preview_url']))
                                                <audio controls>
                                                    <source src="{{ $music['preview_url'] }}" type="audio/mpeg">
                                                </audio>
                                            @else
                                                <p class="text-muted">No preview available</p>
                                            @endif
                                        </div>
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

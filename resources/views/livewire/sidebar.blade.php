<div>
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                yuqing<span>SPOTIFY</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Menu principal</li>
                <li class="nav-item {{ active_class(['/']) }}">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Tablero</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Opciones</li>
                <li class="nav-item {{ active_class(['apps/album/new']) }}">
                    <a href="{{ url('/apps/album/new') }}" class="nav-link">
                        <i class="link-icon" data-feather="disc"></i>
                        <span class="link-title">Álbumnes nuevos</span>
                    </a>
                </li>
                <div x-data="{ open: false }">
                    <li class="nav-item {{ active_class(['app/*']) }}">
                        <a @click="open = !open" class="nav-link" role="button" aria-expanded="false"
                            aria-controls="search">
                            <i class="link-icon" data-feather="search"></i>
                            <span class="link-title">Buscar</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                    </li>

                    <div x-show="open" @click.outside="open = false">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('/apps/music') }}" class="nav-link {{ active_class(['apps/music']) }}"
                                    @click.stop>
                                    Musica
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/apps/album') }}" class="nav-link {{ active_class(['apps/album']) }}"
                                    @click.stop>
                                    Álbum
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/apps/artist') }}"
                                    class="nav-link {{ active_class(['apps/artist']) }}" @click.stop>
                                    Artista
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</div>

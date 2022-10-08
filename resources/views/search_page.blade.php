@extends('layouts.base')
@section('content')
    <main>

        <h1 class="text-center mt-5"> Поиск по постам</h1>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                    @if ($searched_items)
                    @foreach ($searched_items as $post)
                        <div class="col">
                            <div class="card shadow-sm">
                                <a href="/detail/{{ $post->id }}">
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                        src="{{ asset('images/' . $post->image) }}" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /></img>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="">{{ $post->title }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Редактировать</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif


                </div>
            </div>
        </div>

    </main>
@endsection

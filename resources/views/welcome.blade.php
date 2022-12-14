@extends('layouts.base')
@section('content')
    <main>

      

        <section id="image" class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Добро пожаловать!</h1>
                    <p class="lead text-muted">Подпишитесь на нашу рассылку</p>
                    <p>
                        <a href="{{ route('view.email') }}" class="btn btn-primary my-2">Подписаться</a>
                        <button onclick="show_hide()" class="btn btn-secondary my-2">Отказаться</button>
                    </p>
                </div>
            </div>
        </section>

        <script src="{{ asset('/main.js') }}"></script>




        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($posts as $post)
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
                </div>
            </div>
        </div>

    </main>
@endsection

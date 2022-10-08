@extends("layouts.base")
@section("content")

<main>

    <section class="py-5 text-center container">
        <h2>Your new photo here</h2>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1">
                <div class="col">

                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto"
                    src="{{asset('images/' . $post->image)}}" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /></img>


                    <div class="card-body">
                        <p class="card-text">{{ $post->content }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">

                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>

</main>
@endsection
<div class="img_gallery-items">

    @foreach($posts as $post)

        <div class="img_gallery-item {{ $post->category->datafilter}}">
            <div class="post">
                <a class="posts" href="{{ route('site.post', ['id'=>$post->id]) }}">
                    <figure>
                        <img src="{{ url('uploads/'.$post->image) }}" />
                        <figcaption>
                            {{ str_limit($post->description, $limit = 90, $end = '...') }}
                        </figcaption>
                        <hr/>
                        <p>Compartilhe:</p>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/post/{{ $post->id }}">
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-facebook"></i>
                                facebook
                            </button>
                        </a>
                        <a href="#">
                            <button class="btn btn-default btn-sm">
                                <i class="fa fa-instagram"></i>
                                instagram
                            </button>
                        </a>
                        <a href="#">
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-google"></i>
                                google +
                            </button>
                        </a>
                    </figure>
                </a>
            </div>
        </div><!--/.img_gallery-item-->

    @endforeach

</div>
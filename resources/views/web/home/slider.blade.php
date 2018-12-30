
<section class="s-featured">
    @if($posts->count() > 0)
        <div class="row">
            <div class="col-full">
                <div class="featured-slider featured" data-aos="zoom-in">
                        @for($i = 0; $i < 3; $i++)
                            <div class="featured__slide">
                                <div class="entry">
                                    <div class="entry__background" style="background-image:url('{{ URL::asset('public/uploads/posts/'.$posts[$i]->image) }}');"></div>
                                    <div class="entry__content">
                                        <span class="entry__category">
                                            <a href="{{ route('category-posts', Hashids::encode($posts[$i]->category->id)) }}">{{ $posts[$i]->category->name }}</a>
                                        </span>
                                        <h1>
                                            <a href="{{ route('posts.show', Hashids::encode($posts[$i]->id)) }}">
                                                {{ $posts[$i]->title }}
                                            </a>
                                        </h1>

                                        <div class="entry__info">
                                            {{--<a class="entry__profile-pic">--}}
                                                {{--<img class="avatar" src="{{ URL::asset('public/uploads/posts/'.$posts[$i]->image) }}" alt="{{ $posts[$i]->title }}">--}}
                                            {{--</a>--}}
                                            <ul class="entry__meta">
                                                <li> {{ date('jS F Y', strtotime($posts[$i]->created_at)) }} </li>
                                            </ul>
                                        </div>
                                    </div> <!-- end entry__content -->

                                </div> <!-- end entry -->
                            </div> <!-- end featured__slide -->
                        @endfor
                </div> <!-- end featured -->
            </div> <!-- end col-full -->
        </div>
    @endif
</section>

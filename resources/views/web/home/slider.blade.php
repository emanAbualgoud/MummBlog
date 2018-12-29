
<section class="s-featured">
    @if($posts->count() > 0)
        <div class="row">
            <div class="col-full">

                @for($i = 0; $i < 3; $i++)
                    <div class="featured-slider featured" data-aos="zoom-in">

                        <div class="featured__slide">
                            <div class="entry">

                                <div class="entry__background" style="background-image:url('{{ URL::asset('public/web/images/thumbs/featured/featured-guitarman.jpg') }}');"></div>

                                <div class="entry__content">
                                    <span class="entry__category"><a href="#0">Music</a></span>

                                    <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                                    <div class="entry__info">
                                        <a href="#0" class="entry__profile-pic">
                                            <img class="avatar" src="images/avatars/user-05.jpg" alt="">
                                        </a>
                                        <ul class="entry__meta">
                                            <li><a href="#0">Jonathan Smith</a></li>
                                            <li>June 02, 2018</li>
                                        </ul>
                                    </div>
                                </div> <!-- end entry__content -->

                            </div> <!-- end entry -->
                        </div> <!-- end featured__slide -->

                    </div> <!-- end featured -->
                @endfor
            </div> <!-- end col-full -->
        </div>
    @endif
</section>

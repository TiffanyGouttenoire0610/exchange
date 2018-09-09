@extends('layouts.2-columns')

@section('title', 'Poser une question')

{{-- Search form section --}}
@section('search-form')
    <div class="clearfix"></div>
@endsection

@section('content')

    <article class="question single-question question-type-normal">
        <h2>
            <a href="#!">This Is My first Question</a>
        </h2>
        <div class="question-author-date">
            Asked <em>4 mins ago</em> by <a href="#">Peter</a>
        </div>
        <div class="question-inner">
            <div class="clearfix"></div>
            <div class="question-desc">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a aliquet rutrum, dolor turpis condimentum leo, a semper lacus purus in felis. Quisque blandit posuere turpis, eget auctor felis pharetra eu .</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a aliquet rutrum, dolor turpis condimentum leo, a semper lacus purus in felis. Quisque blandit posuere turpis, eget auctor felis pharetra eu .</p>
            </div>
            {{--<div class="question-details">--}}
                {{--<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>--}}
            {{--</div>--}}
            {{--<span class="question-comment"><a href="#commentlist"><i class="icon-comment"></i>5 Answer</a></span>--}}
            {{--<span class="question-view"><i class="icon-user"></i>70 views</span>--}}
            {{--<div class="question-tags"><i class="icon-tags"></i>--}}
                {{--<a href="#!">wordpress</a>, <a href="#!">question</a>, <a href="#!">developer</a>--}}
            {{--</div>--}}
            <div class="clearfix"></div>
        </div>
    </article>

    <div class="post-next-prev clearfix">
        <p class="prev-post">
            <a href="#"><i class="icon-double-angle-left"></i>&nbsp;Prev question</a>
        </p>
        <p class="next-post">
            <a href="#">Next question&nbsp;<i class="icon-double-angle-right"></i></a>
        </p>
    </div><!-- End post-next-prev -->

    <div id="commentlist" class="page-content">
        <div class="boxedtitle page-title"><h2>Answers ( <span class="color">5</span> )</h2></div>
        <ol class="commentlist clearfix">
            <li class="comment">
                <div class="comment-body comment-body-answered clearfix">
                    <div class="comment-text">
                        <div class="author clearfix">
                            <div class="comment-author"><a href="#">admin</a></div>
                            {{--<div class="comment-vote">--}}
                                {{--<ul class="question-vote">--}}
                                    {{--<li><a href="#" class="question-vote-up" title="Like"></a></li>--}}
                                    {{--<li><a href="#" class="question-vote-down" title="Dislike"></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<span class="question-vote-result">+22</span>--}}
                            <div class="comment-meta">
                                <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                            </div>
                            <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a>
                        </div>
                        <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                        </div>
                        {{--<div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>--}}
                    </div>
                </div>
                <ul class="children">
                    <li class="comment">
                        <div class="comment-body clearfix">
                            <div class="comment-text">
                                <div class="author clearfix">
                                    <div class="comment-author"><a href="#">vbegy</a></div>
                                    {{--<div class="comment-vote">--}}
                                        {{--<ul class="question-vote">--}}
                                            {{--<li><a href="#" class="question-vote-up" title="Like"></a></li>--}}
                                            {{--<li><a href="#" class="question-vote-down" title="Dislike"></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<span class="question-vote-result">+1</span>--}}
                                    <div class="comment-meta">
                                        <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                                    </div>
                                </div>
                                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="comment">
                        <div class="comment-body clearfix">
                            <div class="comment-text">
                                <div class="author clearfix">
                                    <div class="comment-author"><a href="#">ahmed</a></div>
                                    {{--<div class="comment-vote">--}}
                                        {{--<ul class="question-vote">--}}
                                            {{--<li><a href="#" class="question-vote-up" title="Like"></a></li>--}}
                                            {{--<li><a href="#" class="question-vote-down" title="Dislike"></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<span class="question-vote-result">-3</span>--}}
                                    <div class="comment-meta">
                                        <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                                    </div>
                                </div>
                                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul><!-- End children -->
            </li>
            <li class="comment">
                <div class="comment-body clearfix">
                    <div class="comment-text">
                        <div class="author clearfix">
                            <div class="comment-author"><a href="#">2code</a></div>
                            {{--<div class="comment-vote">--}}
                                {{--<ul class="question-vote">--}}
                                    {{--<li><a href="#" class="question-vote-up" title="Like"></a></li>--}}
                                    {{--<li><a href="#" class="question-vote-down" title="Dislike"></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<span class="question-vote-result">+1</span>--}}
                            <div class="comment-meta">
                                <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                            </div>
                            <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a>
                        </div>
                        <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ol><!-- End commentlist -->
    </div><!-- End page-content -->

    <div id="respond" class="comment-respond page-content clearfix">
        <div class="boxedtitle page-title"><h2>Leave a reply</h2></div>
        <form action="" method="post" id="commentform" class="comment-form">
            <div id="respond-inputs" class="clearfix">
                <p>
                    <label class="required" for="comment_name">Name<span>*</span></label>
                    <input name="name" type="text" value="{{ old('name') }}" id="comment_name" aria-required="true">
                </p>
                <p class="last">
                    <label class="required" for="comment_email">E-Mail<span>*</span></label>
                    <input name="email" type="text" value="{{ old('email') }}" id="comment_email" aria-required="true">
                </p>
            </div>
            <div id="respond-textarea">
                <p>
                    <label class="required" for="comment">Comment<span>*</span></label>
                    <textarea id="comment" name="comment" aria-required="true" cols="58" rows="8"></textarea>
                </p>
            </div>
            <p class="form-submit">
                <input name="submit" type="submit" id="submit" value="Post your answer" class="button small color">
            </p>
        </form>
    </div>
    {{-- Sidebar --}}
    @section('sidebar')
        <div class="widget">
            <h3 class="widget_title">Related Questions</h3>
            <ul class="related-posts">
                <li class="related-item"><h3><a href="#!"><i class="icon-double-angle-right"></i>This Is My Second Poll Question</a></h3></li>
                <li class="related-item"><h3><a href="#!"><i class="icon-double-angle-right"></i>This is my third Question</a></h3></li>
                <li class="related-item"><h3><a href="#!"><i class="icon-double-angle-right"></i>This is my fourth Question</a></h3></li>
                <li class="related-item"><h3><a href="#!"><i class="icon-double-angle-right"></i>This is my fifth Question</a></h3></li>
            </ul>
        </div>

        @parent
    @endsection
@endsection
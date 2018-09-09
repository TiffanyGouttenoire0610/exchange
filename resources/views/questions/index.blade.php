@extends('layouts.2-columns')

@section('title', 'Poser une question')

{{-- Search form section --}}
@section('search-form')
    @include('partials/search')
@endsection

@section('content')
    <article class="question question-type-normal">
        <h2>
            <a href="{{ url('/question') }}">Vivamus at elit quis urna adipiscing iaculis.</a>
        </h2>
        <div class="question-author-date">
            Asked <em>4 mins ago</em> by <a href="#">Peter</a>
        </div>
        <div class="question-inner">
            <div class="clearfix"></div>
            <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
            {{--<div class="question-details">--}}
                {{--<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>--}}
            {{--</div>--}}
            {{--<span class="question-comment"><a href="{{ url('/question') }}"><i class="icon-comment"></i>5 Answer</a></span>--}}
            {{--<span class="question-view"><i class="icon-user"></i>70 views</span>--}}
            {{--<div class="question-tags"><i class="icon-tags"></i>--}}
                {{--<a href="#!">wordpress</a>, <a href="#!">question</a>, <a href="#!">developer</a>--}}
            {{--</div>--}}
            <div class="clearfix"></div>
        </div>
    </article>
    <article class="question question-type-normal">
        <h2>
            <a href="{{ url('/question') }}">Vivamus at elit quis urna adipiscing iaculis.</a>
        </h2>
        <div class="question-author-date">
            Asked <em>4 mins ago</em> by <a href="#">Peter</a>
        </div>
        <div class="question-inner">
            <div class="clearfix"></div>
            <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
            {{--<div class="question-details">--}}
                {{--<span class="question-answered"><i class="icon-time"></i>In progress</span>--}}
            {{--</div>--}}
            {{--<span class="question-comment"><a href="{{ url('/question') }}"><i class="icon-comment"></i>5 Answer</a></span>--}}
            {{--<span class="question-view"><i class="icon-user"></i>70 views</span>--}}
            {{--<div class="question-tags"><i class="icon-tags"></i>--}}
                {{--<a href="#!">wordpress</a>, <a href="#!">question</a>, <a href="#!">developer</a>--}}
            {{--</div>--}}
            <div class="clearfix"></div>
        </div>
    </article>
    <article class="question question-type-normal">
        <h2>
            <a href="{{ url('/question') }}">Vivamus at elit quis urna adipiscing iaculis.</a>
        </h2>
        <div class="question-author-date">
            Asked <em>4 mins ago</em> by <a href="#">Peter</a>
        </div>
        <div class="question-inner">
            <div class="clearfix"></div>
            <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
            {{--<div class="question-details">--}}
                {{--<span class="question-answered"><i class="icon-time"></i>In progress</span>--}}
            {{--</div>--}}
            {{--<span class="question-comment"><a href="{{ url('/question') }}"><i class="icon-comment"></i>5 Answer</a></span>--}}
            {{--<span class="question-view"><i class="icon-user"></i>70 views</span>--}}
            {{--<div class="question-tags"><i class="icon-tags"></i>--}}
                {{--<a href="#!">wordpress</a>, <a href="#!">question</a>, <a href="#!">developer</a>--}}
            {{--</div>--}}
            <div class="clearfix"></div>
        </div>
    </article>

    <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>

    {{-- Sidebar --}}
    @section('sidebar')
        {{--<div class="widget">--}}
            {{--<h3 class="widget_title">Recent Questions</h3>--}}
            {{--<ul class="related-posts">--}}
                {{--<li class="related-item">--}}
                    {{--<h3><a href="#">This is my first Question</a></h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                    {{--<div class="clear"></div><span>Feb 22, 2014</span>--}}
                {{--</li>--}}
                {{--<li class="related-item">--}}
                    {{--<h3><a href="#">This Is My Second Poll Question</a></h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                    {{--<div class="clear"></div><span>Feb 22, 2014</span>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        @parent
    @endsection

@endsection
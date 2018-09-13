@extends('layouts.fullwidth')

@section('title', 'Poser une question')

@section('content')

    <div class="page-content ask-question">
        <div class="boxedtitle page-title"><h2>Ask Question</h2></div>

        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>

        <div class="form-style form-style-3" id="question-submit">
            {!! Form::open(['action' => 'QuestionController@store', 'method' => 'post']) !!}
                <div class="form-inputs clearfix">
                    <p>
                        <label class="required">Question Title<span>*</span></label>
                        {{--<input type="text" name="title" id="question-title">--}}
                        {!! Form::text('title', null, ['id' => 'question-title']) !!}
                        @if ($errors->has('title'))
                            <span class="color form-description">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @else
                            <span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
                        @endif
                    </p>
                    {{--<p>--}}
                        {{--<label>Tags</label>--}}
                        {{--<input type="text" class="input" name="question_tags" id="question_tags" data-seperator=",">--}}
                        {{--<span class="form-description">Please choose suitable Keywords .</span>--}}
                    {{--</p>--}}
                    <p>
                        <label class="required">Category<span>*</span></label>
                        {!! Form::select('category',[
                            'Back-end' => [
                                'php' => 'PHP',
                                'mysql' => 'MySQL',
                                'nodejs' => 'NodeJS',
                                'c#' => 'C#',
                                'python' => 'Python',
                                'ruby' => 'Ruby',
                                'other' => 'Other'
                            ],
                            'Front-end' => [
                                'html' => 'HTML',
                                'css' => 'CSS',
                                'sass' => 'SASS',
                                'js' => 'JS',
                                'other' => 'Other'
                            ],
                            'miscellaneous' => [
                                'agile' => 'Agile',
                                'sysadmin' => 'Admin',
                                'devops' => 'Dev Ops',
                                'other' => 'Other'
                            ],
                        ], null, ['id' => 'question-category', 'placeholder' => 'Pick a category...']) !!}

                        @if ($errors->has('category'))
                            <span class="color form-description">
                                <strong>{{ $errors->first('category') }}</strong>
                            </span>
                        @else
                            <span class="form-description">Please choose the appropriate section so easily search for your question .</span>
                        @endif
                    </p>

                    {{--<label>Attachment</label>--}}
                    {{--<div class="fileinputs">--}}
                        {{--<input type="file" class="file">--}}
                        {{--<div class="fakefile">--}}
                            {{--<button type="button" class="button small margin_0">Select file</button>--}}
                            {{--<span><i class="icon-arrow-up"></i>Browse</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>
                <div id="form-textarea">
                    <p>
                        <label class="required">Details<span>*</span></label>
                        {{--<textarea id="question-details" name="description" aria-required="true" cols="58" rows="8"></textarea>--}}
                        {!! Form::textarea('description', null, [
                            'id'      => 'question-details',
                            'cols'    => 58,
                            'rows'    => 8
                        ]) !!}
                        @if ($errors->has('description'))
                            <span class="color form-description">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @else
                            <span class="form-description">Type the description thoroughly and in detail .</span>
                        @endif
                    </p>
                </div>
                <p class="form-submit">
                    {!! Form::submit('Publish Your Question!', ['id' => 'publish-question', 'class' => 'button color small submit']) !!}
                    {{--<input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">--}}
                </p>
            {!! Form::close() !!}
        </div>
    </div><!-- End page-content -->

@endsection
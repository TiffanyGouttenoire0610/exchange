@extends('layouts.fullwidth')

@section('title', 'Poser une question')

@section('content')

    <div class="page-content ask-question">
        <div class="boxedtitle page-title"><h2>Ask Question</h2></div>

        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>

        <div class="form-style form-style-3" id="question-submit">
            <form>
                <div class="form-inputs clearfix">
                    <p>
                        <label class="required">Question Title<span>*</span></label>
                        <input type="text" id="question-title">
                        <span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
                    </p>
                    <p>
                        <label>Tags</label>
                        <input type="text" class="input" name="question_tags" id="question_tags" data-seperator=",">
                        <span class="form-description">Please choose suitable Keywords .</span>
                    </p>
                    <p>
                        <label class="required">Category<span>*</span></label>
                        <span class="styled-select">
                            <select>
                                <option value="">Select a Category</option>
                                <option value="1">Category 1</option>
                                <option value="2">Category 2</option>
                            </select>
                        </span>
                        <span class="form-description">Please choose the appropriate section so easily search for your question .</span>
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
                        <textarea id="question-details" aria-required="true" cols="58" rows="8"></textarea>
                        <span class="form-description">Type the description thoroughly and in detail .</span>
                    </p>
                </div>
                <p class="form-submit">
                    <input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
                </p>
            </form>
        </div>
    </div><!-- End page-content -->

@endsection
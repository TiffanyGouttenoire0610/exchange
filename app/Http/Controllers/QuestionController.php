<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

use App\Http\Requests\StoreQuestion;
use App\Repositories\AnswerRepository;
use App\Repositories\QuestionRepository;
use Auth;

class QuestionController extends Controller
{
    protected $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->middleware('auth', ['except' => ['index','show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $questions = $this->questionRepository->getOrdered();
        $recentQuestions = $this->questionRepository->getRecent(2);
//        $nbrAnswers = $answerRepository->getNbrAnswers($id);

        //$questions = $this->questionRepository->getOrderedQuestions()->paginate(25);
        return view('question.index', compact('questions', 'recentQuestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreQuestion $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreQuestion $request)
    {
        $requestData = $request->all();
        $question = $this->questionRepository->create($requestData);

        return redirect()->route('questions.show', ['id' => $question->id])->with('flash_message', 'Question added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id, AnswerRepository $answerRepository)
    {
        $question = $this->questionRepository->show($id);
        $previousQuestionId = $this->questionRepository->getPreviousId($id);
        $nextQuestionId = $this->questionRepository->getNextId($id);

        $answers = $answerRepository->getOrdered($id);

        $nbrAnswers = $answerRepository->count($id);

        $userPreviousVotes = Auth::check() ? Auth::user()->upvotes->pluck('answer_id')->all() : [];

        return view('question.show', compact('question', 'answers', 'nbrAnswers', 'nextQuestionId', 'previousQuestionId', 'userPreviousVotes'));
    }
}


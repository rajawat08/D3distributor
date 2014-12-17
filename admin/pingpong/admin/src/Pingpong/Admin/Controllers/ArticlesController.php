<?php namespace Pingpong\Admin\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Pingpong\Admin\Entities\Article;
use Pingpong\Admin\Uploader\ImageUploader;

class ArticlesController extends BaseController {

    /**
     * @var \Article
     */
    protected $articles;

    protected $uploader;

    /**
     * @param \Article $articles
     */
    public function __construct(Article $articles, ImageUploader $uploader)
    {
        $this->articles = $articles;
        $this->uploader = $uploader;
    }

    /**
     * Redirect not found.
     *
     * @return Response
     */
    protected function redirectNotFound()
    {
        return $this->redirect(isOnPages() ? 'pages.index' : 'articles.index');
    }

    /**
     * Display a listing of articles
     *
     * @return Response
     */
    public function index()
    {
        $articles = $this->articles->newest()->onlyPost()->paginate(10);

        if (\Request::is('admin/pages'))
        {
            $articles = $this->articles->onlyPage()->newest()->paginate(10);
        }

        $no = $articles->getFrom();

        return $this->view('articles.index', compact('articles', 'no'));
    }

    /**
     * Show the form for creating a new article
     *
     * @return Response
     */
    public function create()
    {
        return $this->view('articles.create');
    }

    /**
     * Store a newly created article in storage.
     *
     * @return Response
     */
    public function store()
    {
        app('Pingpong\Admin\Validation\Article\Create')->validate($data = $this->inputAll());

        unset($data['image']);

        if (\Input::hasFile('image'))
        {
            // upload image
            $this->uploader->upload('image')->save('images/articles');

            $data['image'] = $this->uploader->getFilename();
        }

        $data['user_id'] = \Auth::id();
        $data['slug'] = \Str::slug($data['title']);

        $this->articles->create($data);

        return $this->redirect(isOnPages() ? 'pages.index' : 'articles.index');
    }

    /**
     * Display the specified article.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        try
        {
            $article = $this->articles->findOrFail($id);
            return $this->view('articles.show', compact('article'));
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        try
        {
            $article = $this->articles->findOrFail($id);
            return $this->view('articles.edit', compact('article'));
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    /**
     * Update the specified article in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        try
        {
            $article = $this->articles->findOrFail($id);

            app('Pingpong\Admin\Validation\Article\Update')->validate($data = $this->inputAll());

            unset($data['image']);
            unset($data['type']);

            if (\Input::hasFile('image'))
            {
                $article->deleteImage();

                $this->uploader->upload('image')->save('images/articles');

                $data['image'] = $this->uploader->getFilename();
            }

            $data['user_id'] = \Auth::id();
            $data['slug'] = \Str::slug($data['title']);
            $article->update($data);

            return $this->redirect(isOnPages() ? 'pages.index' : 'articles.index');
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try
        {
            $this->articles->destroy($id);

            return $this->redirect(isOnPages() ? 'pages.index' : 'articles.index');
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
    }

}

<?php namespace App\Controllers;

use App\Models\SessionModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class SessionsController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new SessionModel();
    }

    public function index()
    {
        $data = [
            'title'    => 'Сесії',
            'sessions' => $this->model->findAll(),
        ];
        echo view('partials/header', $data);
        echo view('sessions/index',   $data);
        echo view('partials/footer');
    }

    public function show($id = null)
    {
        if (! $session = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Сесію з ID $id не знайдено");
        }
        $data = ['title'=>'Деталі сесії','session'=>$session];
        echo view('partials/header', $data);
        echo view('sessions/show',    $data);
        echo view('partials/footer');
    }

    public function create()
    {
        $data = ['title'=>'Нова сесія'];
        echo view('partials/header', $data);
        echo view('sessions/create',  $data);
        echo view('partials/footer');
    }

    public function store()
    {
        $this->model->insert($this->request->getPost());
        return redirect()->to('/sessions');
    }

    public function edit($id = null)
    {
        if (! $session = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Сесію з ID $id не знайдено");
        }
        $data = ['title'=>'Редагувати сесію','session'=>$session];
        echo view('partials/header', $data);
        echo view('sessions/edit',    $data);
        echo view('partials/footer');
    }

    public function update($id = null)
    {
        $this->model->update($id, $this->request->getPost());
        return redirect()->to('/sessions');
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/sessions');
    }
}

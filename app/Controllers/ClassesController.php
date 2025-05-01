<?php namespace App\Controllers;

use App\Models\ClassModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ClassesController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ClassModel();
    }

    public function index()
    {
        $data = [
            'title'   => 'Класи',
            'classes' => $this->model->findAll(),
        ];
        echo view('partials/header', $data);
        echo view('classes/index',   $data);
        echo view('partials/footer');
    }

    public function show($id = null)
    {
        if (! $class = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Клас з ID $id не знайдено");
        }
        $data = ['title'=>'Деталі класу','class'=>$class];
        echo view('partials/header', $data);
        echo view('classes/show',    $data);
        echo view('partials/footer');
    }

    public function create()
    {
        $data = ['title'=>'Новий клас'];
        echo view('partials/header', $data);
        echo view('classes/create',  $data);
        echo view('partials/footer');
    }

    public function store()
    {
        $this->model->insert($this->request->getPost());
        return redirect()->to('/classes');
    }

    public function edit($id = null)
    {
        if (! $class = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Клас з ID $id не знайдено");
        }
        $data = ['title'=>'Редагувати клас','class'=>$class];
        echo view('partials/header', $data);
        echo view('classes/edit',    $data);
        echo view('partials/footer');
    }

    public function update($id = null)
    {
        $this->model->update($id, $this->request->getPost());
        return redirect()->to('/classes');
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/classes');
    }
}

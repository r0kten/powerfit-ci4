<?php namespace App\Controllers;

use App\Models\TrainerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class TrainersController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new TrainerModel();
    }

    // 1) Список тренерів
    public function index()
    {
        $data = [
            'title'    => 'Тренери',
            'trainers' => $this->model->findAll(),
        ];
        echo view('partials/header', $data);
        echo view('trainers/index',    $data);
        echo view('partials/footer');
    }

    // 2) Деталі одного тренера
    public function show($id = null)
    {
        if (! $trainer = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Тренера з ID $id не знайдено");
        }
        $data = ['title'=>'Деталі тренера','trainer'=>$trainer];
        echo view('partials/header', $data);
        echo view('trainers/show',    $data);
        echo view('partials/footer');
    }

    // 3) Форма створення
    public function create()
    {
        $data = ['title'=>'Новий тренер'];
        echo view('partials/header', $data);
        echo view('trainers/create',  $data);
        echo view('partials/footer');
    }

    // 4) Зберегти нового
    public function store()
    {
        $this->model->insert($this->request->getPost());
        return redirect()->to('/trainers');
    }

    // 5) Форма редагування
    public function edit($id = null)
    {
        if (! $trainer = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Тренера з ID $id не знайдено");
        }
        $data = ['title'=>'Редагувати тренера','trainer'=>$trainer];
        echo view('partials/header', $data);
        echo view('trainers/edit',    $data);
        echo view('partials/footer');
    }

    // 6) Оновити
    public function update($id = null)
    {
        $this->model->update($id, $this->request->getPost());
        return redirect()->to('/trainers');
    }

    // 7) Видалити
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/trainers');
    }
}

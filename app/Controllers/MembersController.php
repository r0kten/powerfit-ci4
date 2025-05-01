<?php namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MembersController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new MemberModel();
    }

    // 1) Список
    public function index()
    {
        $data = [
            'title'   => 'Клієнти',
            'members' => $this->model->findAll(),
        ];
        echo view('partials/header', $data);
        echo view('members/index',   $data);
        echo view('partials/footer');
    }

    // 2) Показати одну
    public function show($id = null)
    {
        if (! $member = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Клієнта з ID $id не знайдено");
        }
        $data = ['title'=>'Деталі клієнта','member'=>$member];
        echo view('partials/header', $data);
        echo view('members/show',    $data);
        echo view('partials/footer');
    }

    // 3) Форма створення
    public function create()
    {
        $data = ['title'=>'Новий клієнт'];
        echo view('partials/header', $data);
        echo view('members/create',  $data);
        echo view('partials/footer');
    }

    // 4) Зберегти
    public function store()
    {
        $this->model->insert($this->request->getPost());
        return redirect()->to('/members');
    }

    // 5) Форма редагування
    public function edit($id = null)
    {
        if (! $member = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Клієнта з ID $id не знайдено");
        }
        $data = ['title'=>'Редагувати клієнта','member'=>$member];
        echo view('partials/header', $data);
        echo view('members/edit',    $data);
        echo view('partials/footer');
    }

    // 6) Оновити
    public function update($id = null)
    {
        $this->model->update($id, $this->request->getPost());
        return redirect()->to('/members');
    }

    // 7) Видалити
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/members');
    }
}

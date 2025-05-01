<?php namespace App\Controllers;

use App\Models\MembershipPlanModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MembershipPlansController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new MembershipPlanModel();
    }

    public function index()
    {
        $data = [
            'title'            => 'План абонементу',
            'membership_plans' => $this->model->findAll(),
        ];
        echo view('partials/header', $data);
        echo view('membership_plans/index', $data);
        echo view('partials/footer');
    }

    public function show($id = null)
    {
        if (! $plan = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Абонемент з ID $id не знайдено");
        }
        $data = ['title'=>'Деталі абонементу','plan'=>$plan];
        echo view('partials/header', $data);
        echo view('membership_plans/show', $data);
        echo view('partials/footer');
    }

    public function create()
    {
        $data = ['title'=>'Новий абонемент'];
        echo view('partials/header', $data);
        echo view('membership_plans/create', $data);
        echo view('partials/footer');
    }

    public function store()
    {
        $this->model->insert($this->request->getPost());
        return redirect()->to('/membership_plans');
    }

    public function edit($id = null)
    {
        if (! $plan = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Абонемент з ID $id не знайдено");
        }
        $data = ['title'=>'Редагувати абонемент','plan'=>$plan];
        echo view('partials/header', $data);
        echo view('membership_plans/edit',   $data);
        echo view('partials/footer');
    }

    public function update($id = null)
    {
        $this->model->update($id, $this->request->getPost());
        return redirect()->to('/membership_plans');
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/membership_plans');
    }
}

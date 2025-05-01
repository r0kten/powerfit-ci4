<?php namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class BookingsController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new BookingModel();
    }

    public function index()
    {
        $data = [
            'title'    => 'Бронювання',
            'bookings' => $this->model->findAll(),
        ];
        echo view('partials/header', $data);
        echo view('bookings/index',   $data);
        echo view('partials/footer');
    }

    public function show($id = null)
    {
        if (! $booking = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Бронювання з ID $id не знайдено");
        }
        $data = ['title'=>'Деталі бронювання','booking'=>$booking];
        echo view('partials/header', $data);
        echo view('bookings/show',    $data);
        echo view('partials/footer');
    }

    public function create()
    {
        $data = ['title'=>'Нове бронювання'];
        echo view('partials/header', $data);
        echo view('bookings/create',  $data);
        echo view('partials/footer');
    }

    public function store()
    {
        $this->model->insert($this->request->getPost());
        return redirect()->to('/bookings');
    }

    public function edit($id = null)
    {
        if (! $booking = $this->model->find($id)) {
            throw PageNotFoundException::forPageNotFound("Бронювання з ID $id не знайдено");
        }
        $data = ['title'=>'Редагувати бронювання','booking'=>$booking];
        echo view('partials/header', $data);
        echo view('bookings/edit',    $data);
        echo view('partials/footer');
    }

    public function update($id = null)
    {
        $this->model->update($id, $this->request->getPost());
        return redirect()->to('/bookings');
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/bookings');
    }
}

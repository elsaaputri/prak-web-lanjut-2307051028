<?php
namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


// class UserController extends Controller
// {
//     public function create()
//     {
//         $kelasModel = new Kelas();

//         $kelas = $kelasModel->getKelas();

//         $data = [
//             'title' => 'Create User',
//             'kelas' => $kelas,
//         ];

//         return view('create_user', $data);
//     }


//     public function store(UserRequest $request){
//         $validatedData = $request->validate([
//             'nama' => 'required|string|max:255',
//             'npm' => 'required|string|max:255',
//             'kelas_id' => 'required|exists:kelas,id',
//         ]);
    
//         $user = UserModel::create($validatedData);
    
//         $user->load('kelas');
    
//         return view('profile', [
//             'nama' => $user->nama,
//             'npm' => $user->npm,
//             'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
//         ]);

//         $data = [
//             'nama' => $request->input('nama'),
//             'kelas' => $request->input('kelas'),
//             'npm' => $request->input('npm'),
//         ];
        
//         return view('profile', $data);
//     }
// }
class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
    public function index()
{
    $users = $this->userModel->getUser();

    $data = [
        'title' => 'List User',
        'users' => $users
    ];

    return view('list_user', $data);
}
public function store(Request $request)
{
    $this->userModel->create([
        'nama' => $request->input('nama'),
        'npm' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user');
}


}
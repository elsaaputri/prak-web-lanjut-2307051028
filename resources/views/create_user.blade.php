<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5ebe0, #e5d1b8);
            color: #3d2b1f;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            padding: 2rem;
            width: 100%;
            max-width: 450px;
        }

        .form-title {
            font-size: 1.8rem;
            color: #5a3e2b;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .input-label {
            font-size: 1rem;
            font-weight: 600;
            color: #5a3e2b;
            margin-bottom: 6px;
            display: block;
        }

        .input-field {
            border: 2px solid #c2b8a3;
            background-color: #fffdf7;
            color: #3d2b1f;
            border-radius: 10px;
            padding: 0.8rem;
            width: 100%;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .input-field:focus {
            outline: none;
            border-color: #a87550;
            box-shadow: 0 0 5px rgba(167, 117, 80, 0.4);
        }

        .button-primary {
            background: linear-gradient(135deg, #c07b50, #a7653f);
            color: white;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 10px;
            padding: 0.8rem;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .button-primary:hover {
            background: linear-gradient(135deg, #a7653f, #854c30);
            box-shadow: 0 5px 12px rgba(139, 69, 19, 0.3);
        }

        .alert {
            background-color: #e0f7df;
            color: #256029;
            padding: 0.75rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            font-weight: 700;
        }

        .alert-icon {
            font-size: 1.4rem;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h2 class="form-title">Registrasi Pengguna</h2>

        @if(session('success'))
            <div class="alert">
                <span class="alert-icon">✅</span> {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="input-label">Nama:</label>
                <input type="text" name="nama" class="input-field" required>
            </div>

            <div class="mb-4">
                <label class="input-label">NPM:</label>
                <input type="text" name="npm" class="input-field" required>
            </div>

            <div class="mb-4">
                <label class="input-label">Kelas:</label>
                <input type="text" name="kelas" class="input-field" required>
            </div>

            <button type="submit" class="button-primary">Submit</button>
        </form>
    </div>
</body>
</html>

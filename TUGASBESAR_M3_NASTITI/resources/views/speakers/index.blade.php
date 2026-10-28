<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul Pembicara - Event & Workshop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Narasumber & Speaker</h1>
        <p>Sistem Pengelolaan Event & Workshop</p>
    </header>

    <main>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>Daftar Pembicara Utama</h2>
            <a href="{{ route('speakers.create') }}" class="btn" style="background-color: #27ae60;">+ Tambah Pembicara</a>
        </div>
        
        <div class="card-container">
            @foreach($speakers as $speaker)
                <div class="card">
                    <h3>{{ $speaker->name }}</h3>
                    <p><strong>Keahlian:</strong> {{ $speaker->expertise }}</p>
                    <p><strong>Institusi:</strong> {{ $speaker->institution }}</p>
                    
                    <div style="display: flex; gap: 0.5rem; justify-content: center; margin-top: 1rem; flex-wrap: wrap;">
                        <a href="{{ route('speakers.detail', $speaker->id) }}" class="btn">Lihat Profil</a>
                        <a href="{{ route('speakers.edit', $speaker->id) }}" class="btn" style="background-color: #f39c12;">Edit</a>
                        
                        <form action="{{ route('speakers.destroy', $speaker->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="background-color: #e74c3c; border: none; cursor: pointer;">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
        <p>Dibuat oleh: Salsabila Nastitihani | NIM: 102022500293 | Kelas: SI4906</p>
        <p>Kelompok: 8 | Modul: Modul Pembicara / Speaker</p>
    </footer>
</body>
</html>
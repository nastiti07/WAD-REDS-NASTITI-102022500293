<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pembicara</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Edit Data Narasumber</h1>
        <p>Sistem Pengelolaan Event & Workshop</p>
    </header>

    <main>
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <form action="{{ route('speakers.update', $speaker->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Nama Lengkap & Gelar:</label>
                    <input type="text" name="name" value="{{ $speaker->name }}" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Bidang Keahlian:</label>
                    <textarea name="expertise" rows="3" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">{{ $speaker->expertise }}</textarea>
                </div>

                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Institusi:</label>
                    <input type="text" name="institution" value="{{ $speaker->institution }}" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Tautan Portofolio:</label>
                    <input type="text" name="portfolio_link" value="{{ $speaker->portfolio_link }}" style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                    <button type="submit" class="btn" style="border: none; cursor: pointer; background-color: #27ae60;">Perbarui Data</button>
                    <a href="{{ route('speakers.index') }}" class="btn" style="background-color: #7f8c8d; text-align: center;">Batal</a>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>Sistem Pengelolaan Event & Workshop - Tugas Pengembangan Aplikasi Web</p>
    </footer>
</body>
</html>
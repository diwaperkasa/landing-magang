@extends('layout.layout')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <div>
        <a href="/mahasiswa/create" class="badge badge-primary">Buat Data Baru</a>
    </div>
    <h1>Daftar Mahasiswa</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Angkatan</th>
                    <th>Domisili</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $row): ?>
                    <tr>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['angkatan'] ?></td>
                        <td><?= $row['domisili'] ?></td>
                        <td>
                            <!-- Edit Link -->
                            <a href="/mahasiswa/edit/<?= $row['id'] ?>" class="badge badge-success">Edit</a>
                            <!-- Delete Button -->
                            <form action="/mahasiswa/delete/<?= $row['id'] ?>" method="POST">
                                <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@endsection
<x-app-layout>
    <x-slot name="title">
        Pembayaran
    </x-slot>

    <div class="col text-right">
        <a href="{{ route('admin.pembayaran.tambah') }}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hovered" id="table">
            <thead>
                <tr align="center">
                    <th width="5%">ID</th>
                    <th>Tanggal Bayar</th>
                    <th>Total Bayar</th>
                    <th>Total Uang</th>
                    <th>Uang Kembali</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayaran as $b)
                <tr align="center">
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->tanggal_bayar }}</td>
                    <td>{{ $b->total_bayar }}</td>
                    <td>{{ $b->total_uang}}</td>
                    <td>{{ $b->uang_kembali }}</td>
                    <td >
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.pembayaran.edit',[$b->id]) }}" class="btn btn-warning btn-sm">Edit
                                <i class="mdi mdi-tooltip-edit"></i>
                            </a>
                            <a href="{{ route('admin.pembayaran.delete',[$b->id]) }}"
                                onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">Hapus
                                <i class="mdi mdi-delete-forever"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <x-slot name="script">
        <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
    </x-slot>
</x-app-layout>

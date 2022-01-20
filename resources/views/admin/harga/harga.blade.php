<x-app-layout>
    <x-slot name="title">
        Harga
    </x-slot>


    <div>
        <a href="#" class="btn btn-success">
            Tambah<i class="fas fa-plus-circle" style="margin-left:10px;"></i>
        </a>
    </div>
    <!-- /.box-header -->
    <table id="table-product" class="table table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Pembelian</th>
                <th>Id Barang</th>
                <th>Tanggal Beli</th>
                <th>Jumlah Beli</th>
                <th>Harga Ecer</th>
                <th>Harga Grosir</th>
                <th>Harga Jual</th>
                <th>active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($harga as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->nama_warung}}</td>
                <td>{{$list->alamat}}</td>
                <td style="text-align: right">
                    <button class="btn btn-info" data-toggle="modal" data-fid="{{$list->id}}"
                        data-fwarung="{{$list->nama_warung}}" data-fmin="{{$list->alamat}}" data-target="#editwarung">
                        Edit
                    </button>
                    /
                    <button class="btn btn-danger" data-fid="{{$list->id}}" data-toggle="modal"
                        data-target="#deleteharga">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

   

    <x-slot name="script">
        <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
    </x-slot>
</x-app-layout>
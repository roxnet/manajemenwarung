<x-app-layout>
    <x-slot name="title">
        Pembelian
    </x-slot>
<<<<<<< Updated upstream
    <div>
        <a href="#" class="btn btn-success">
            Tambah<i class="fas fa-plus-circle" style="margin-left:10px;"></i>
        </a>
    </div>
    <!-- /.box-header -->
    <table id="table-product" class="table table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Warung</th>
                <th>Alamat</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach($warung as $list)
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
                        data-target="#deletewarung">
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

=======


    <div class="col text-right">
        <a href="{{ route('admin.warung.tambah') }}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hovered" id="table">
            <thead>
                <tr align="center">
                    <th width="5%">No</th>
                    <th >Nama Warung</th>
                    <th >Alamat</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($warung as $wrg)
                <tr align="center">
                    <td >{{ $wrg->id }}</td>
                    <td >{{ $wrg->nama_warung }}</td>
                    <td >{{ $wrg->alamat }}</td>
                    <td >
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.warung.edit',[$wrg->id]) }}" class="btn btn-warning btn-sm">Edit
                                <i class="mdi mdi-tooltip-edit"></i>
                            </a>
                            <a href="{{ route('admin.warung.delete',[$wrg->id]) }}"
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
>>>>>>> Stashed changes

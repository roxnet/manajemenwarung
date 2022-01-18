<x-app-layout>
    <x-slot name="title">
        Pembelian
    </x-slot>

                        <div >
                            <a href="#" class="btn btn-success">
                                Tambah<i class="fas fa-plus-circle" style="margin-left:10px;"></i>
                            </a>
                        </div>
                        <div>
                            <table id="table-product" class="table table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th >Id</th>
                                        <th>Id Barang</th>
                                        <th>Tanggal Beli</th>
                                        <th>Jumlah Beli</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
		<tr>
        <td>1</td>
        <td>1</td>
        <td>18 Juni</td>
        <td>2</td>
			<td width="130">


		<div class="row">
				<button type="button"  class="btn btn-danger">Hapus</button>
                <button type="button" class="btn btn-primary">Edit</button>

		</div>
        </td>

		</tr>
	
	</tbody>
                            </table>
                        </div>
                   
    <x-slot name="script">
        <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
    </x-slot>
</x-app-layout>


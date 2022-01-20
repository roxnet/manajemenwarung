<x-app-layout>
    <x-slot name="title">
       Edit Warung
    </x-slot>
    @section('content')
    <div class="content-wrapper">
        
        {{-- Title + Breadcrumb --}}
        <section class="content-header container-fluid">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fas fa-user-friends fa-sm"></i>Warung</a></li>
                <li class="active"><a href="{{ route('Warung.edit', $data->id) }}">Ubah</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            {{-- Warung --}}
            <div class="row">

                {{-- List of Warung --}}
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Informasi Warung</b>
                        </div>
                        <div class="panel-body">

                            {{-- Form add Warung --}}
                            <form action="#" method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="row">

                                        {{-- Nama --}}
                                        <div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label>Nama</label>
                                            <input type="" class="form-control" name="name" placeholder="e.g. John Doe" value="{{ $data->Warung_name }}">
                                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                        </div>


                                        {{-- Address --}}
                                        <div class="col-md-12 form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="address" rows="1" cols="80" placeholder="e.g. JL. Jalan">{{ $data->address }}</textarea>
                                            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                                        </div>



                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-green pull-right">Ubah</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            
        </section>
    </div>
@endsection
</x-app-layout>

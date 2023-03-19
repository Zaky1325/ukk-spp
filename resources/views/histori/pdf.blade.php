
 

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    <h1>Data Pembayaran</h1>
                    <a href="/generateLaporan" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'>Cetak PDF</i></a>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">
                            <div class
                            {{-- <form action="{{ route('pembayaran.store') }}" method="post"> --}}
                            @csrf
                                <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Petugas</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Bayar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan Dibayar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nominal SPP</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Bayar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Tunggakan</th>
                                        {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($pembayaran as $item)
                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->id_petugas}}</td>
                                        <td>{{$item->siswa->nisn}}</td>
                                        <td>{{$item->tgl_bayar}}</td>
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->id_spp}}</td>
                                        <td>{{$item->jumlah_bayar}}</td>
                                        <td>{{$item->total}}</td>
                                        {{-- <td>
                                            <a href="{{ route('pembayaran.edit',  $item->id_petugas) }}" class="btn btn-sm text-white bg-warning" data-id="{{ $item->id_petugas }}"><i class='fa fa-edit'> Edit</i></a>
                                            <a href="{{ route('pembayaran.destroy', $item->id_petugas) }}" data-toggle="modal" data-target="#exampleModal{{$item->id_petugas}}" class="btn btn-sm text-white bg-danger"><i class='fa fa-trash'> Delete</i></i></a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

    
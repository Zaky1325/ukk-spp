


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    {{-- <link rel="image" type="image/jpg" href="..assets/img/logowikrama.jpg"> --}}
                    <div id="logo">
                    <style>
                    #logo{
                       margin-bottom: 10px;
                    }
                    #logo img{
                       width: 90px;
                    }
                    </style>
                    <div class="logo">
                    <img src="assets/img/logowikrama.jpg" class="navbar-brand-img h-100"/>
                    <span class="ms-3 font-weight-bold" >
                        <h4>APLIKASI PEMBAYARAN SPP SMK WIKRAMA BOGOR</h4>
                    </span>
                    </div>
                    {{-- <span class="ms-3 font-weight-bold" >APLIKASI PEMBAYARAN SPP SMK WIKRAMA BOGOR</span> --}}
                    <h1>Laporan</h1>

                    {{-- <a href="{{ route('histori.pdf') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'>Cetak PDF</i></a> --}}
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive pb-12">

                            {{-- <form action="{{ route('pembayaran.store') }}" method="post"> --}}
                            @csrf
                                <table class="static" allign="center" rules="all" border="2px" style="width: 95%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th >Nama Petugas</th>
                                        {{-- <th >NISN</th> --}}
                                        <th >Nama</th>
                                        <th >Tanggal Bayar</th>
                                        {{-- <th >Nominal SPP</th> --}}
                                        <th >Bulan Dibayar</th>
                                        <th >Jumlah Bayar</th>
                                        <th >Total Tunggakan</th>

                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($pembayaran as $item)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->id_petugas}}</td>
                                        {{-- <td>{{$item->siswa->nisn}}</td> --}}
                                        <td>{{ $item->tunggakan->siswa->nama }}</td>
                                        {{-- <td>{{$item->tunggakan_id}}</td> --}}
                                        <td>{{$item->tgl_bayar}}</td>
                                        {{-- <td>{{$item->id_spp}}</td> --}}
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->jumlah_bayar}}</td>
                                        <td>{{ $item->total }}</td>
                                    </tr>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@extends('dika.template')

@section('content')
    <div
        class="scale-100 p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg shadow-none flex">
        <div>
            <h2 class="text-xl font-semibold text-white">Data Jurnal Masuk</h2>
            <div class="mt-4 text-gray-400 text-sm leading-relaxed">
                <table class="border-collapse border border-slate-500">
                    <thead class="bg-slate-700 text-white">
                        <tr>
                            <th class="border border-slate-600 px-2 py-1">No</th>
                            <th class="border border-slate-600 px-2 py-1">Nomor Jurnal</th>
                            <th class="border border-slate-600 px-2 py-1">Kode Jurnal</th>
                            <th class="border border-slate-600 px-2 py-1">Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($jurnalmasuk as $row)
                            <tr class="hover:bg-slate-800 hover:text-white">
                                <th class="border border-slate-600 px-2 py-1">{{ $no++ }}</th>
                                <td class="border border-slate-600 px-2 py-1">{{ $row->nomor_jurnal }}</td>
                                <td class="border border-slate-600 px-2 py-1">{{ $row->kode_jurnal }}</td>
                                <td class="border border-slate-600 px-2 py-1">{{ $row->tanggal_selesai }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

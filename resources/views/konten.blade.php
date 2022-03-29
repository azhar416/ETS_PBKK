@extends('template')

@section('container')
    <article class="mb-5">
        <h3>{{ $record->patient->name }}
        </h3>
        <h6>Doctor:
            <a href="/doctor/{{ $record->doctor->name }}" class="text-decoration-none">
                {{ $record->doctor->name }}
            </a>
            Patient:
            <a href="/patient/{{ $record->patient->name }}" class="text-decoration-none">
                {{ $record->patient->name }}
            </a>
        </h6>


        <div class="mb-5 ">
            <h5>
                Suhu Tubuh : {{ $record->suhu_tubuh }}
            </h5>
            <h5>
                Kondisi : {{ $record->kondisi }}
            </h5>


        </div>
        {{-- <p>{!! $record->body !!}</p> --}}
    </article>
@endsection

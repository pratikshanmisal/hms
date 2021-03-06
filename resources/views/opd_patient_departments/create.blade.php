@extends('layouts.app')
@section('title')
    {{ __('messages.opd_patient.new_opd_patient') }}
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            @include('coreui-templates::common.errors')
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.opd_patient.new_opd_patient') }}</strong>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['route' => 'opd.patient.store', 'id' => 'createOpdPatientForm']) }}

                            @include('opd_patient_departments.fields')

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let patientCasesUrl = "{{ route('patient.cases.list') }}";
        let doctorOpdChargeUrl = "{{ route('getDoctor.OPDcharge') }}";
        let isEdit = false;
        let lastVisit = "{{ (isset($data['last_visit'])) ? $data['last_visit']->patient_id : false }}";

    </script>
    <script src="{{mix('assets/js/opd_patients/create.js')}}"></script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
@endsection

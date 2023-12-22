@extends('layouts.app')

@section('title', 'Laravel - Report Demo')

@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-indigo-600">รายงาน Departmental KPI &amp; Individual KPI ของหน่วยงาน</h1>
            </div>

            <div class="w-full lg:w-4/5 mx-auto overflow-auto">
                <div class="mb-4 flex justify-end items-center gap-2">
                    <label class="leading-7 text-sm text-gray-600">กรุณาเลือกหน่วยงาน:</label>
                    <select
                        name="agency"
                        class="w-full lg:w-1/3 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @foreach ($agency as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4 flex">
                    <div class="lg:w-1/3 px-3 py-1 border"><span name="agency" class="text-indigo-500">{{ $agency[0] }}</span></div>
                    <div class="lg:w-1/3 text-end px-3 py-1 border border-x-0">ประเมินเมื่อวันที่ <span name="evaluated" class="text-indigo-500"></span></div>
                    <div class="lg:w-1/3 text-end px-3 py-1 border">งวดที่ประเมิน <span name="period" class="text-indigo-500"></span></div>
                </div>

                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                        <tr class="text-center">
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">No</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ชื่อ</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ตำแหน่ง</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">สรุปผลการดำเนินงานตาม KPI</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">คะแนน</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">น้ำหนัก</th>
                            <th class="title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">คะแนนถ่วงน้ำหนัก</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-indigo-600">Report การตัดเกรดโดยอิงกลุ่ม <br />แบบ Normal Curve Distribution ของกลุ่มตำแหน่ง (1/2)</h1>
            </div>

            <div class="w-full lg:w-4/5 mx-auto overflow-auto">
                <div class="mb-4 flex justify-end items-center gap-2">
                    <label class="leading-7 text-sm text-gray-600">จัดตามกลุ่ม:</label>
                    <select
                        name="agency-normal"
                        multiple
                        class="select2 w-full lg:w-1/3 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @foreach ($agency as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="normal-curve border"></div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        const data = @json($data);
    </script>
    @vite('resources/js/home.js')
@endpush

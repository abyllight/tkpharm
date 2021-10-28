@extends('layouts.app')
@section('content')
    <!--    Section About-->
    <div class="bg-cert py-32 lg:py-48">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center lg:mb-12">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    Наши сертификаты
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="flex flex-col gap-10 md:flex-row py-10">
                <div>
                    <img src="/img/cert1.jpg" class="h-72 lg:h-80 bg-center bg-cover mx-auto mb-4">
                    <div class="border font-semibold uppercase text-sm text-center p-2">
                        Аттестат аккредитации на соответствие ГОСТ ISO/IEC 17025-2019
                    </div>
                </div>
                <div>
                    <img src="/img/cert2.jpg" class="h-72 lg:h-80 bg-center bg-cover mx-auto mb-4">
                    <div class="border font-semibold uppercase text-sm text-center p-2">
                        Сертификат GMP РК на цех жидких лекарственных форм
                    </div>
                </div>
                <div>
                    <img src="/img/cert3.jpg" class="h-72 lg:h-80 bg-center bg-cover mx-auto mb-4">
                    <div class="border font-semibold uppercase text-sm text-center p-2">
                        Сертификат GMP РК на цех твердых лекарственных форм
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">Augstskola Turība</h1>

    <div class="grid grod-cols-1 md:grid-cols-2 gap-6">
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue et mauris sit amet consectetur. Ut
                accumsan nunc vitae purus fringilla, sed convallis elit commodo. Suspendisse potenti. Fusce vel molestie
                felis, vel ullamcorper lacus. Donec libero tellus, cursus eget mauris eget, imperdiet auctor turpis. Sed
                eget mollis ante. Aliquam viverra congue nibh eget aliquet. Quisque non mi et odio ullamcorper sagittis.
                Donec fermentum sapien id imperdiet consectetur.</p>
            <p>Cras vulputate leo sit amet interdum venenatis. Aliquam commodo gravida neque eu commodo. Cras tincidunt
                justo sed ultrices lacinia. Suspendisse potenti. In ac mattis sem. Sed efficitur eros vitae ligula
                sagittis molestie. Suspendisse potenti. Donec aliquam et quam eget cursus. Quisque sagittis sapien sed
                mi volutpat, ac pulvinar mauris tristique. Donec a pharetra arcu, quis pretium eros. Donec eu nisl
                scelerisque, pretium libero ut, iaculis metus.</p>

        </div>
        <div>

            <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal mt-0">Saziņai</h2>

            <div class="flex flex-row gap-4">
                <div><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 13.42V16.956C18.0001 17.2092 17.9042 17.453 17.7316 17.6382C17.559 17.8234 17.3226 17.9363 17.07 17.954C16.633 17.984 16.276 18 16 18C7.163 18 0 10.837 0 2C0 1.724 0.015 1.367 0.046 0.93C0.0637224 0.677444 0.176581 0.441011 0.361804 0.268409C0.547026 0.0958068 0.790823 -0.000114433 1.044 2.56579e-07H4.58C4.70404 -0.000125334 4.8237 0.045859 4.91573 0.12902C5.00776 0.212182 5.0656 0.326583 5.078 0.45C5.101 0.68 5.122 0.863 5.142 1.002C5.34073 2.38892 5.748 3.73783 6.35 5.003C6.445 5.203 6.383 5.442 6.203 5.57L4.045 7.112C5.36445 10.1865 7.81455 12.6365 10.889 13.956L12.429 11.802C12.4919 11.714 12.5838 11.6509 12.6885 11.6237C12.7932 11.5964 12.9042 11.6068 13.002 11.653C14.267 12.2539 15.6156 12.6601 17.002 12.858C17.141 12.878 17.324 12.9 17.552 12.922C17.6752 12.9346 17.7894 12.9926 17.8724 13.0846C17.9553 13.1766 18.0002 13.2961 18 13.42Z"
                            fill="#2D233D" />
                    </svg>
                </div>
                <div>
                    +371 67 785 406<br>
                    +371 67 830 841
                </div>
            </div>
            <div class="flex flex-row gap-4">
                <div><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 0H19C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM18 4.238L10.072 11.338L2 4.216V16H18V4.238ZM2.511 2L10.061 8.662L17.502 2H2.511Z"
                            fill="#2D233D" />
                    </svg>

                </div>
                <div>
                    info@viaa.gov.lv
                </div>
            </div>


            <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Adrese</h2>
            <div class="flex flex-row gap-4">
                <div><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 5.14277V17.9668L7.065 15.7968L13.065 18.7968L18 16.6798V3.85677L19.303 3.29877C19.3791 3.26615 19.4621 3.25294 19.5445 3.26031C19.627 3.26769 19.7063 3.29542 19.7754 3.34101C19.8445 3.38661 19.9012 3.44865 19.9404 3.52157C19.9796 3.59448 20.0001 3.67599 20 3.75877V17.9998L13 20.9998L7 17.9998L0.697 20.7008C0.620914 20.7334 0.537919 20.7466 0.455466 20.7392C0.373012 20.7319 0.293679 20.7041 0.224587 20.6585C0.155495 20.6129 0.0988058 20.5509 0.059607 20.478C0.0204082 20.4051 -7.34563e-05 20.3236 1.9795e-07 20.2408V5.99977L2 5.14277ZM14.243 10.2428L10 14.4848L5.757 10.2428C4.91799 9.40361 4.34664 8.33451 4.11521 7.17066C3.88379 6.0068 4.00266 4.80045 4.45682 3.70415C4.91098 2.60786 5.68001 1.67084 6.66668 1.0116C7.65336 0.352356 8.81336 0.000488281 10 0.000488281C11.1866 0.000488281 12.3466 0.352356 13.3333 1.0116C14.32 1.67084 15.089 2.60786 15.5432 3.70415C15.9973 4.80045 16.1162 6.0068 15.8848 7.17066C15.6534 8.33451 15.082 9.40361 14.243 10.2428ZM10 11.6568L12.828 8.82777C13.3875 8.26841 13.7686 7.55568 13.9231 6.77972C14.0775 6.00376 13.9983 5.19944 13.6956 4.46846C13.3929 3.73749 12.8802 3.1127 12.2224 2.67312C11.5646 2.23354 10.7912 1.99892 10 1.99892C9.20882 1.99892 8.43542 2.23354 7.77759 2.67312C7.11977 3.1127 6.60708 3.73749 6.30437 4.46846C6.00165 5.19944 5.92251 6.00376 6.07695 6.77972C6.23139 7.55568 6.61247 8.26841 7.172 8.82777L10 11.6568Z"
                            fill="#2D233D" />
                    </svg>


                </div>
                <div>
                    Vaļņu iela 1, Rīga, LV-1050, Latvija
                </div>
            </div>

            <button type="button"
                class="text-white bg-primary hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-6">Kā
                nokļūt?</button>

        </div>
    </div>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Programmas</h2>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        @include('includes.card-programma', [
    'severity' => 'primary',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'secondary',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'third',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'success',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
        @include('includes.card-programma', [
    'severity' => 'success-dark',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
        @include('includes.card-programma', [
    'severity' => 'warning',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'error',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
    </div>

</div>
@endsection
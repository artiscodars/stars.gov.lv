@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>
    <h3>Parastas</h3>

    <example class="not-prose">

        <button type="button"
            class="text-white bg-primary hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Primārā</button>
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-white bg-secondary rounded-lg border border-gray-200 hover:opacity-70  focus:z-10 focus:ring-4 focus:ring-gray-100">Alternatīva</button>
        <button type="button"
            class="text-white bg-third hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Trešā</button>
        <button type="button"
            class="text-gray-900 bg-light  hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Gaiša</button>
        <button type="button"
            class="text-white bg-success hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Zaļa</button>
        <button type="button"
            class="text-white bg-error hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Sarkana</button>
        <button type="button"
            class="text-white bg-warning hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Dzeltena</button>


    </example>

    <h3>Caurās pogas</h3>
    <example class="not-prose">

        <button type="button"
            class="text-primary border border-primary hover:bg-primary hover:text-white focus:ring-4 focus:ring-primary-light font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Primārā</button>
        <button type="button"
            class="text-primary border border-secondary hover:bg-secondary hover:text-white focus:ring-4 focus:ring-primary-light font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Alternatīva</button>
        <button type="button"
            class="text-primary border border-third hover:opacity-70 hover:text-white focus:ring-4 focus:ring-primary-light font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Trešā</button>
        <button type="button"
            class="text-success border border-success hover:bg-success hover:text-white  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Zaļa</button>
        <button type="button"
            class="text-error border border-error hover:bg-error hover:text-white  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Sarkana</button>
        <button type="button"
            class="text-warning border border-warning hover:bg-warning hover:text-white  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Dzeltena</button>


    </example>

    <h3>Izmēri</h3>

    <example class="not-prose">

        <button type="button"
            class="px-3 py-2 text-xs font-medium text-white bg-primary  rounded-lg hover:opacity-70 focus:ring-4 focus:ring-primary-light">Ļoti
            maza</button>
        <button type="button"
            class="px-3 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:opacity-70 focus:ring-4 focus:ring-primary-light">Maza</button>
        <button type="button"
            class="px-5 py-2.5 text-sm font-medium text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light rounded-lg">Bāze</button>
        <button type="button"
            class="px-5 py-3 text-base font-medium text-white bg-primary rounded-lg hover:opacity-70 focus:ring-4 focus:ring-primary-light">Liela</button>
        <button type="button"
            class="px-6 py-3.5 text-base font-medium text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light rounded-lg">Ļoti
            liela</button>

    </example>

    <h3>Ar piktorgrammām</h3>

    <example class="not-prose">

        <button type="button"
            class="px-3 py-2 text-xs font-medium text-white bg-primary rounded-lg hover:opacity-70 focus:ring-4 focus:ring-primary-light inline-flex items-center">
            <svg class="w-3 h-3 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 16">
                <path d="M10.036 8.278L19.294.488A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541L10.036 8.278Z" />
                <path
                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5L11.241 9.817Z" />
            </svg>
            Ļoti maza
        </button>
        <button type="button"
            class="px-3 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:opacity-70 focus:ring-4 focus:ring-primary-light inline-flex items-center">
            <svg class="w-3 h-3 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 16">
                <path d="M10.036 8.278L19.294.488A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541L10.036 8.278Z" />
                <path
                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5L11.241 9.817Z" />
            </svg>
            Maza
        </button>
        <button type="button"
            class="px-5 py-2.5 text-sm font-medium text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light rounded-lg inline-flex items-center">
            <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 16">
                <path d="M10.036 8.278L19.294.488A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541L10.036 8.278Z" />
                <path
                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5L11.241 9.817Z" />
            </svg>
            Bāze
        </button>
        <button type="button"
            class="px-5 py-3 text-base font-medium text-white bg-primary rounded-lg hover:opacity-70 focus:ring-4 focus:ring-primary-light inline-flex items-center">
            <svg class="w-4 h-4 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 16">
                <path d="M10.036 8.278L19.294.488A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541L10.036 8.278Z" />
                <path
                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5L11.241 9.817Z" />
            </svg>
            Liela
        </button>
        <button type="button"
            class="px-6 py-3.5 text-base font-medium text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light rounded-lg inline-flex items-center">
            <svg class="w-4 h-4 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 16">
                <path d="M10.036 8.278L19.294.488A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541L10.036 8.278Z" />
                <path
                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5L11.241 9.817Z" />
            </svg>
            Ļoti liela
        </button>

    </example>

    <h3>Piktorgrammu pogas</h3>

    <example class="not-prose">

        <button type="button"
            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light font-medium rounded-lg text-sm p-2.5 inline-flex items-center me-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
            <span class="sr-only">Ikonas apraksts</span>
        </button>
        <button type="button"
            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light font-medium rounded-full text-sm p-2.5 inline-flex items-center me-2">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
            <span class="sr-only">Ikonas apraksts</span>
        </button>
        <button type="button"
            class="text-primary border border-primary hover:bg-primary hover:text-white focus:ring-4 focus:ring-primary-light font-medium rounded-lg text-sm p-2.5 inline-flex items-center me-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 18 18">
                <path
                    d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
            </svg>
            <span class="sr-only">Ikonas apraksts</span>
        </button>
        <button type="button"
            class="text-primary border border-primary hover:bg-primary hover:text-white focus:ring-4 focus:ring-primary-light font-medium rounded-full text-sm p-2.5 inline-flex items-center">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 18 18">
                <path
                    d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
            </svg>
            <span class="sr-only">Ikonas apraksts</span>
        </button>

    </example>

    <h3>Ar progresa indikatoru</h3>

    <example class="not-prose">

        <button disabled type="button"
            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light font-medium rounded-lg text-sm px-5 py-2.5 me-2 inline-flex items-center">
            <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin"
                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                    fill="#E5E7EB" />
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="currentColor" />
            </svg>
            Ielādē...
        </button>
        <button disabled type="button"
            class="py-2.5 px-5 me-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary focus:z-10 focus:ring-4 focus:ring-primary-light dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
            <svg aria-hidden="true" role="status"
                class="inline w-4 h-4 me-3 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                    fill="currentColor" />
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="#1C64F2" />
            </svg>
            Ielādē...
        </button>

    </example>

</div>
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('user.store') }}" class="fixed bottom-75 right-25 bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                Ajouter un profil
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{route ('pedagogie.home')}}" class="fixed bottom-75 right-25 bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                Ajouter une année scolaire
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="/view/pedagogie/store" class="fixed bottom-75 right-25 bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                Ajouter une salle
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="/view/pedagogie/store" class="fixed bottom-75 right-25 bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                Ajouter une classe
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="/view/pedagogie/store" class="fixed bottom-75 right-25 bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                Ajouter un étudiant
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="/view/pedagogie/store" class="fixed bottom-75 right-25 bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                Ajouter un cours
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="/view/pedagogie/home" class="fixed bottom-75 right-25 bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
                Ajouter un professeur
                </a>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

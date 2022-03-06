<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies Management') }}
        </h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('companies.index') }}"> < Back</a>
        </div>
    </x-slot>

    <x-banner/>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('New company') }}</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        This information will be displayed publicly so be careful what you share.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">

                                {!! Form::open(array('route' => 'companies.store','method'=>'POST')) !!}

                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <label for="name"
                                                    class="block text-sm font-medium text-gray-700">
                                                    Name
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    {!! Form::text('name', null, array('placeholder' => 'Name','class'
                                                    =>
                                                    'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full
                                                    rounded-none rounded-r-md sm:text-sm border-gray-300')) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">Permissions</legend>
                                            <div class="mt-4 space-y-4">
                                                @foreach($permission as $value)
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded')) }}
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="{{ $value->id }}" class="font-medium text-gray-700">
                                                            {{ $value->name }}</label>
                                                        <p class="text-gray-500">{{ $value->description }}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

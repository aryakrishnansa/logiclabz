<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Member') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <form class="row g-3" action="{{route('members.store')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" name="name" id="inputName" value="{{ old('name') }}" class="form-control @error('name')  is-invalid @enderror">
                    </div>
                    <div class="col-md-12">
                        <label for="inputMobile" class="form-label">Mobile Number</label>
                        <input type="text" name="mobile_no" value="{{ old('mobile_no') }}" id="inputMobile" class="form-control @error('mobile_no')  is-invalid @enderror">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCompanyName" class="form-label">Company Name</label>
                        <input type="text" name="comp_name" value="{{ old('comp_name') }}" id="inputCompanyName" class="form-control @error('comp_name')  is-invalid @enderror">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save New Member</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

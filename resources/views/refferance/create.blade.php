<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Refferance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <form class="row g-3" action="{{route('refferance.store')}}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputName" class="form-label">Referrance From</label>
                        <select name="refFromref_from_id" class="form-control @error('from_id')  is-invalid @enderror">
                            <option value="">Select</option>
                            @foreach($members as $member)
                                <option value="{{$member->id}}">{{$member->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputtoid" class="form-label">Referrance To</label>
                        <select name="refFromref_to_id" class="form-control @error('to_id')  is-invalid @enderror">
                            <option value="">Select</option>
                            @foreach($members as $member)
                                <option value="{{$member->id}}">{{$member->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress2" class="form-label">Amount</label>
                        <input type="text" name="amount" id="amount" value="{{ old('amount') }}" class="form-control @error('amount')  is-invalid @enderror">
                    </div>
                    <div class="col-md-12">
                        <label for="inputMobile" class="form-label">Month</label>
                        <input type="text" name="month" id="month" value="{{ old('month') }}" class="form-control @error('month')  is-invalid @enderror">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCompanyName" class="form-label">Year</label>
                        <input type="text" name="Year" id="Year" value="{{ old('Year') }}" class="form-control @error('Year')  is-invalid @enderror">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save New Referance</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

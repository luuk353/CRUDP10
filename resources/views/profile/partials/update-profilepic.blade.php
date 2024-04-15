<form method="post" action="{{ route('profile.updateprofilepic') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
    @csrf
    @method('patch')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 rounded bg-black p-4 text-white">{{ $error }}</div>
        @endforeach
    @endif

    <div>
        <label for="profilepic" class="text-lg font-medium text-gray-900">Update Profile Picture</label>
        <input id="profilepic" name="profilepic" type="file" class="mt-1 block w-full" title="Profiel foto" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>
            Save
        </x-primary-button>

        @if (session('status') === 'profilepic-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">Saved.</p>
        @endif
    </div>
</form>

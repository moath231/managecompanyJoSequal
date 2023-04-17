<x-layout>
  <x-setting heading="edit tables">
    <form action="/adminCompany/{{ $comapny->id }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      {{-- @dd(asset('/public/storage/'.$comapny->logo)) --}}
      <x-form.input name="name" :value="$comapny->name" />
      <x-form.input name="email" :value="$comapny->email" />
      <div class="flex">
        <x-form.input name="logo" type="file" />
        <img src="{{ asset('storage/' . $comapny->logo) }}" alt="{{ $comapny->name }}" width="100" height="200">
      </div>
      <x-form.input name="website" :value="$comapny->website" />
      <x-form.button>update</x-form.button>
    </form>
  </x-setting>
</x-layout>

<x-layout>
  <x-setting heading="company tables">
    <form action="{{ route('adminCompany.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <x-form.input name="name" />
      <x-form.input name="email" />
      <x-form.input name="logo" type="file" />
      <x-form.input name="website" />
      <x-form.button>Add new</x-form.button>
    </form>
  </x-setting>
</x-layout>

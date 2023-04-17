<x-layout>
  <x-setting heading="employee tables">
    <form action="{{ route('adminEmployee.store') }}" method="post">
      @csrf
      <x-form.input name="Fname" />
      <x-form.input name="Lname" />
      <div class="mb-5">
        <x-form.label name="company" />
        <select name="company_id" id="company"
          class="w-full rounded-xl border border-gray-200 bg-gray-50 p-2 outline-none">
          <option value="" selected disabled>choose one</option>
          @foreach (App\Models\company::all() as $a)
            <option value="{{ $a->id }}">{{ $a->name }}</option>
          @endforeach
        </select>
        <x-form.error name="company" />
      </div>
      <x-form.input name="email" type="email" />
      <x-form.input name="phone" type="phone" />
      <x-form.button>Add new</x-form.button>
    </form>
  </x-setting>
</x-layout>

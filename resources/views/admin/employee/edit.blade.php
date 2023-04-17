<x-layout>
  <x-setting heading="edit Employee tables">
    <form action="/adminEmployee/{{ $e->id }}" method="post">
      @csrf
      @method('PATCH')
      <x-form.input name="Fname" :value="$e->Fname" />
      <x-form.input name="Lname" :value="$e->Lname" />
      <div class="mb-5">
        <x-form.label name="company" />
        <select name="company_id" id="company"
          class="w-full rounded-xl border border-gray-200 bg-gray-50 p-2 outline-none">
          <option value="" selected disabled>{{ $e->company->name }}</option>
          @foreach (App\Models\company::where('id', '!=', $e->company->id)->get() as $a)
            <option value="{{ $a->id }}">{{ $a->name }}</option>
          @endforeach
        </select>
        <x-form.error name="company" />
      </div>
      <x-form.input name="email" type="email" :value="$e->email" />
      <x-form.input name="phone" type="phone" :value="$e->phone" />
      <x-form.button>update</x-form.button>
    </form>
  </x-setting>
</x-layout>
